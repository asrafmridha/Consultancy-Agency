<?php

namespace App\Http\Controllers\Frontend;
use App\Models\HeaderText;
use App\Http\Controllers\Controller;
use App\Models\ClientFeedback;
use App\Models\Contact;
use App\Models\CustomerTrust;
use App\Models\Experience;
use App\Models\OurService;
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
        $title=Title::first();
        return view('frontend.pages.contact',compact('contact','title'));
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
   
    public function service($slug){
        $projectidea=ProjectIdea::first();
        $title=Title::first();
        $item=Service::where('slug',$slug)->first(); 
        $recentwork=RecentWork::all();  
        return view('frontend.pages.service',compact('item','title','projectidea','recentwork'));
    }

    public function service2(){

        $projectidea=ProjectIdea::first();
        $title=Title::first(); 
        $recentwork=RecentWork::all(); 
        $ourservice=OurService::first();
        return view('frontend.pages.service2',compact('title','projectidea','recentwork','ourservice'));
    }

    public function footer(){
        $footer=Contact::first();
        return view('frontend.includes.footer',compact('footer'));     
    }
 
}
