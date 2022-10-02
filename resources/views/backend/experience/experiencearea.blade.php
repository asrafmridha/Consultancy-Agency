@extends('backend.mastaring.master')

@section('experiencearea','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Update Experience </a>
            </li>
        </ol>
    </div>
@endsection


@section('content')
<section >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
        <form action="{{ route('experience.area.update',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf


        
        <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->first_image) }}" alt="something went wrong">
            
        <div class="form-group">
            <label for="first_image">First Image</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="first_image" name="first_image" />
             <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
 
             @error('first_image')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>

        <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->second_image) }}" alt="">
        <div class="form-group">
            <label for="second_image">Second Image</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="second_image" name="second_image" />
             <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
 
             @error('second_image')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>

        <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->side_image1) }}" alt="">
        <div class="form-group">
            <label for="side_image1">Side Image_1</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="side_image1" name="side_image1" />
             <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
 
             @error('side_image1')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>

        <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->side_image2) }}" alt="">
        <div class="form-group">
            <label for="side_image2">Side Image_2</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="side_image2" name="side_image2" />
             <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
 
             @error('side_image2')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>

        <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->side_image3) }}" alt="">
        <div class="form-group">
            <label for="side_image3">Side Image_3</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="side_image3" name="side_image3" />
             <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
 
             @error('side_image3')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>

        <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->side_image4) }}" alt="">
        <div class="form-group">
            <label for="side_image4">Side Image_4</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="side_image4" name="side_image4" />
             <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
 
             @error('side_image4')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>



            
    <label class="mt-1 h5" for="years">Enter Years</label>
    <input type="number" name="years" class="text-dark  form-control name" placeholder="Enter Heading" value="{{ $data->years }}">
        
    @error('years')
        <div class="alert alert-danger">
            {{$message}}
        </div>  
    @enderror
        <label class="mt-1 h5" for="heading">Enter First Page heading</label>
        <input type="text" name="heading" class=" text-dark  form-control image"
        placeholder="Enter Title" value="{{ $data->heading }}">
        
    @error('heading')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
    @enderror

    <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->about_first_image) }}" alt="something went wrong">
            
    <div class="form-group">
        <label for="about_first_image">About Page First Image</label>
          <div class="custom-file">
         <input type="file" class="custom-file-input" id="about_first_image" name="about_first_image" />
         <label class="custom-file-label" for="customFile">Choose file</label>
          </div>

         @error('about_first_image')
         <small class="text-danger">{{ $message }}</small>
         @enderror
    </div>

    <img height="120px" width="180px" src="{{ asset('uploads/experience/'.$data->about_second_image) }}" alt="something went wrong">
            
    <div class="form-group">
        <label for="about_second_image">About Page Second Image</label>
          <div class="custom-file">
         <input type="file" class="custom-file-input" id="about_second_image" name="about_second_image" />
         <label class="custom-file-label" for="customFile">Choose file</label>
          </div>

         @error('about_second_image')
         <small class="text-danger">{{ $message }}</small>
         @enderror
    </div>

    <label class="mt-1 h5" for="heading2">Enter Second Page heading</label>
    <input type="text" name="heading2" class=" text-dark  form-control image"
    placeholder="Enter Title" value="{{ $data->heading2 }}">
    
        @error('heading2')
            <div class="alert alert-danger">

                {{$message}}
            </div>  
        @enderror

    <label class="mt-1 h5" for="heading">Enter compelte project</label>
    <input type="text" name="compelte_project" class=" text-dark  form-control image"
    placeholder="Enter Title" value="{{ $data->compelte_project }}">
    
        @error('compelte_project')
            <div class="alert alert-danger">

                {{$message}}
            </div>  
        @enderror


        <label class="mt-1 h5" for="heading">Enter Satisfied project</label>
        <input type="text" name="satisfied_project" class=" text-dark  form-control image"
        placeholder="Enter Title" value="{{ $data->satisfied_project }}">
        
            @error('satisfied_project')
                <div class="alert alert-danger">
    
                    {{$message}}
                </div>  
            @enderror

        <label class="mt-1 h5" for="heading">Enter Ongoing Project</label>
        <input type="text" name="ongoing_project" class=" text-dark  form-control image"
        placeholder="Enter Title" value="{{ $data->ongoing_project }}">
        
            @error('ongoing_project')
                <div class="alert alert-danger">
    
                    {{$message}}
                </div>  
            @enderror

        <label class="m2 h5" for="title">Enter Title</label>
        <input type="text" name="title" class=" text-dark  form-control image"
        placeholder="Enter Title" value="{{ $data->title }}">

    @error('title')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
    @enderror
        <input class="mt-2" type="hidden" name="short_description" id="short_description" value="{!! $data->short_description!!}" class="form-control">

        <trix-editor  input="short_description" style="min-height: 12rem !important">{!! $data->short_description !!}</trix-editor>

    @error('short_description')
        <div class="alert alert-danger">
            {{$message}}
        </div>  
    @enderror
        <button type="submit" class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Update</button>
    </form>
           </div>
        </div>
     </div>
 </div>
</section>


@endsection