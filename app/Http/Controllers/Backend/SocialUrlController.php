<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialUrl;
use Illuminate\Http\Request;

class SocialUrlController extends Controller
{
    public function index(){
        
        return view('backend.social.social_url');
    }

    public function update(Request $request, $id){
        $request->validate([
            'fb_url'=>'required',
            'twitter_url'=>'required',
            'pinterest_url'=>'required',
            'linkedin_url'=>'required',
        ],[
            'fb_url.required' => "Facebook Url Must Required",
            'twitter_url.required' => "Twitter  Url Must Required",
            'pinterest_url.required' => "Pinterest Url Must Required",
            'linkedin_url.required' => "Linkedin Url Must Required",
        ]);

       
     SocialUrl::find($id)->update($request->except('_token'));
     return back()->withSuccess('Data Update Successfully');

    }
}
