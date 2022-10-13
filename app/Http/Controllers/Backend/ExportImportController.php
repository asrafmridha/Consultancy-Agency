<?php

namespace App\Http\Controllers\Backend;

use App\Exports\FeedbackExport;
use App\Exports\ServiceExport;
use App\Exports\TeamExport;
use App\Http\Controllers\Controller;
use App\Imports\FeedbackImport;
use App\Imports\ServiceImport;
use App\Imports\TeamImport;
use App\Models\ClientFeedback;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportImportController extends Controller
{
    
     public function service_mass_export(Request $request){
        
        $explode = explode(',', $request->id);
        $ids = [];
        foreach($explode as $id){
            array_push($ids, $id);
        }
        // return $request;
        return Excel::download(new ServiceExport($ids), 'service.xlsx');
     }

    public function import(Request $request){

        if($request->hasFile('exported_file')){
            $file = $request->file('exported_file');
            if($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx'){
                Excel::import(new ServiceImport, $file);
            }
        }

        // Excel::import(new ServiceImport, $request->file('exported_file'));

        return redirect()->back()->with('success', 'User Imported Successfully');
    }

    public function teamexport(){

        return Excel::download(new TeamExport, 'team.xlsx');
    }
    public function teamimport(Request $request){

        Excel::import(new TeamImport, $request->file('file'));
        return redirect()->back()->with('success', 'Team Imported Successfully');
    }

    public function exportFeedback(){

        return Excel::download(new FeedbackExport, 'feedback.xlsx');
    }
    public function importFeedback(Request $request){
        Excel::import(new FeedbackImport(), $request->file('file'));
        return redirect()->back()->with('success', 'feedback Imported Successfully');
        
    }
}
