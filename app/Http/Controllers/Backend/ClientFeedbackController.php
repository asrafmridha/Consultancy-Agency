<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\ClientFeedback;
use Illuminate\Http\Request;

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
        return back()->with('success','Save Data Successfully');
    }

    public function show(){
        $data=ClientFeedback::all();
        return view('backend.clientfeedback.table_clientfeedback',compact('data'));

    }

    public function destroy($id){

        $data=ClientFeedback::find($id);
        $data->delete();
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
        return back()->with('success','Update Data Successfully');



    }
}
