<?php

namespace App\Http\Controllers\Backend;

use App\Exports\RecentWorkExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecentworkRequest;
use App\Imports\RecentWorkImport;
use App\Models\RecentWork;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RecentWorkController extends Controller
{
    public function index(){
        return view('backend.pages.recentwork.add_recent_work');
    }

    public function store(RecentworkRequest $request ){

        $recentwork= new RecentWork;
        $image = $request->image; 
        $filename = time(). '.' . $image->extension(); 
        $location = public_path('uploads/recentwork/'); 
        $image->move($location, $filename); 

        $recentwork->image=$filename;
        $recentwork->title=$request->title;
        $recentwork->short_description=$request->short_description;
        $recentwork->save();
        return back()->with('success','Save Data Successfully');
    }

    public function show(){
         $data=RecentWork::all();
         return view('backend.pages.recentwork.recent_work_table',compact('data'));
    }

    public function destroy($id){
        $data=RecentWork::find($id);
        $data->delete();
        return back()->with('success', 'Recent Work Delete Successfully');
    }

    // public function updateview($id){

    //     $item=RecentWork::first($id);
    //     return view('backend.pages.recentwork.updateview_recent_work',compact('item'));
    // }

    public function update(Request $request,$id){
       $request->validate([

        'image' => 'image',
        'title' => 'required|string|max:50',
        'short_description' => 'required'
       ]);

       $recentwork=RecentWork::find($id);
       if($image = $request->image){
       $filename = time(). '.' . $image->extension(); 
       $location = public_path('uploads/recentwork/'); 
       $image->move($location, $filename); 
       $recentwork->image=$filename;
       }

      
       $recentwork->title=$request->title;
       $recentwork->short_description=$request->short_description;
       $recentwork->update();
       return back()->with('success','Data Updated Successfully');
    }

    public function import(Request $request){

        Excel::import(new RecentWorkImport, $request->file('file'));
        return back()->with('success','Excel Imported Successfully');
      
    }
    public function export(){
        return Excel::download(new RecentWorkExport, 'recentwork.xlsx');
    }
    
    public function recentworkDateFilter(){

        $data = RecentWork::whereBetween('created_at', [request()->start_date, request()->end_date])->paginate(10);
        return view('backend.pages.recentwork.recent_work_table',compact('data'));
       }

    public function recentworkDataSearch(Request $request){
        $search=$request->search;
        $data = RecentWork::where('title','Like','%'.$search.'%')->get();
        return view('backend.pages.recentwork.recent_work_table',compact('data'));
    }
    
}
