<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\TeamImage;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teamview(){

        return view('backend.pages.teamaddview');
    }

    public function create(TeamRequest $request ){

        $team=new TeamImage;
        $image = $request->image; 
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/team/'); 
        $image->move($location, $filename); 

        $team->image = $filename; 
        $team->name=$request->name;
        $team->designation=$request->designation;
        $team->fb_link=$request->fb_link;
        $team->twitter_link=$request->twitter_link;
        $team->linkedin_link=$request->linkedin_link;
        $team->pinterest_link=$request->pinterest_link;
        $team->save();

        return back()->with('success','Save Data Successfully');

      
     
    }  
    
    public function teamtable(){
        
        $data= TeamImage::all();
        return view('backend.pages.teamtable',compact('data'));
    }

    public function destroy($id){
        $data=TeamImage::find($id);
        $data->delete();
        return redirect()->back()->with('success', "Delete Data Successfully");
    }

    
    public function showdata($id){

        $data=TeamImage::find($id);
        return view('backend.pages.updateteamview',compact('data'));
    }

    public function update(Request $request, $id){

        $request->validate([
       
            'name'=>'required',
            'designation'=>'required',
            'image'=>'image'

        ]);

        
        $team=TeamImage::find($id);
        if($image=$request->image){
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/team/'); 
            $image->move($location, $filename);
            $team->image = $filename;  
        } 
       
        $team->name=$request->name;
        $team->designation=$request->designation;
        $team->fb_link=$request->fb_link;
        $team->twitter_link=$request->twitter_link;
        $team->linkedin_link=$request->linkedin_link;
        $team->pinterest_link=$request->pinterest_link;
        $team->update();

        return back()->with('success','Update Data Successfully');


    }
}
