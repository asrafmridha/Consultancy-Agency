<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceUpdateRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function updateview(){
        $data=Experience::first();
       return view('backend.experience.experiencearea',compact('data'));
   }

   public function update(ExperienceUpdateRequest $request ,$id){
    
    $data=Experience::find($id);
    if($image=$request->first_image){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->first_image = $filename; 
    } 

    if($image=$request->second_image){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->second_image = $filename; 
    } 

    if($image=$request->side_image1){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->side_image1 = $filename; 
    } 

    if($image=$request->side_image2){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->side_image2 = $filename; 
    } 

    
    if($image=$request->side_image3){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->side_image3 = $filename; 
    } 

    if($image=$request->side_image4){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->side_image4 = $filename; 
    } 

    if($image=$request->about_first_image){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->about_first_image = $filename; 
    } 

    if($image=$request->about_second_image){
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/experience/'); 
        $image->move($location, $filename);
        $data->about_second_image = $filename; 
    } 
     
     $data->years=$request->years;
     $data->heading=$request->heading;
     $data->heading2=$request->heading2;
     $data->title=$request->title;
     $data->short_description=$request->short_description;
     $data->compelte_project=$request->compelte_project;
     $data->satisfied_project=$request->satisfied_project;
     $data->ongoing_project=$request->ongoing_project;
     $data->update();

    return back()->with('success','Data Updated Successfully');
    
   }

   public function add_image_view(){

    return view('backend.experience.addimage');
   }
}
