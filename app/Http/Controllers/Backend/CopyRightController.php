<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CopyRight;
use Illuminate\Http\Request;

class CopyRightController extends Controller
{
    public function index(){
        return view('backend.copyright.copyrightview');
    }
    public function update(Request $request,$id){

        CopyRight::find($id)->update($request->except('_token'));
        return back()->withSuccess('Data Updated Successfully');
    }
}
