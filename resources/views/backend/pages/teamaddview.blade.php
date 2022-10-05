@extends('backend.mastaring.master')

@section('team','active')

@section('breadcrumb')
<h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Add Team </a>
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
                    <form action="{{ Route('admin.addteam') }}"  method="POST" enctype="multipart/form-data" >
                       @csrf
                        <div class="form-group">
                            <label for="customFile">Image</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>      
                        <div class="form-group">
                            <label for="button_text">Enter Team Member Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Team Member Name"/>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="designation">Enter Designation</label>
                            <input type="text" name="designation" id="name" class="form-control" placeholder="Enter Designation"/>
                            @error('designation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fb_link">Enter Fb Link</label>
                            <input type="text" name="fb_link" id="name" class="form-control" placeholder="Enter Designation"/>
                            @error('fb_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter_link">Enter Twitter Link</label>
                            <input type="text" name="twitter_link" id="name" class="form-control" placeholder="Enter Designation"/>
                            @error('twitter_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="linkedin_link">Enter Linkedin Link</label>
                            <input type="text" name="linkedin_link" id="name" class="form-control" placeholder="Enter Designation"/>
                            @error('linkedin_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pinterest_link">Enter Pinterest Link</label>
                            <input type="text" name="pinterest_link" id="name" class="form-control" placeholder="Enter Designation"/>
                            @error('pinterest_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                            <button class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Save</button>
                    </form>
                </div>
             </div>
          </div>
    </div>  
</section>
@endsection

