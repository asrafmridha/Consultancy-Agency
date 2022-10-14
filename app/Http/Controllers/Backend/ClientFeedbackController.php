<?php

namespace App\Http\Controllers\Backend;

use App\Exports\FeedbackExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\ClientFeedback;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ClientFeedbackController extends Controller
{
    public function index(){
        return view('backend.clientfeedback.addview_clientfeedback');
    }

    public function store(ClientFeedbackRequest $request){

        $feedback= new ClientFeedback;
        $image = $request->image; 
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/client/'); 
        $image->move($location, $filename); 

        $feedback->image=$filename;
        $feedback->client_name=$request->client_name;
        $feedback->short_description=$request->short_description;
        $feedback->designation=$request->designation;
        $feedback->star=$request->star;
        $feedback->save();
        return redirect()->route('feedback.show')->with('success','Save Data Successfully');
    }

    public function show(){
        $data=ClientFeedback::paginate(6);
        return view('backend.clientfeedback.table_clientfeedback',compact('data'));
    }

    public function destroy($id){

        $data=ClientFeedback::find($id);
        $data->delete();
        return back()->withSuccess('Deleted Data Successfully');
    }

    public function updateview($id){

        $data=ClientFeedback::find($id);
        return view('backend.clientfeedback.update_show',compact('data'));
    }

    public function update(UpdateFeedbackRequest $request, $id){

        $feedback= ClientFeedback::find($id);
        if($image = $request->image){
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/client/'); 
            $image->move($location, $filename); 
            $feedback->image=$filename;
        }
       

        
        $feedback->client_name=$request->client_name;
        $feedback->short_description=$request->short_description;
        $feedback->designation=$request->designation;
        $feedback->star=$request->star;
        $feedback->update();
        return redirect()->route('feedback.show')->with('success','Update Data Successfully');
    }
   
    public function feedbackkDateFilter(){
        $data = ClientFeedback::whereBetween('created_at', [request()->start_date, request()->end_date])->paginate(10);
        return view('backend.clientfeedback.table_clientfeedback',compact('data'));
       }
    
    public function feedbackDataSearch(Request $request){
        $search=$request->search;
        $data = ClientFeedback::where('client_name','Like','%'.$search.'%')->orWhere('designation','Like','%'.$search.'%')->get();
        return view('backend.clientfeedback.table_clientfeedback',compact('data'));
    } 
    
    public function mass_delete(Request $request){
        $data=ClientFeedback::findMany($request->ids);
        $data->each->delete();
        return response()->json(['success' => 'Delete Successfully!']);
    }

    public function feedback_mass_export(Request $request){

        $explode = explode(',', $request->id);
        $ids = [];
        foreach($explode as $id){
            array_push($ids, $id);
        }
        // return $request;
        return Excel::download(new FeedbackExport($ids), 'clientfeedback.xlsx');
    }
}
