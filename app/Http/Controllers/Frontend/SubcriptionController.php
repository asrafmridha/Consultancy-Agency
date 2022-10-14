<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubcriptionController extends Controller
{
    // public function store (Request $request, Subscription $user){
    //     $valid = Validator::make($request->all(),[
    //         'email'=>'required|email|unique:subscriptions,email,'.$user->id,
    //     ]);
    //     if($valid->fails()){
    //         return response()->json([
    //             'status'=>'failed',
    //             'errors'=>$valid->getMessageBag()
    //         ]);
    //     }
    //     else{

    //     Subscription::create($request->except('_token'));
    //     // return back()->with('message','Thank You for Your Subcription');
    //     return response()->json([
    //         'sucess'=>'Data added Successfully'
    //     ]);

    //     }
   
        


    // }

    public function store (Request $request, Subscription $user){

        $request->validate([
            'email'=>'required|email|unique:subscriptions,email,'.$user->id,
        ]);
         
        Subscription::create($request->except('_token'));
        return back()->with('message','Thank You for Your Subcription');


    }

    public function index(){
        $subscription=Subscription::all();
        return view('backend.subcription.subcription_list',compact('subscription'));

    }

    public function destroy($id){
        $data=Subscription::find($id);
        $data->delete();
        return back()->withSuccess('Data Delete Successfully');
    
    }

}
