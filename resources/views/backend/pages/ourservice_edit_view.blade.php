@extends('backend.mastaring.master')

@section('recentwork','active')

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
           Our Service
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
                   <form action="{{ route('ourservice.update',$data->id) }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                       @csrf

                       <div class="row">
                           <div class="col-12">

                            <div class="form-group">
                                <label for="customFile">Old Image</label>
                                <img height="150px" width="180px" src="{{ asset('uploads/ourservice/'.$data->image) }}" alt="">
                            </div> 
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="image" />
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>          
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror


                               <div class="form-group">
                                   <label for="short_description">{{ __("short_description ") }} <span class="text-danger"> *</span></label>
                                   <input type="hidden" name="short_description" id="short_description" value="{{ $data->short_description }}" class="form-control">
                                   <trix-editor input="short_description" style="min-height: 12rem !important"></trix-editor>
                                   @error('short_description')
                                       <div class="text-danger">{{ $message }}</div>
                                   @enderror
                               </div>                      
                           

                               <div class="form-group">
                                <label for="advise">Advise</label>
                                <input type="text" name="advise" id="advise" class="form-control" placeholder="Enter Advise " value="{{ $data->advise }}" />
                                @error('advise')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        <div class="form-group">
                            <label for="advisor_name">Advisor Name</label>
                            <input type="text" name="advisor_name" id="advisor_name" class="form-control" placeholder="Enter ADvisor Name" value="{{ $data->advisor_name }}" />
                            @error('advisor_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control" placeholder="Enter Heading" value="{{ $data->heading }}"/>
                            @error('heading')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Point">{{ __("point ") }} <span class="text-danger"> *</span></label>
                            <input type="hidden" name="point" id="point" value="{{ $data->point }}" class="form-control">
                            <trix-editor input="point" style="min-height: 12rem !important"></trix-editor>
                            @error('point')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="col-12">
                               <button type="submit" class="btn btn-primary waves-effect waves-float waves-light w-100 w-sm-auto">Update</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section>

@endsection