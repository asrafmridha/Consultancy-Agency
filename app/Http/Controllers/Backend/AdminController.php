<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientFeedback;
use App\Models\CustomerMessage;
use App\Models\RecentWorkButton;
use App\Models\Service;
use App\Models\TeamImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index(){
    $team=TeamImage::count('name');
    $message=CustomerMessage::count('customer_message');
    $review=ClientFeedback::count('client_name');
    // $service=RecentWorkButton::count('button');
    return view('dashboard',compact('team','message','review'));
   }

   public function myProfile(){
      return view('backend.my-profile');
   }

   public function profile_update(Request $request, $id){

      // $data = User::where('id', $id);
      $data=User::find($id);
      if($data->image==null){

         $image = $request->image;
         $filename = time(). '.' . $image->extension(); 
         $location = public_path('uploads/user/');  
         $image->move($location, $filename); 
         $data->image=$filename;
         $data->save();
         return back()->withSuccess('Profile picture upload Successfully');

      }
      else{
         if($image=$request->image){
            $filename = time(). '.' . $image->extension(); 
            $location = public_path('uploads/user/'); 
            $image->move($location, $filename);
            $data->image = $filename; 
         }
         $data->update();
         return back()->withSuccess('Profile picture updated Successfully');

      }

      
   }
}
