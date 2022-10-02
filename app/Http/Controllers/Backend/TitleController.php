<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function show()
   {
    $title=Title::first();
    return view('backend.title.show',compact('title'));
   }
}
