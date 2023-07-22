@extends('frontend.mastaring.master')
@section('content')

<section class="sub-banner section-gap" style="background-color: #b5eadf !important">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase font-weight-bold">Our Blog</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb bg-transparent justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>



<div class="container mx-auto">
    @foreach ($blogs as $row)
        <div class=" mb-5 text-primary">
            <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ asset('uploads/blog/'.$row->image)}}" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6">
                <div class="">
                <div class="lg:d-flex items-center justify-content-between ">
                    <div class="d-flex align-items-center">
                    <h5 class="font-weight-bold mr-3 mt-2" style="color:#79BF24">{{$row->title}}</h6>

                    </div>
                    <div>
                    <i class="fa-solid fa-star star-icon"></i>
                    <i class="fa-solid fa-star star-icon"></i>
                    <i class="fa-solid fa-star star-icon"></i>
                    <i class="fa-solid fa-star star-icon"></i>
                    <i class="fa-regular fa-star star-icon"></i>
                    </div>
                </div>
                <p>{{Str::limit($row->description, 300)}}.</p>

                <h6>{{$row->created_at->diffForHumans()}}</h6>
                <div class="apply-button">

                    {{-- <button class="border-0 text-light rounded mt-3 px-5 p-2 apply-button"
                    style="background-color: #1697DA; "><a class="text-light" href="./payment.html">Book Now</a></button> --}}
                    <button class="border-0 text-light rounded mt-3 px-5 p-2 apply-button"
                    style="background-color: #1697DA; "><a class="text-light" href="{{route('blog.details',$row->id)}}">Details</a></button>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endforeach
     {!! $blogs->links() !!}
</div>
@endsection


