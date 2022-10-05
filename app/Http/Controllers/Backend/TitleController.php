<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function show()
   {
    $title=Title::first();
    return view('backend.title.show',compact('title'));
   }

   public function update(Request $request, $id){
    $request->validate([
   
        'banner_title'         =>'required',
        'service_title'        =>'required',
        'service_heading'      =>'required',
        'service2_title'       =>'required',
        'service2_heading'     =>'required',
        'testimonials_title'   =>'required',
        'testimonials_heading' =>'required',
        'team_title'           =>'required',
        'team_heading'         =>'required',
        'contact_title'        =>'required',
        'contact_heading'      =>'required',
        'case_studies_title'   =>'required',
        'case_studies_heading' =>'required',

        'client_title' =>'required',
        'client_heading' =>'required',
        'success_area_title' =>'required',
        'success_area_heading' =>'required',
        'mail_title' =>'required',
        'mail_heading' =>'required',
        'phone_title' =>'required',
        'phone_heading' =>'required',
        'location_title' =>'required',
        'location_heading' =>'required',



    ]);

    Title::find($id)->update($request->except('_token'));
    return back()->with('success','Data Updated Successfully');
   }

}
