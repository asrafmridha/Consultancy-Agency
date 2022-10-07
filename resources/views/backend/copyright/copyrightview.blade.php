@extends('backend.mastaring.master')

@section('copyright','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Copyright</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('copyright.update',copy_right()->id) }} "      method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="copy_right_year">Enter Copyright Year and Text</label>
                    <input type="text" name="copy_right_year" id="copy_right_year" class="form-control" placeholder="Enter Copyright Year and Text" value="{{ copy_right()->copy_right_year }}" />
                    @error('copy_right_year')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="copy_right_text">Enter Company Name</label>
                    <input type="text" name="copy_right_text" id="copy_right_text" class="form-control" placeholder="Enter Company Name" value="{{copy_right()->copy_right_text }}" />
                    @error('copy_right_text')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Update</button>
            </form>
            </div>
        </div>
    </div>
</div>
        
@endsection