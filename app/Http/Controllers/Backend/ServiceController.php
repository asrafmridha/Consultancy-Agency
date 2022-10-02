<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index(){
        return view('backend.pages.serviceview');
    }

    public function store(Request $request){

        $request->validate([
            'icon'=>'required',
            'short_description2'=>'required',
            'advise'=>'required',
            'advisor_name'=>'required',
            'heading'=>'required',
            'point'=>'required', 
            'image'=>'required','image',  
            'title'=>'required',
            'Short_description'=>'required',
            'button_text'=>'required',
    
            ]); 

            $image = $request->image; 
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/service/'); 
            $image->move($location, $filename); 

            $data= new Service();
            $data->icon=$request->icon;
            $data->title=$request->title;
            $data->Short_description=$request->Short_description;
            $data->button_text=$request->button_text;
            $data->image=$filename;
            $data->short_description2=$request->short_description2;
            $data->advise=$request->advise;
            $data->advisor_name=$request->advisor_name;
            $data->heading=$request->heading;
            $data->point=$request->point;
            $data->save();
            return redirect()->route('admin.servicetableview')->with('success','Save Data Successfully');
    
        }

        public function servicetableview(){
             $alldata=Service::paginate(6);
            // $alldata=DB::table('Services')->paginate(5);
            return view('backend.pages.servicetable',compact('alldata'));

        }

        public function show(){

            $alldata=Service::all();
           

            return response()->json([

                'alldata'=>$alldata
            ]);
        }

        public function destroy($id){

            $destoryservice=Service::find($id);
            $destoryservice->delete();

           return back()->with('success','Data Deleted Successfully');
        }

        public function servicelview($id){
        
        $data=Service::find($id);

        return view('backend.pages.service_edit_view',compact('data'));

        

       }  

       public function update(Request $request, $id){

        $request->validate([
            'title'=>'required',
            'Short_description'=>'required',
            'button_text'=>'required',
        ]);
        

        $updeateservice= Service::find($id);
        $updeateservice->title=$request->title;
        $updeateservice->Short_description=$request->Short_description;
        $updeateservice->button_text=$request->button_text;
        $updeateservice->update();

        return redirect()->route('admin.servicetableview')->with('success',' Data Updated Successfully');

 
       }


}

