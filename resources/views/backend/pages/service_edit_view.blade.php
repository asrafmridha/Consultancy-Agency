@extends('backend.mastaring.master')

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


@endsection