@extends('frontend.mastaring.master')
@section('content')

<section class="sub-banner section-gap" style="background-color: #b5eadf !important">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase font-weight-bold">Blog Details</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb bg-transparent justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="lg:padding md:p-5 p-4  py-5 mt-lg-4 container">
    <div class=" mb-5">
      <div class="row g-0">
        <div class="  ">
          <img src="{{asset('uploads/blog/'.$blog->image)}}" class="img-fluid rounded " alt="..." style="width: 100vw">
        </div>
        <div class="">
          <div class="">
            <div class="lg:d-flex items-center justify-content-between ">
              <div class="d-flex align-items-center">
                <h5 class="font-weight-bold mr-3 mt-4" style="color:#79BF24">{{$blog->title}}</h6>

              </div>
              <div>
                <i class="fa-solid fa-star star-icon"></i>
                <i class="fa-solid fa-star star-icon"></i>
                <i class="fa-solid fa-star star-icon"></i>
                <i class="fa-solid fa-star star-icon"></i>
                <i class="fa-regular fa-star star-icon"></i>
              </div>
            </div>
            <p class="text-dark mt-2 ">
                {{$blog->description}}
            </p>

            <h5 class="text-dark">{{$blog->created_at->diffForHumans()}}</h5>
            {{-- <div class="apply-button">

              <button class="border-0 text-light rounded mt-3 px-5 p-2 apply-button"
                style="background-color: #1697DA; "><a class="text-light" href="./payment.html">Book Now</a></button>
              <button class="border-0 text-light rounded mt-3 px-5 p-2 apply-button"
                style="background-color: #1697DA; "><a class="text-light" href="./details.html">Details</a></button>
            </div> --}}
          </div>
        </div>
      </div>
    </div>


    <!-- Details Start -->
    {{-- <div class="mt-5">
      <div class=" border-primary border-size">

        <button class="border-0 bg-primary p-2 text-light ">Description</button>
        <button class="border-0 bg-white ">Additional information</button>
      </div>





      <div class="card-body">

        <p class="card-text">
          Waiting for winning a ready Duplex in Lalmatia? You just chose the right link to get through it.
          Lalmatia is offering you one of the finest looking flats positioning. The prominent Elevator takes
          you to this respective flat having a very welcoming door just right after you get there. Utilities
          are available in this ready Duplex. The Duplex has got balconies that would give the opportunity to
          spend some good family times with your family. Additionally a good amount of school, college and
          groceries are available in the nearby area. The Duplex has got amazing rooms which are enough to get
          you influenced to seize the Duplex right away.
          <br> <br>
          Service charge 15000 bdt

          <br> <br>

          We are here waiting to acknowledge your need and aid you with the best property at this instant.
        </p>

      </div>
    </div> --}}
    <!-- Details End -->


  </section>




@endsection


