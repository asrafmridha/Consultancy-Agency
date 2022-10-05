<?php

namespace App\Http\Controllers\Backend;

use App\Exports\ServiceExport;
use App\Exports\TeamExport;
use App\Http\Controllers\Controller;
use App\Imports\ServiceImport;
use App\Imports\TeamImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportImportController extends Controller
{
    
    public function export(Request $request){
        
        return Excel::download(new ServiceExport, 'service.xlsx');
    }

    public function import(Request $request){

        Excel::import(new ServiceImport, $request->file('file'));

        return redirect()->back()->with('success', 'User Imported Successfully');
    }

    public function teamexport(){

        return Excel::download(new TeamExport, 'team.xlsx');
    }
    public function teamimport(Request $request){

        Excel::import(new TeamImport, $request->file('file'));
        return redirect()->back()->with('success', 'Team Imported Successfully');



    }
}
