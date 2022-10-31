<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubcriptionController extends Controller
{
    public function store (Request $request, Subscription $user){

        $request->validate([
            'email'=>'required|email|unique:subscriptions,email,'.$user->id,
        ]);
         
        Subscription::create($request->except('_token'));
        return back()->with('message','Thank You for Your Subcription');


    }
}
