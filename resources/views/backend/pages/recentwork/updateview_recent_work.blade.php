@extends('backend.mastaring.master')

@section('header','active')


@section('content')

<div class="col-md-6" style="margin-top: 100px; margin-left:400px">


    <form action="{{ route('admin.updaterecentwork',$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
      
        
         <img height="100px" width="100px" src="{{ asset('uploads/recentwork/'.$item->image) }}" alt="">
        <input type="file" name="image" class="form-control mt-1">
        <label for="title">Enter Title Here</label>
         <input value="{{ $item->title }}" name="title" type="text"  class=" title form-control name" placeholder="Enter title name">
         
         @error('title')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

        
         <label for="title" class="mt-1">Enter Short Description Here</label>
         <input value="{{ $item->short_description }}" name="short_description" type="text"  class=" title form-control name" placeholder="Enter Team Member name">

         @error('short_description')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

                  
            <div class="modal-footer">
                  <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                  <button type="submit" class="serviceupdatebutton btn btn-primary deletemodalservicebutton">Confirm</button>
              </div>
        </form>





</div>



@endsection    