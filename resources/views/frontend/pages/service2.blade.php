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

<!-- Service Details Section Start -->
<section class="service-details section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center" data-aos="fade-up">
                <img src="{{ asset('uploads/ourservice/'.$ourservice->image) }}" alt="Services Support Image" class="service-details__image img-fluid">
            </div>
            <div class="col-lg-7">
                <div class="section-header text-center text-lg-left">
                    <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{ $title->service2_title }}</h3>
                    <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->service2_heading }}</h1>
                </div>
                <div class="row">
                    <div class="col-xl-10 text-center text-lg-left">
                        <p class="service-details__text">{!! $ourservice->short_description !!}</p>
                    </div>
                    <div class="col-xl-11">
                        <blockquote class="service-details__blockquote bg-white" data-aos="fade-up">
                            <p class="blockquote-text">{{ $ourservice->advise }}</p>
                            <footer class="blockquote-footer text-right"><span class="blockquote-writer position-relative">{{  $ourservice->advisor_name  }}</span></footer>
                        </blockquote>
                    </div>
                    <div class="col-12">
                        <h2 class="service-details__list-title text-uppercase">{{  $ourservice->heading  }}</h2>
                        <ul class="service-details__list mb-0">
                            <li class="service-details__list__item position-relative" data-aos="fade-up">{{  $ourservice->point  }}</li>
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
<!-- Service Details Section End -->

<section id="contact-quote" class="contact-quote section-space section-gap" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="contact-quote__sub-title font-weight-normal">{{ $title->contact_heading }}</h3>
                <h1 class="contact-quote__title text-uppercase font-weight-bold">{{ $projectidea->heading }}</h1>
                <p class="contact-quote__text">{{ $projectidea->title }}</p>
                <a href="{{ route('contact') }}" class="primary-btn d-inline-block text-uppercase mt-2">{{ $projectidea->button_text  }}</a>
            </div>
        </div>
    </div>
</section>

<section class="case-studies" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{ $title->case_studies_title }}</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->case_studies_heading }}</h1>
            </div>
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade d-block show active" id="pills-business-finance" role="tabpanel" aria-labelledby="pills-business-finance-tab">
                        <div class="case-studies__slider row">
                            @foreach ($recentwork as $item)
                            <div class="case-studies__slide col-lg-4 col-md-6">  
                                <div class="case-studies__block position-relative">
                                    <img height="300px" width="200px" src="{{ asset('uploads/recentwork/'.$item->image) }}" alt="Case Studies Image" class="case-studies__block__image w-100">
                                    <div class="case-studies__block__overlay d-flex align-items-end w-100 h-100 position-absolute">
                                        <div class="case-studies__block__overlay__content d-flex align-items-end w-100">
                                            <div class="case-studies__block__overlay__content__text position-relative flex-grow-1">
                                                <h4 class="case-studies__block__overlay__sub-title font-weight-normal side-line side-line--40 mb-1">{{ $item->title }}</h4>
                                                <h3 class="case-studies__block__overlay__title mb-0 mr-4 text-uppercase">
                                                    <a href="./case-study.html" class="case-studies__block__overlay__title__link d-inline-block">{!! $item->short_description !!}</a>
                                                </h3>
                                            </div>
                                            <a href="{{ asset('uploads/recentwork/'.$item->image) }}" data-gall="case-studies" class="plus-btn venobox d-inline-flex align-items-center justify-content-center flex-shrink-0 stretched-link">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            @endforeach
                            <div class="case-studies__slide col-lg-4 col-md-6">
                                <div class="case-studies__block position-relative">
                                        <div class="case-studies__block__overlay__content d-flex align-items-end w-100">      
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


