<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectAreaRequest;
use App\Models\ProjectIdea;
use Illuminate\Http\Request;

class ProjectAreaController extends Controller
{

    public function updateview(){
         $data=ProjectIdea::first();
        return view('backend.project.projectarea',compact('data'));
    }

    public function update(ProjectAreaRequest $request ,$id){

        $data= ProjectIdea::find($id);
        $data->heading=$request->heading;
        $data->title=$request->title;
        $data->button_text=$request->button_text;
        $data->update();

        return back()->with('success','Data Updated Successfully');



    }



}
