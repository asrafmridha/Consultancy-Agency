@extends('backend.mastaring.master')

@section('service','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Add Service </a>
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
    <form action="{{ route('admin.addservice') }}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="form-group">
            <label for="icon">For Select Your Icon <a class="btn  btn-sm btn-primary" href="https://www.flaticon.com/">Click Here</a></label>
            <i class="fa fa-user icon"></i>
            {{-- <input class="input-field" type="text"> --}}
            <input type="text" name="icon" id="about_page_button" class="form-control" placeholder="Enter Icon Tag Here"   />
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Enter  Title</label>
            <input type="text" name="title" id="about_page_button" class="form-control" placeholder="Enter Title Here"  value=""  />
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="Short_description">{{ __("Short_description ") }} <span class="text-danger"> *</span></label>
            <input type="hidden" name="Short_description" id="Short_description" value="" class="form-control">
            <trix-editor input="Short_description" style="min-height: 12rem !important"></trix-editor>
            @error('Short_description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="button_text">Enter  Button Text here</label>
            <input type="text" name="button_text" id="about_page_button" class="form-control" placeholder="Enter  Button Text here"  value=""  />
            @error('button_text')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="customFile">Service Image</label>
              <div class="custom-file">
             <input type="file" class="custom-file-input" id="customFile" name="image" />
             <label class="custom-file-label" for="customFile">Choose file</label>
             </div>

             @error('image')
             <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>
        <div class="form-group">
            <label for="short_description2">{{ __("short_description2 ") }} <span class="text-danger"> *</span></label>
            <input type="hidden" name="short_description2" id="short_description2" value="" class="form-control">
            <trix-editor input="short_description2" style="min-height: 12rem !important"></trix-editor>
            @error('short_description2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        
        <div class="form-group">
            <label for="advise">Enter Advise Here</label>
            <input type="text" name="advise" id="about_page_button" class="form-control" placeholder="Enter  advise here"  value=""  />
            @error('advise')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="advisor_name">Enter Advisor Name Here</label>
            <input type="text" name="advisor_name" id="about_page_button" class="form-control" placeholder="Enter  advisor_name here"  value=""  />
            @error('advisor_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="heading">Enter Heading Here</label>
            <input type="text" name="heading" id="about_page_button" class="form-control" placeholder="Enter  heading here"  value=""  />
            @error('heading')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="point">{{ __("point ") }} <span class="text-danger"> *</span></label>
            <input type="hidden" name="point" id="point" value="" class="form-control">
            <trix-editor input="point" style="min-height: 12rem !important"></trix-editor>
            @error('point')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="form-control btn btn-primary "> Add</button>
       </form>
                    </div>
                 </div>
             </div>
         </div>
</section>




@endsection




