<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            $data->slug =Str::slug($request->title);
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

    //     public function servicelview($id){
        
    //     $data=Service::find($id);

    //     return view('backend.pages.service_edit_view',compact('data'));
    //    }  

       public function update(Request $request, $id){

        $request->validate([
            'icon' =>'required',
            'title'=>'required',
            'Short_description'=>'required',
            'button_text'=>'required',
            'image' => 'image',
            'short_description2'=>'required',
            'advise'=>'required',
            'advisor_name'=>'required',
            'heading'=>'required',
            'point'=>'required',     

        ]);
        
        $updeateservice= Service::find($id);
        if($image=$request->image){
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/service/'); 
            $image->move($location, $filename);
            $updeateservice->image = $filename;  
        } 

        // Service::find($id)->update($request->except('_token'));
        $updeateservice->icon=$request->icon;
        $updeateservice->title=$request->title;
        $updeateservice->Short_description=$request->Short_description;
        $updeateservice->button_text=$request->button_text;
        $updeateservice->short_description2=$request->short_description2;
        $updeateservice->advise=$request->advise;
        $updeateservice->advisor_name=$request->advisor_name;
        $updeateservice->point=$request->point;
        $updeateservice->heading=$request->heading;
        $updeateservice->update();
        return redirect()->route('admin.servicetableview')->with('success',' Data Updated Successfully');

 
       }

       public function editview($id){
        $item=Service::find($id);
        return view('backend.pages.service_edit_view',compact('item'));

       }

       public function updateview(){
        
        $data=OurService::first();
        return view('backend.pages.ourservice_edit_view',compact('data'));

       }
        
       public function updateourservice(Request $request, $id){
          
        $request->validate([
            'image'=>'image',
            'advise'=> 'required',
            'short_description'=>'required',
            'advisor_name'=>'required',
            'heading'=>'required',
            'point'=>'required',
        ]);

        $data=OurService::find($id);
        if($image=$request->image){
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/ourservice/'); 
            $image->move($location, $filename);
            $data->image = $filename;  
        } 
        $data->short_description=$request->short_description;
        $data->advise=$request->advise;
        $data->advisor_name=$request->advisor_name;
        $data->heading=$request->heading;
        $data->point=$request->point;
        $data->update();
        return back()->withSuccess('Data Updated Successfully');

       }

       public function serviceDateFilter(){

        $alldata = Service::whereBetween('created_at', [request()->start_date, request()->end_date])->paginate(10);
        // $categories   = Category::orderBy('name', 'asc')->get();
        return view('backend.pages.servicetable',compact('alldata'));
       }

       public function serviceDataSearch(Request $request){
        $search=$request->search;
        $alldata = Service::where('title','Like','%'.$search.'%')->orwhere('advisor_name','Like','%'.$search.'%')->paginate(10);
        return view('backend.pages.servicetable',compact('alldata'));
       }
}

