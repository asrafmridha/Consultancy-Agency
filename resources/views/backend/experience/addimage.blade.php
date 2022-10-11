@extends('backend.mastaring.master')

@section('experiencearea','active')


@section('content')

<div class="col-md-6" style="margin-top: 100px; margin-left:400px">
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
            <a href="#">Experience Area </a>
            </li>
        </ol>
    </div>
            <input type="file" name="image" class="mt-1 form-control name" >
                @error('image')
                <div class="alert alert-danger">
                    {{$message}}
                </div>  
                @enderror

</div>

@endsection