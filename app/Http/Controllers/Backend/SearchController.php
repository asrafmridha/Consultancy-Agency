<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AllTableName;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function allsearch($search){

        // $data=::where('banner',$search)->first();
        $data = AllTableName::where('name','Like','%'.$search.'%')->get();

        $view = view('backend.includes.all_search',compact('data'))->render();

        return response()->json([
            'view'=>$view
        ]);
        

    }
}
