@extends('frontend.mastaring.master')
@section('content')

<section class="sub-banner section-gap" style="background-color: #b5eadf !important">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase font-weight-bold">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb bg-transparent justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="about about--secondary section-space section-gap mb-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-3 mb-4 mb-lg-0">
                <div class="about__image-wrapper">
                    <img src="{{asset('uploads/experience/'.$experience->about_first_image)  }}" class="about__image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-9">
                <div class="about__conten text-center text-md-left">
                    <h1 class="about__conten__number text-center font-weight-bold mb-0">{{ $experience->years }}</h1>
                    <div class="about__conten__header mt-3 mt-md-0">
                        <h3 class="about__conten__sub-title text-uppercase"></h3>
                        <h2 class="about__conten__title text-uppercase my-3 my-md-0"><span class="d-md-block">{{ $experience->heading }}</h2>
                    </div>
                    <div class="about__conten__bar text-center d-none d-md-block">
                        <img src=" {{asset('uploads/experience/'.$experience->about_second_image)  }} " alt="Transparent Bar" class="about__conten__bar__image img-fluid user-select-none">
                    </div>
                    <div class="about__conten__details">
                        <p class="about__conten__text">{!! $experience->short_description !!}</p>
                        <div class="counter">
                            <div class="section-header text-center text-lg-left">
                                <h3 class="section-header__sub-title mb-1">Statistics</h3>
                                <h1 class="section-header__title text-uppercase font-weight-bold">Our Successes are Counting</h1>
                            </div>
                            <div class="counter__block-wrapper">
                                <div class="counter__block d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-sm-end" data-aos="fade-up">
                                    <h1 class="counter__block__number font-weight-bold mb-0">{{ $experience->compelte_project }}</h1>
                                    <h3 class="counter__block__text text-uppercase font-weight-normal mb-0 text-center text-md-left">Completed Projects</h3>
                                </div>
                                <div class="counter__block counter__block--shape d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-sm-end position-relative" data-aos="fade-up" data-aos-delay="100">
                                    <h1 class="counter__block__number font-weight-bold mb-0">{{ $experience->satisfied_project }}</h1>
                                    <h3 class="counter__block__text text-uppercase font-weight-normal mb-0 text-center text-md-left">Satisfied Clients</h3>
                                </div>
                                <div class="counter__block d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-sm-end" data-aos="fade-up" data-aos-delay="200">
                                    <h1 class="counter__block__number font-weight-bold mb-0">{{ $experience->ongoing_project }}</h1>
                                    <h3 class="counter__block__text text-uppercase font-weight-normal mb-0 text-center text-md-left">Ongoing Projects</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

@endsection
