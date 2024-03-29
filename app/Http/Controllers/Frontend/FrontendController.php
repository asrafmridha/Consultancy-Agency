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
use App\Models\RecentWorkButton;
use App\Models\Service;
use App\Models\TeamImage;
use App\Models\Blog;
use App\Models\Iframe;
use App\Models\Title;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        // $headertext = HeaderText::first();
        $headertext = DB::table('header_texts')->first();
        $recentwork = RecentWork::all();
        $teamimages = TeamImage::all();
        $service = Service::all();
        $feedback = ClientFeedback::orderBy('id', 'DESC')->paginate(3);
        $projectidea = ProjectIdea::first();
        $experience = Experience::first();
        $customertrust = CustomerTrust::all();
        $title = Title::first();
        $embed = Iframe::first();
        $recentwork_button = RecentWorkButton::first();

        // return view('welcome',compact('headertext','teamimages','recentwork','service'));
        return view('frontend.pages.home', compact('headertext', 'service', 'recentwork', 'teamimages', 'feedback', 'projectidea', 'experience', 'customertrust', 'title', 'recentwork_button', 'embed'));
    }

    public function contact()
    {
        $contact = Contact::first();
        $title = Title::first();
        return view('frontend.pages.contact', compact('contact', 'title'));
    }

    public function case()
    {
        $recentwork = RecentWork::all();
        $recentwork_button = RecentWorkButton::first();
        return view('frontend.pages.case', compact('recentwork', 'recentwork_button'));
    }

    public function testimonials()
    {
        return view('frontend.pages.testimonials');
    }

    public function about()
    {
        $experience = Experience::first();
        return view('frontend.pages.about', compact('experience'));
    }

    public function service($slug)
    {
        $projectidea = ProjectIdea::first();
        $title = Title::first();
        $item = Service::where('slug', $slug)->first();
        $recentwork = RecentWork::all();
        return view('frontend.pages.service', compact('item', 'title', 'projectidea', 'recentwork'));
    }

    public function service2()
    {

        $projectidea = ProjectIdea::first();
        $title = Title::first();
        $recentwork = RecentWork::all();
        $ourservice = OurService::first();
        return view('frontend.pages.service2', compact('title', 'projectidea', 'recentwork', 'ourservice'));
    }

    public function footer()
    {
        $footer = Contact::first();
        return view('frontend.includes.footer', compact('footer'));
    }
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(3);
        return view('frontend.pages.blog', compact('blogs'));
    }
    public function blogDetails($id)
    {
        $blog = Blog::find($id);
        return view('frontend.pages.blog_details', compact('blog'));
    }
}
