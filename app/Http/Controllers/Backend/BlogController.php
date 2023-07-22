<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Blog::all();

        return view('backend.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
            'description'=>'required',
            'title'=>'required',
            ]);
        $blog=new Blog();

        $image = $request->image;
        $filename = time(). '.' . $image->extension();
        $location = public_path('uploads/blog/');
        $image->move($location, $filename);

        $blog->image  = $filename;
        $blog->title =$request->title;
        $blog->description =$request->description;
        $blog->save();
        return redirect()->route('blog.index')->withSuccess('Blog Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
            'description'=>'required',
            'title'=>'required',
            ]);
        $blog=Blog::find($id);

       if($request->image){
        $image = $request->image;
        $filename = time(). '.' . $image->extension();
        $location = public_path('uploads/blog/');
        $image->move($location, $filename);
        $blog->image  = $filename;
       }
        $blog->title =$request->title;
        $blog->description =$request->description;
        $blog->save();
        return redirect()->route('blog.index')->withSuccess('Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('blog.index')->withSuccess('Blog Deleted Successfully');

    }
}
