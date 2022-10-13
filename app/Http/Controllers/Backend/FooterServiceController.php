<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\footerservice;
use Illuminate\Http\Request;

class FooterServiceController extends Controller
{
    public function index(){

        return view('backend.footer_service.footer_service');
    }

    public function update(Request $request,$id){
 
        $request->validate([
            'financial'=>'required',
            'sale_service'=>'required',
            'buisness'=>'required',
            'market_research'=>'required',
            'customer_support'=>'required',
        ]);

        footerservice::find($id)->update($request->except('_token'));
        return back()->withSuccess('Footer Service Updated Successfully');

        }
}
