@extends('backend.mastaring.master')

@section('social_url','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Social Url</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('social.url.update',social_url()->id) }} " method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="fb_url">Enter Facebook Url</label>
                    <input type="text" name="fb_url" id="fb_url" class="form-control" placeholder="Enter Facebook Url" value="{{ social_url()->fb_url }}" />
                    @error('fb_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="twitter_url">Enter Twitter Url</label>
                    <input type="text" name="twitter_url" id="twitter_url" class="form-control" placeholder="Enter Twitter Url" value="{{ social_url()->twitter_url }}" />
                    @error('twitter_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pinterest_url">Enter Pinterest Url</label>
                    <input type="text" name="pinterest_url" id="pinterest_url" class="form-control" placeholder="Enter Pinterest Url" value="{{ social_url()->pinterest_url }}" />
                    @error('pinterest_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="linkedin_url">Enter Linkedin Url</label>
                    <input type="text" name="linkedin_url" id="linkedin_url" class="form-control" placeholder="Enter Linkedin Url" value="{{ social_url()->linkedin_url }}" />
                    @error('linkedin_url')
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