<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact=Contact::first();
        return view('backend.contact.create',compact('contact'));

    }

    public function update(Request $request, Contact $contact, $id){

        $request->validate([
            // 'email'     =>'required|email|unique:Contacts,email,'.$contact->id,
            // 'email'  =>'required|email|unique:Contacts',
            'email'=>'required|email',
            'phone'     =>'required',
            'email_font'=>'required',
            'alter_email'=>'required',
            'phone_font'=>'required',
            'alter_phone'=>'required',
            'address_font'=>'required',
            'address'=>'required',   
        ]);
        
         Contact::find($id)->update($request->except('_token'));
         return back()->with('success','Data Updated Successfully');
         
         
    }
}
