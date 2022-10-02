 @extends('backend.mastaring.master')

@section('teamview','active')
 @section('content')

 <div class="col-md-6" style="margin-top: 100px; margin-left:400px">
    <h1> Our Team</h1> 

    @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif

    <form action="{{ Route('admin.team.update',$data->id) }}"  method="POST" enctype="multipart/form-data" >
     @csrf
 
     <label for="">Old Image</label>
     <img height="100px" width="100px" src="{{ asset('uploads/team/'.$data->image) }}" alt="img nai">
     <input type="file" name="image" class="mt-3 form-control name">
     @error('image')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror
      

    <input type="text" name="name" value="{{ $data->name }}" class="mt-3 form-control name" placeholder="Enter Team Member name">

        @error('name')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror
    
        <input type="text" name="designation" class="mt-3 form-control image"
        placeholder="Enter Designation" value="{{ $data->designation }}">

        @error('designation')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror



        <input type="text" name="fb_link" class="mt-3 form-control" placeholder="Enter  Fb link here" value="{{ $data->fb_link }}">

        @error('fb_link')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        <input type="text" name="twitter_link" class="mt-3 form-control" placeholder="Enter  Twitter link here" value="{{ $data->twitter_link }}">

        @error('twitter_link')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        <input type="text" name="linkedin_link" class="mt-3 form-control" placeholder="Enter  Linkedin link here" value="{{ $data->linkedin_link }}">

        @error('linkedin_link')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        <input type="text" name="pinterest_link" class="mt-3 form-control" placeholder="Enter  Pinterest link here" value="{{ $data->pinterest_link }}">

        @error('pinterest_link')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        <button type="submit" class="form-control mt-3 btn-purchaseAdd btn btn-success"> Update</button>

    </form>
  </div>


    @endsection 