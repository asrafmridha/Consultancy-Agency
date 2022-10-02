<?php

namespace App\Http\Controllers\Frontend;
use App\Models\HeaderText;
use App\Http\Controllers\Controller;
use App\Models\ClientFeedback;
use App\Models\Contact;
use App\Models\CustomerTrust;
use App\Models\Experience;
use App\Models\ProjectIdea;
use App\Models\RecentWork;
use App\Models\Service;
use App\Models\TeamImage;
use App\Models\Title;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $headertext=HeaderText::first();
        $recentwork=RecentWork::all();
        $teamimages=TeamImage::all();
        $service=Service::all();
        $feedback=ClientFeedback::all();
        $projectidea=ProjectIdea::first();
        $experience =Experience::first();
        $customertrust=CustomerTrust::all();
        $title=Title::first();
        
        // return view('welcome',compact('headertext','teamimages','recentwork','service'));
        return view('frontend.pages.home',compact('headertext','service','recentwork','teamimages','feedback','projectidea','experience','customertrust','title'));
        
        
    }

    public function contact(){
        $contact=Contact::first();
        return view('frontend.pages.contact',compact('contact'));
    }

    public function case(){
        $recentwork=RecentWork::all();
        return view('frontend.pages.case',compact('recentwork'));

    }

    public function testimonials(){
        return view('frontend.pages.testimonials');
    }

    public function about(){
        $experience=Experience::first();
        return view('frontend.pages.about',compact('experience'));
    }
   
    public function service($id){
        $title=Title::first();
        $item=Service::find($id);     
        return view('frontend.pages.service',compact('item','title'));
    }
 
}
