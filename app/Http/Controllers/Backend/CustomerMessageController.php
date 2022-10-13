<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerMessageRequest;
use App\Models\CustomerMessage;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    public function store (CustomerMessageRequest $request){

         CustomerMessage::create($request->except('_token'));
         
         return back()->with('message',"Thank You for you'r message . We will Contact you later");
    }

    public function show_message(){

        $message=CustomerMessage::all();
        foreach($message as $data){
            if($data->status==1){
                $data->status=0;
            }
            $data->update();
        }

        $data=CustomerMessage::all();
        return view('backend.contact.user_message',compact('data'));    
    }

     public function destroy($id){
        $message=CustomerMessage::find($id)->delete();
        return redirect()->back()->withSuccess('Delete Data Successfully');  
     }

     public function messageDateFilter(){
        $data = CustomerMessage::whereBetween('created_at', [request()->start_date, request()->end_date])->paginate(10);
        // $categories   = Category::orderBy('name', 'asc')->get();
        return view('backend.contact.user_message',compact('data'));


     }
     public function messageDataSearch(Request $request){
        $search=$request->search;
        $data = CustomerMessage::where('customer_name','Like','%'.$search.'%')->orwhere('customer_email','Like','%'.$search.'%')->orwhere('customer_message','Like','%'.$search.'%')->get();
        return view('backend.contact.user_message',compact('data'));

     }

     public function mass_delete(Request $request)
     {
        $data = CustomerMessage::findMany($request->ids);
        $data->each->delete();
        return response()->json(['success' => 'Delete Successfully!']);
     }

     

     
   
}
