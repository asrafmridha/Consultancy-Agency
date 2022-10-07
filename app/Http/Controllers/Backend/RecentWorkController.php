<?php

namespace App\Http\Controllers\Backend;

use App\Exports\RecentWorkExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecentworkRequest;
use App\Imports\RecentWorkImport;
use App\Models\RecentWork;
use App\Models\RecentWorkButton;
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
        return redirect()->route('admin.managerecentwork')->with('success','Save Data Successfully');
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
    public function recent_work_button(){
        $recentworkbutton=RecentWorkButton::first();
        return view('backend.pages.recentwork.recent_work_button',compact('recentworkbutton'));
    }

    public function recent_work_button_update(Request $request, $id){

        $request->validate([
            'buisness_finance'=>'required',
            'customer_support'=>'required',
            'financial_service'=>'required',
            'buisness_stargey'=>'required',
            'sale_service'   =>'required',      
        ]);

        RecentWorkButton::find($id)->update($request->except('_token'));
        return back()->withSuccess('Data Updated Successfully');
    }
    
}
