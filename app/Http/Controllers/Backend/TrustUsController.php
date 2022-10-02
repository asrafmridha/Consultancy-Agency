<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerTrust;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TrustUsController extends Controller
{
    public function index(){
        return view('backend.trust.create');
    }

    public function store(Request $request){

        $request->validate([

            'image'=>'required|image'

        ]);

        $image = $request->image; 
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/trustus/'); 
        $image->move($location, $filename); 

        $data=new CustomerTrust();
        $data->image=$filename;
        $data->save();
        return redirect()->route('trust.show')->with('success','Image Save Successfully');
    }
    
    public function show(){
        $data= CustomerTrust::all();        
        return view('backend.trust.show',compact('data'));
    }
    public function destroy($id){
        CustomerTrust::find($id)->delete();
        return redirect()->route('trust.show')->with('success','Image Delete Successfully');
    }

    public function update(Request $request, $id){
        $request->validate([

            'image'=>'image'
        ]);
        $data =CustomerTrust::find($id);
        if($image = $request->image){
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/trustus/'); 
            $image->move($location, $filename); 
            $data->image=$filename;
        }

        $data->update();
        return redirect()->route('trust.show')->with('success','Data Updated Successfully');
     
    }
}