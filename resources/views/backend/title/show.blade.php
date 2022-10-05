@extends('backend.mastaring.master')
 
@section('title','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Title table</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Title  ({{ $title->count() }})</h4> 
                <form action="{{ route('title.update',$title->id) }}" method="POST">
                    @csrf
                     <div class="form-group">
                         <label for="banner_title">Enter Banner Title</label>
                         <input type="text" name="banner_title" id="banner_title" class="form-control" placeholder="Enter banner title" value="{{ $title->banner_title }}" />
                         @error('banner_title')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
             
                     <div class="form-group">
                         <label for="service_title">Enter Service Title</label>
                         <input type="text" name="service_title" id="name" class="form-control" placeholder="Enter service_title"  value="{{ $title->service_title }}" />
                         @error('service_title')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
             
                     <div class="form-group">
                         <label for="service_heading">Enter Service Heading</label>
                         <input type="text" name="service_heading" id="name" class="form-control" placeholder="Enter Service Heading"  value="{{ $title->service_heading }}" />
                         @error('service_heading')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
             
                     <div class="form-group">
                         <label for="service2_title">Enter service2_title </label>
                         <input type="text" name="service2_title" id="name" class="form-control" placeholder="Enter Service Title" value="{{ $title->service2_title }}"/>
                         @error('service2_title')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>

                    <div class="form-group">
                        <label for="service2_heading">Enter service2 HEADING </label>
                        <input type="text" name="service2_heading" id="name" class="form-control" placeholder="Enter ServicE2 heading" value="{{ $title->service2_heading }}"/>
                        @error('service2_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="case_studies_title">Enter Case Studies Title </label>
                        <input type="text" name="case_studies_title" id="name" class="form-control" placeholder="Enter Case Studies Title" value="{{ $title->case_studies_title }}"/>
                        @error('case_studies_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="case_studies_heading">Enter Case Studies Heading </label>
                        <input type="text" name="case_studies_heading" id="name" class="form-control" placeholder="Enter Case Studies Heading" value="{{ $title->case_studies_heading }}"/>
                        @error('case_studies_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
             
                     <div class="form-group">
                         <label for="testimonials_title">Enter Testimonial Title</label>
                         <input type="text" name="testimonials_title" id="name" class="form-control" placeholder="Enter Testimonial Title" value="{{ $title->testimonials_title }}">
                         @error('testimonials_title')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
             
                     <div class="form-group">
                        <label for="testimonials_heading">Enter Testimonial Heading</label>
                        <input type="text" name="testimonials_heading" id="name" class="form-control" placeholder="Enter Testimonial Heading" value="{{ $title->testimonials_heading }}">
                        @error('testimonials_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="team_title">Enter Team Title</label>
                        <input type="text" name="team_title" id="name" class="form-control" placeholder="Enter Team Title" value="{{ $title->team_title }}">
                        @error('team_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="team_heading">Enter Team Heading</label>
                        <input type="text" name="team_heading" id="name" class="form-control" placeholder="Enter Team Heading" value="{{ $title->team_heading }}">
                        @error('team_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contact_title">Enter Contact Title</label>
                        <input type="text" name="contact_title" id="name" class="form-control" placeholder="Enter Contact Title" value="{{ $title->contact_title }}">
                        @error('contact_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contact_heading">Enter Contact Heading</label>
                        <input type="text" name="contact_heading" id="name" class="form-control" placeholder="Enter Contact Heading" value="{{ $title->contact_heading }}">
                        @error('contact_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="client_title">Enter Client Title</label>
                        <input type="text" name="client_title" id="name" class="form-control" placeholder="Enter Client Title" value="{{ $title->client_title }}">
                        @error('client_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="client_heading">Enter Client Heading</label>
                        <input type="text" name="client_heading" id="name" class="form-control" placeholder="Enter Client Heading" value="{{ $title->client_heading }}">
                        @error('client_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="success_area_title">Enter Success Area Title</label>
                        <input type="text" name="success_area_title" id="name" class="form-control" placeholder="Enter Success Area Title" value="{{ $title->success_area_title }}">
                        @error('success_area_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="success_area_heading">Enter Success Area Heading</label>
                        <input type="text" name="success_area_heading" id="name" class="form-control" placeholder="Enter Success Area Heading" value="{{ $title->success_area_heading }}">
                        @error('success_area_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mail_title">Enter Mail Title</label>
                        <input type="text" name="mail_title" id="name" class="form-control" placeholder="Enter Mail Title" value="{{ $title->mail_title }}">
                        @error('mail_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mail_heading">Enter Mail Heading</label>
                        <input type="text" name="mail_heading" id="name" class="form-control" placeholder="Enter Mail Heading" value="{{ $title->mail_heading }}">
                        @error('mail_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_title">Enter Phone Title</label>
                        <input type="text" name="phone_title" id="name" class="form-control" placeholder="Enter Phone Title" value="{{ $title->phone_title }}">
                        @error('phone_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_heading">Enter Phone Heading</label>
                        <input type="text" name="phone_heading" id="name" class="form-control" placeholder="Enter Phone Heading" value="{{ $title->phone_heading }}">
                        @error('phone_heading')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location_title">Enter Location Title</label>
                        <input type="text" name="location_title" id="name" class="form-control" placeholder="Enter Location Title" value="{{ $title->location_title }}">
                        @error('location_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location_heading">Enter Location Heading</label>
                        <input type="text" name="location_heading" id="name" class="form-control" placeholder="Enter Location Heading" value="{{ $title->location_heading }}">
                        @error('location_heading')
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