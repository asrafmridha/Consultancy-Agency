<?php

namespace App\Http\Controllers;


use GuzzleHttp\Psr7\Header;
use App\Models\HeaderText;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function view(){
        $headertext=HeaderText::first();
        return view('backend.pages.addheadertext',compact('headertext'));
    }

    public function update(Request $request, $id){

        $request->validate([
        'title'=>'required',
        'Short_description'=>'required',
        'button_text'=>'required',

        ]);

        $headertext=HeaderText::find($id);
        $headertext->title=$request->title;
        $headertext->Short_description=$request->Short_description;
        $headertext->button_text=$request->button_text;
        $headertext->update();
        return back()->with('success','Update Data Successfully');

    }
}
