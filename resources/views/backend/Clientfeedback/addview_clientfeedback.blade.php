@extends('backend.mastaring.master')

@section('feedback','active')

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
           Client Feedback
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

    <form action="{{ Route('feedback.add') }}"  method="POST" enctype="multipart/form-data" >
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
        <label for="short_description">{{ __("short_description ") }} <span class="text-danger"> *</span></label>
        <input type="hidden" name="short_description" id="short_description" value="" class="form-control">
        <trix-editor input="short_description" style="min-height: 12rem !important"></trix-editor>
        @error('short_description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div> 

    <div class="form-group">
        <label for="client_name">Enter Client Name</label>
        <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter Client Name"  value=""  />
        @error('client_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
     </div>

     <div class="form-group">
        <label for="designation">Enter Client Designation</label>
        <input type="text" name="designation" id="designation" class="form-control" placeholder="Enter Client Designation"  value=""  />
        @error('designation')
            <small class="text-danger">{{ $message }}</small>
        @enderror
     </div>
  
        

        <select class="mt-1 form-control" name="star" value="{{ old('star') }}">
           <option value="">Select star</option>
           <option value="1">1</option>
           <option value="2">2</option> 
           <option value="3">3</option> 
           <option value="4">4</option> 
           <option value="5">5</option>3
        </select>
        
        @error('star')
        <div class="alert alert-danger">
    
            {{$message}}
        </div>  
        @enderror

        <button type="submit" class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Save</button>

    </form>

            </div>
         </div>
      </div>
   </div>
</section>

@endsection




