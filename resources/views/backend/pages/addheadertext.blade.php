@extends('backend.mastaring.master')

@section('header','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Banner </a>
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
                    <form action="{{ route('updateheadertext',$headertext->id) }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="title">Enter Title</label>
                                <input type="text" name="title" id="about_page_button" class="form-control" placeholder="Enter Title Here"  value="{{ $headertext->title }}"  />
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Short_description"> Short Description <small class="text-danger">*</small></label>
                                <div>
                                    <input id="Short_description" value="{!!$headertext->Short_description !!}" type="hidden" name="Short_description">
                                    <trix-editor  input="Short_description" class="trix-content" ></trix-editor>
                                </div>
                            </div>
                                @error('Short_description')
                                    <div class="alert alert-danger">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            <div class="form-group">
                                <label for="button_text">Enter Button Text</label>
                                <input type="text" name="button_text" id="about_page_button" class="form-control" placeholder="Enter Title Here"  value="{{ $headertext->button_text }}"  />
                                @error('button_text')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                                    <button type="submit" class="form-control btn btn-primary mt-1"> Update</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
  

 
