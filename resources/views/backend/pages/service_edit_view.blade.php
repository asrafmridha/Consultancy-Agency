{{-- @extends('backend.mastaring.master')

@section('service','active')

@section('content')

<div class="col-md-6" style="margin-top: 100px; margin-left:400px">

    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Edit Service </a>
        </li>
       
    </ol>
</div>
    

   
    @if(Session::has('success'))
    <p class="alert alert-success >{{ Session::get('success') }}</p>
    @endif

      <form action="{{ route('service.update',$data->id) }}" method="POST">

        @csrf

        <input type="text" name="title" class="mt-1 form-control name" placeholder="Enter Title name" value="{{ $data->title }}">

        @error('title')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror
        <input type="text" name="Short_description" class="mt-1 form-control image"
        placeholder="Enter Your Short description here" value="{{ $data->Short_description }}">

        @error('Short_description')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror

        <input type="text" name="button_text" class="mt-1 form-control" placeholder="Enter  Button Text here" value="{{ $data->button_text }}">

        @error('button_text')
        <div class="alert alert-danger">
            {{$message}}
        </div>  
        @enderror

        <button type="submit" class="form-control mt-1 btn-purchaseAdd btn btn-success"> Update</button>   
    </form>
</div>
@endsection --}}

@extends('backend.mastaring.master')
@section('service','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Service Update </a>
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

                <form action="{{ route('service.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
      
                  <label for="icon">Enter Icon Here</label>
                  <input value="{{ $item->icon }}" name="icon" type="text"  class="icon title form-control name" placeholder="Enter Team Member name">
                  
                  @error('icon')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror  
                  <label for="Short_description">Enter Title Here</label>
                  <input value="{{ $item->title }}" name="title" type="text"  class="Short_description title form-control name" placeholder="Enter Team Member name">
                  @error('title')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror
                  <label for="Short_description">{{ __("Enter Short Description Here") }} <span class="text-danger"> *</span></label>

                  <input id="Short_description" value="{!! $item->Short_description ?? old('Short_description') !!}" type="hidden" name="Short_description">
                  <trix-editor input="Short_description" class="trix-content"></trix-editor> 
                    @error('Short_description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                  <label for="button_text" class="mt-1">Enter Button Text</label>
                  <input value="{{ $item->button_text }}" name="button_text" type="text"  class="button_text form-control name" placeholder="Enter Team Member name">
          
                  @error('button_text')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror
          
                  <label for="icon">Old Image</label>
                  <img height="80px" width="120px" src="{{ asset('uploads/service/'.$item->image) }}" alt=""> <br>
                
          
                  <label for="image">New Image</label> 
                  <input type="file" name="image"> <br> <br>
          
                  @error('image')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror
          
                  <label for="short_description2">{{ __("Enter Short Description2 Here") }} <span class="text-danger"> *</span></label>
                  <input type="hidden" name="short_description2" id="short_description2" value="{!! $item->short_description2 !!}" class="form-control">
                  <trix-editor input="short_description2" style="min-height: 6rem !important">{!! $item->short_description2 !!}</trix-editor>
                  @error('short_description2')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                
                  <label for="advise">Advise</label>
                  <input value="{{ $item->advise }}" name="advise" type="text"  class="advise title form-control name" placeholder="Enter Team Member name">
                  
                  @error('advise')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror
          
                  <label for="advisor_name">Advisor Name</label>
                  <input value="{{ $item->advisor_name }}" name="advisor_name" type="text"  class="advisor_name title form-control name" placeholder="Enter Team Member name">
                  
                  @error('advisor_name')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror
          
                  <label for="heading">Heading</label>
                  <input value="{{ $item->heading }}" name="heading" type="text"  class="heading title form-control name" placeholder="Enter Team Member name">
                  
                  @error('heading')
                  <div class="alert alert-danger">
          
                      {{$message}}
                  </div>  
                  @enderror
          
                  <label for="point">{{ __("point") }} <span class="text-danger"> *</span></label>
                  <input type="hidden" name="point" id="point"  class="form-control" value="{!! $item->point !!}">
                  <trix-editor  input="point" style="min-height: 6rem !important">{!! $item->point !!}</trix-editor>
                  @error('point')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror    
                  <button type="submit" class="form-control btn btn-primary "> Update</button>
              </form>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection