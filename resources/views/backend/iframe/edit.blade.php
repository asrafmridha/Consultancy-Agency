@extends('backend.mastaring.master')

@section('ifrmae','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Iframe Url</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('ifrmae.url.update',$embed->id) }} " method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="embed_link">Only Embed Link Give Here</label>
                    <textarea name="embed_link" id="" cols="30" rows="10" class="form-control" placeholder="Enter Embed Url" >{{ $embed->embed_link }}</textarea>
                    @error('embed_link')
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