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

        $data=CustomerMessage::all();
        return view('backend.contact.user_message',compact('data'));

    }

    public function mass_delete(Request $request){

        $ids=$request->ids;
        CustomerMessage::whereIn('id',$ids)->delete();
        return redirect()->back();
    }

     public function destroy($id){

        $message=CustomerMessage::find($id)->delete();
        return redirect()->back();
        
     }
   
}
