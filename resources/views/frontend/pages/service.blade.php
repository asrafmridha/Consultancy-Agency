@extends('frontend.mastaring.master')
@section('content')

<section class="sub-banner section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase font-weight-bold">SERVICE DETAILS</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb bg-transparent justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="service-details section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center" data-aos="fade-up">
                <img src="{{ asset('uploads/service/'.$item->image) }}" alt="Services Support Image" class="service-details__image img-fluid">
            </div>
            <div class="col-lg-7">
                <div class="section-header text-center text-lg-left">
                    <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{  $title->service2_title }}</h3>
                    <h1 class="section-header__title text-uppercase font-weight-bold">{{  $title->service2_heading }}</h1>
                </div>
                <div class="row">
                    <div class="col-xl-10 text-center text-lg-left">
                        <p class="service-details__text">{!! $item->short_description2  !!}</p>
                    </div>
                    <div class="col-xl-11">
                        <blockquote class="service-details__blockquote bg-white" data-aos="fade-up">
                            <p class="blockquote-text">{{ $item->advise }}</p>
                            <footer class="blockquote-footer text-right"><span class="blockquote-writer position-relative">{{ $item->advisor_name }}</span></footer>
                        </blockquote>
                    </div>
                    <div class="col-12">
                        <h2 class="service-details__list-title text-uppercase">{{  $item->heading   }}</h2>
                        <ul class="service-details__list mb-0">

                            {!! $item->point !!}
                            {{-- <li class="service-details__list__item position-relative" data-aos="fade-up">{!! $item->point !!}</li> --}}
                            {{-- <li class="service-details__list__item position-relative" data-aos="fade-up" data-aos-delay="100">It generates not just repeat business but also referral business.</li>
                            <li class="service-details__list__item position-relative" data-aos="fade-up" data-aos-delay="200">Once you have a lots of positive customer reviews, you can start reputation marketing.</li>
                            <li class="service-details__list__item position-relative" data-aos="fade-up" data-aos-delay="200">using your reviews to promote your reputation and scale your company!</li>
                            <li class="service-details__list__item position-relative" data-aos="fade-up" data-aos-delay="300">If customers feel valued, they'll provide your business with a positive online review.</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

  


</section>

@endsection