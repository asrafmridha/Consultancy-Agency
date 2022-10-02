@extends('backend.mastaring.master')

@section('feedback','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Update Feedback</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
    <form action="{{ Route('feedback.update',$data->id) }}"  method="POST" enctype="multipart/form-data" >
     @csrf

      <label  class="mt-1 mr-5 h5 " for="old_image"> oldImage</label><br>

      <img class="mr-5" height="150px" width="150px" src="{{ asset('uploads/client/'.$data->image) }}" alt="Something Went Wrong"><br>
 
      <label class="mt-1 h5" for="old_image"> New Image</label>
     <input type="file" name="image" class="mt-1 form-control name" >
     @error('image')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror
      
        <label class="mt-1 h5" for="short_description">Enter Short Description</label>
        <input type="text" name="short_description" class="text-dark  form-control name" placeholder="Enter Short Description" value="{{ $data->short_description }}">

        @error('short_description')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror

        <label class="mt-1 h5" for="client_name">Enter Client Name</label>
        <input type="text" name="client_name" class=" text-dark  form-control image"
        placeholder="Enter Client Name" value="{{ $data->client_name }}">

        @error('client_name')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        
        <label class="mt-1 h5" for="designation">Enter Client Designation</label>
        <input type="text" name="designation" class=" text-dark  form-control image"
        placeholder="Enter Client Name" value="{{ $data->designation }}">

        @error('designation')
        <div class="alert alert-danger">
            {{$message}}
        </div>  
        @enderror

        <select class="mt-2 form-control" name="star">
           <option value="">-----Select Star-----</option>
           <option value="1" @if($data->star==1)selected @endif>1</option> 
           <option value="2" @if($data->star==2)selected @endif>2</option> 
           <option value="3" @if($data->star==3)selected @endif>3</option> 
           <option value="4" @if($data->star==4)selected @endif>4</option> 
           <option value="5" @if($data->star==5)selected @endif>5</option>
        </select>
        
        @error('star')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror
        <button type="submit" class="form-control mb-3 btn-purchaseAdd btn btn-success"> Update</button>
    </form>
@endsection


