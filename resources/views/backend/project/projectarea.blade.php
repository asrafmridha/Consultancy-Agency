@extends('backend.mastaring.master')

@section('projectarea','active')
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
    
<section >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <form action="{{ Route('project.area.update',$data->id) }}"  method="POST" >
     @csrf
 
       
    <label class="mt-1 h5" for="heading">Enter Heading</label>
    <input type="text" name="heading" class="text-dark  form-control name" placeholder="Enter Heading" value="{{ $data->heading }}">

        @error('heading')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror

        <label class="mt-1 h5" for="title">Enter Title</label>
        <input type="text" name="title" class=" text-dark  form-control image"
        placeholder="Enter Title" value="{{ $data->title }}">

        @error('title')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror


        <label class="mt-1 h5" for="button_text">Button Text</label>
        <input type="text" name="button_text" class=" text-dark  form-control image"
        placeholder="Enter Title" value="{{ $data->button_text }}">

        @error('button_text')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        <button class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Update</button>

    </form>
           </div>
        </div>
     </div>
  </div>
</section>






@endsection