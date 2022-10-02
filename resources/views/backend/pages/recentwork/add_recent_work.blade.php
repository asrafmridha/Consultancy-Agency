@extends('backend.mastaring.master')

@section('header','active')

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
           Recent Work
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
                   <form action="{{ route('admin.recentwork.store') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                       @csrf

                       <div class="row">
                           <div class="col-12">
                            {{-- <div class="col-lg-6 col-md-12"> --}}
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="image" />
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            {{-- </div> --}}
                            
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                               <div class="form-group">
                                   <label for="title">Title</label>
                                   <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" value=""/>
                                   @error('title')
                                       <small class="text-danger">{{ $message }}</small>
                                   @enderror
                               </div>

                               <div class="form-group">
                                   <label for="short_description">{{ __("short_description ") }} <span class="text-danger"> *</span></label>
                                   <input type="hidden" name="short_description" id="short_description" value="" class="form-control">
                                   <trix-editor input="short_description" style="min-height: 12rem !important"></trix-editor>
                                   @error('short_description')
                                       <div class="text-danger">{{ $message }}</div>
                                   @enderror
                               </div>                      
                           </div>


                           <div class="col-12">
                               <button type="submit" class="btn btn-primary waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section>

@endsection