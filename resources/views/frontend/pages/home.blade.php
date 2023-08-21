@extends('frontend.mastaring.master')

@section('content')

{{-- banner Section  --}}

<section class="banner section-gap position-relative" style="background-color: #b5eadf">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center text-lg-left">
                <h3 class="banner__sub-title side-line side-line--50">{{ $title->banner_title }}</h3>
                <h1 class="banner__title text-uppercase"><span class="d-block d-sm-inline d-lg-block"> </span><span class="d-block d-sm-inline d-lg-block">{{ $headertext->title }} </span></h1>
                <p class="banner__text"><span class="d-xl-block">{!! $headertext->Short_description !!}</p>
                <a href="{{ route('about-us') }}" class="btn d-inline-block text-uppercase" style="background-color: #3e7dc0;color:white">{{ $headertext->button_text }}</a>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-10 text-center text-lg-right iframe-container">
                <iframe src="{{ $embed->embed_link }}" height="350" width="600" title="Iframe" class="responsive-iframe"></iframe>
            </div>
        </div>
    </div>
</section>

{{-- End Banner  --}}

{{-- our Service Section  --}}

<section class="services section-gap">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--38 mb-1">{{ $title->service_title }} </h3>
                <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->service_heading }}</h1>
            </div>

            @foreach ($service as $item)
            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
                <div class="services__block position-relative">
                    <div class="services__block__top d-flex align-items-center">
                        <div class="services__block__icon d-inline-flex flex-shrink-0 align-items-center justify-content-center position-relative">
                            {{-- <i class="flaticon-stats position-relative"></i> --}}
                            {!! $item->icon !!}

                        </div>
                        <h3 class="services__block__title mb-0">{{ $item->title }}</h3>
                    </div>
                    <p class="services__block__text">{!!  $item->Short_description !!}</p>

                    <a href="{{ route('our_service',$item->slug) }}" class="services__block__btn d-inline-flex align-items-center stretched-link"> {{ $item->button_text }}<i class="btn__icon flaticon-straight-right-arrow position-relative"></i></a>

                </div>
            </div>

            @endforeach

            </div>
        </div>

</section>

 {{-- Our Service End  --}}

 {{-- About Us Section  --}}

 {{-- <section class="about about--primary section-space section-gap" style="background-image: url({{ asset('uploads/experience/'.$experience->first_image) }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-3 text-center mb-4 mb-lg-0">
                <div class="about__image d-block d-lg-none">
                    <img height="1020px" src="{{ asset('uploads/experience/'.$experience->second_image) }}" alt="About Iamge" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-7 col-lg-9">
                <div class="about__conten text-center text-md-left">
                    <h1 class="about__conten__number text-center font-weight-bold mb-0">{{ $experience->years }}</h1>
                    <div class="about__conten__header mt-3 mt-md-0">
                        <h3 class="about__conten__sub-title text-uppercase">{{ $experience->heading }}</h3>
                        <h2 class="about__conten__title text-uppercase my-3 my-md-0"><span class="d-md-block">{{ $experience->title }} </span> </h2>
                    </div>
                    <div class="about__conten__bar text-center d-none d-md-block" data-aos="fade-up">
                        <img src="{{ asset('uploads/experience/'.$experience->second_image) }}" alt="Transparent Bar" class="about__conten__bar__image img-fluid user-select-none">
                    </div>
                    <div class="about__conten__details">
                        <p class="about__conten__text">{!! $experience->short_description !!}</p>
                        <div class="awards">
                            <div class="row">
                                <div class="col-sm-6" data-aos="fade-up">
                                    <div class="awards__block awards__block--primary text-center">
                                        <img src="{{ asset('uploads/experience/'.$experience->side_image1) }}" alt="Award Image" class="awards__block__image img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="awards__block awards__block--primary text-center">
                                        <img src="{{ asset('uploads/experience/'.$experience->side_image2) }}" alt="Award Image" class="awards__block__image img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up">
                                    <div class="awards__block awards__block--primary text-center mb-sm-0">
                                        <img src="{{ asset('uploads/experience/'.$experience->side_image3) }}" alt="Award Image" class="awards__block__image img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="awards__block awards__block--primary text-center mb-0">
                                        <img src="{{ asset('uploads/experience/'.$experience->side_image4) }}" alt="Award Image" class="awards__block__image img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- About us Section End --}}

  {{-- Case Studies Section  --}}
  <section class="case-studies" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{ $title->case_studies_title }}</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->case_studies_heading }}</h1>
            </div>
            <div class="col-12">
                <ul class="case-studies__navigation nav nav-pills flex-column flex-sm-row align-items-center justify-content-center mb-4" id="pills-tab" role="tablist">
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent active" id="pills-business-finance-tab" data-toggle="pill" href="#pills-business-finance" role="tab" aria-controls="pills-business-finance" aria-selected="true">{{ $recentwork_button->buisness_finance }}</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-customer-support-tab" data-toggle="pill" href="#pills-customer-support" role="tab" aria-controls="pills-customer-support" aria-selected="false">{{ $recentwork_button->customer_support }}</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                        <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-financial-service-tab" data-toggle="pill" href="#pills-financial-service" role="tab" aria-controls="pills-financial-service" aria-selected="false">{{ $recentwork_button->financial_service }}</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-business-strategy-tab" data-toggle="pill" href="#pills-business-strategy" role="tab" aria-controls="pills-business-strategy" aria-selected="false">{{ $recentwork_button->buisness_stargey }}</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-sales-service-tab" data-toggle="pill" href="#pills-sales-service" role="tab" aria-controls="pills-sales-service" aria-selected="false">{{ $recentwork_button->sale_service }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade d-block show active" id="pills-business-finance" role="tabpanel" aria-labelledby="pills-business-finance-tab">
                        <div class="case-studies__slider row">
                            @foreach ($recentwork as $item)
                            <div class="case-studies__slide col-lg-4 col-md-6">
                                <div class="case-studies__block position-relative">
                                    <img height="300px" width="200px" src="{{ asset('uploads/recentwork/'.$item->image) }}" alt="Case Studies Image" class="case-studies__block__image w-100 mt-4">
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


<div class="container">
    <hr class="hr">
</div>

{{-- Case Studies Section End --}}

 {{-- Faq Question Start --}}

 {{-- <section class="form-and-faq section-gap">
    <div class="container">
        <div class="row">
            <div class="form-and-faq__wrapper col-xl-4 col-lg-6 col-md-10">
                <form class="contact-form needs-validation" novalidate>
                    <div class="row">
                        <div class="section-header text-center text-lg-left col-12">
                            <h3 class="section-header__sub-title side-line side-line--81 mb-1">Fill the Form</h3>
                            <h1 class="section-header__title text-uppercase font-weight-bold"><span class="d-lg-block">Let's make a Call or Get</span> a Quotation</h1>
                        </div>
                        <div class="form-group col-12" data-aos="fade-up" data-aos-delay="100">
                            <input type="text" class="form-control shadow-none h-auto" placeholder="your name" required>
                            <span class="invalid-feedback bg-danger text-white p-2 rounded">Please provide your name.</span>
                        </div>
                        <div class="form-group col-12" data-aos="fade-up" data-aos-delay="150">
                            <input type="email" class="form-control shadow-none h-auto" placeholder="your e-mail" required>
                            <span class="invalid-feedback bg-danger text-white p-2 rounded">Please provide your valid email.</span>
                        </div>
                        <div class="form-group col-12" data-aos="fade-up" data-aos-delay="100">
                            <textarea class="form-control form-control--textarea shadow-none" placeholder="your message" required></textarea>
                            <span class="invalid-feedback bg-danger text-white p-2 rounded">Please provide your valuable message.</span>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                            <button class="primary-btn d-inline-block text-uppercase border-0 w-100" type="submit">Get a Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-and-faq__wrapper col-xl-7 col-lg-6 col-md-10 offset-xl-1 mt-5 mt-lg-0">
                <div class="faq">
                    <div class="section-header text-center text-lg-left">
                        <h3 class="section-header__sub-title side-line side-line--81 mb-1">FAQ</h3>
                        <h1 class="section-header__title text-uppercase font-weight-bold">Freaquently Ask Questions</h1>
                    </div>
                    <div class="faq__accordion accordion" id="accordionExample">
                        <div class="card bg-transparent border-0 position-relative" data-aos="fade-up" data-aos-delay="100">
                          <div class="card-header bg-transparent border-0" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn d-flex align-items-center justify-content-between text-left collapsed p-0 shadow-none w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                How can I Get a Best Business Strategy?
                                <span class="btn__icon d-inline-flex flex-shrink-0 align-items-center justify-content-center ml-2">
                                    <i class="flaticon-down-arrow"></i>
                                </span>
                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body pt-0">
                                <hr class="hr mt-0 mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporcididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                        <div class="card bg-transparent border-0 position-relative" data-aos="fade-up" data-aos-delay="150">
                          <div class="card-header bg-transparent border-0" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn d-flex align-items-center justify-content-between text-left collapsed p-0 shadow-none w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                How can I Get a Best Business Strategy?
                                <span class="btn__icon d-inline-flex flex-shrink-0 align-items-center justify-content-center ml-2">
                                    <i class="flaticon-down-arrow"></i>
                                </span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body pt-0">
                                <hr class="hr mt-0 mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporcididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                        <div class="card bg-transparent border-0 position-relative" data-aos="fade-up" data-aos-delay="100">
                          <div class="card-header bg-transparent border-0" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn d-flex align-items-center justify-content-between text-left collapsed p-0 shadow-none w-100 collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I Get a Best Business Strategy?
                                <span class="btn__icon d-inline-flex flex-shrink-0 align-items-center justify-content-center ml-2">
                                    <i class="flaticon-down-arrow"></i>
                                </span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body pt-0">
                                <hr class="hr mt-0 mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporcididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                        <div class="card bg-transparent border-0 position-relative" data-aos="fade-up" data-aos-delay="150">
                          <div class="card-header bg-transparent border-0" id="headingFour">
                            <h2 class="mb-0">
                              <button class="btn d-flex align-items-center justify-content-between text-left collapsed p-0 shadow-none w-100 collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I Get a Best Business Strategy?
                                <span class="btn__icon d-inline-flex flex-shrink-0 align-items-center justify-content-center ml-2">
                                    <i class="flaticon-down-arrow"></i>
                                </span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body pt-0">
                                <hr class="hr mt-0 mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporcididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- Faq Question End  --}}

{{-- Testmonial Section Start --}}

{{-- <section id="testimonials" class="testimonial section-space section-gap" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--98 mb-1">{{ $title->testimonials_title }}</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold text-white">{{ $title->testimonials_heading }}</h1>
            </div>
            <div class="col-xl-12 col-md-10 mx-auto">
                <div class="testimonial__slider">

                    @foreach ($feedback as $item)
                    <div class="col-lg-6">
                        <div class="testimonial__block">
                            <div class="row">
                                    <div class="col-sm-4 d-flex align-items-center d-md-block">
                                        <div class="testimonial__block__image-wrapper position-relative mx-auto">
                                            <img src="{{ asset('uploads/client/'.$item->image) }}" class="testimonial__block__image w-100">
                                            <span class="testimonial__block__quote d-inline-flex align-items-center justify-content-center rounded-circle position-absolute">
                                                <i class="flaticon-straight-quotes"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 d-flex align-items-center">
                                        <div class="testimonial__block__content text-center text-sm-left">
                                            <p class="testimonial__block__content__text">{!! $item->short_description !!}</p>
                                            <h3 class="testimonial__block__content__title d-inline-block position-relative">{{ $item->client_name }}</h3>
                                            <h4 class="testimonial__block__content__sub-title">{{ $item->designation }}</h4>
                                            <ul class="testimonial__block__content__rating-list d-flex align-items-center justify-content-center justify-content-sm-start mb-0">
                                                @if($item->star == 1)
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>

                                                @elseif($item->star == 2)
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                @elseif($item->star == 3)
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                @elseif($item->star == 4)
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                @elseif($item->star == 5)
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                <li class="testimonial__block__content__rating-item mr-1">
                                                    <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- Testmonial Section End  --}}

<section id="testimonials" class="testimonial section-space section-gap" data-aos="fade-up" style="background-color: #b5eadf">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--98 mb-1">{{ $title->testimonials_title }}</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold text-white">{{ $title->testimonials_heading }}</h1>
            </div>
            @foreach ($feedback as $item)
                <div class="col-4">
                        <div class="col-sm-4 d-flex align-items-center d-md-block">
                            <div class="testimonial__block__image-wrapper position-relative mx-auto">
                                <img src="{{ asset('uploads/client/'.$item->image) }}" class="testimonial__block__image w-150">
                                <span class="testimonial__block__quote d-inline-flex align-items-center justify-content-center rounded-circle position-absolute">
                                    <i class="flaticon-straight-quotes"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 d-flex align-items-center">
                            <div class="testimonial__block__content text-center text-sm-left">
                                <p class="testimonial__block__content__text">{!! $item->short_description !!}</p>
                                <h3 class="testimonial__block__content__title d-inline-block position-relative">{{ $item->client_name }}</h3>
                                <h4 class="testimonial__block__content__sub-title">{{ $item->designation }}</h4>
                                <ul class="testimonial__block__content__rating-list d-flex align-items-center justify-content-center justify-content-sm-start mb-0">
                                    @if($item->star == 1)
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>

                                    @elseif($item->star == 2)
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    @elseif($item->star == 3)
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    @elseif($item->star == 4)
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    @elseif($item->star == 5)
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    <li class="testimonial__block__content__rating-item mr-1">
                                        <i class="testimonial__block__content__rating-icon flaticon-star"></i>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
        {{ $feedback->links() }}
    </div>
</section>

{{-- our Team Start --}}

<section class="team section-gap">
    <div class="container mx-auto">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--106 mb-1">{{ $title->team_title }}</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->team_heading }}</h1>
            </div>

            @foreach ($teamimages as $item)
            <div class="team__grid col-lg-3 col-md-4 col-sm-6 d-flex mb-5" data-aos="fade-up">
                <div class="team__block  mx-auto">
                    <div class="team__block__wrapper position-relative overflow-hidden">
                        <img  style="height: 250px" width="220px" src="{{ asset('uploads/team/'.$item->image) }}" alt="A team member image" class="team__block__image ">
                        <div class="team__block__overlay d-flex align-items-end position-absolute w-100 h-100">
                            <div class="team__block__overlay__contant d-flex align-items-end w-100">
                                <div class="flex-grow-1">
                                    <h3 class="team__block__overlay__title">{{ $item->name }}</h3>
                                    <h4 class="team__block__overlay__sub-title position-relative pb-3">{{ $item->designation }}</h4>
                                    <ul class="social d-flex align-items-center mb-0 position-relative">
                                        <li class="social__items">
                                            <a href="{{ $item->fb_link }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center pl-0"><i class="flaticon-facebook-app-symbol"></i></a>
                                        </li>
                                        <li class="social__items">
                                            <a href="{{ $item->twitter_link }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-twitter"></i></a>
                                        </li>
                                        <li class="social__items">
                                            <a href="{{ $item->linkedin_link }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-linkedin"></i></a>
                                        </li>
                                        <li class="social__items">
                                            <a href="{{ $item->pinterest_link }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ asset('uploads/team/'.$item->image) }}" data-gall="team" class="plus-btn venobox d-inline-flex align-items-center justify-content-center flex-shrink-0 mb-3 stretched-link">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- our team End  --}}

{{-- contact Start  --}}.



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

{{-- contact End  --}}

{{-- clients section start  --}}

<section class="clients-and-counter section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 mx-auto">
                <div class="clients">
                    <div class="section-header text-center text-lg-left">
                        <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{ $title->client_title }}</h3>
                        <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->client_heading }}</h1>
                    </div>
                    <ul class="clients__list row mb-0">
                        {{-- <li class="clients__list__item col-sm-4 col-6">
                            <a href="#!" target="_blank" class="clients__block d-inline-flex align-items-center justify-content-center justify-content-sm-start w-100 h-100" data-aos="zoom-in">
                                <img src="{{ asset('frontend') }}/assets/images/clients/clients-1.png" alt="Clients Image" class="clients__block__image img-fluid">
                            </a>
                        </li>
                        <li class="clients__list__item col-sm-4 col-6">
                            <a href="#!" target="_blank" class="clients__block d-inline-flex align-items-center justify-content-center w-100 h-100" data-aos="zoom-in" data-aos-delay="100">
                                <img src="{{ asset('frontend') }}/assets/images/clients/clients-2.png" alt="Clients Image" class="clients__block__image img-fluid">
                            </a>
                        </li>
                        <li class="clients__list__item col-sm-4 col-6">
                            <a href="#!" target="_blank" class="clients__block d-inline-flex align-items-center justify-content-center justify-content-sm-end w-100 h-100" data-aos="zoom-in" data-aos-delay="200">
                                <img src="{{ asset('frontend') }}/assets/images/clients/clients-3.png" alt="Clients Image" class="clients__block__image img-fluid">
                            </a>
                        </li>
                        <li class="clients__list__item col-sm-4 col-6">
                            <a href="#!" target="_blank" class="clients__block d-inline-flex align-items-center justify-content-center justify-content-sm-start w-100 h-100" data-aos="zoom-in" data-aos-delay="300">
                                <img src="{{ asset('frontend') }}/assets/images/clients/clients-4.png" alt="Clients Image" class="clients__block__image img-fluid">
                            </a>
                        </li>
                        <li class="clients__list__item col-sm-4 col-6">
                            <a href="#!" target="_blank" class="clients__block d-inline-flex align-items-center justify-content-center w-100 h-100" data-aos="zoom-in" data-aos-delay="400">
                                <img src="{{ asset('frontend') }}/assets/images/clients/clients-5.png" alt="Clients Image" class="clients__block__image img-fluid">
                            </a>
                        </li> --}}
                        @foreach ($customertrust as   $item)
                        <li class="clients__list__item col-sm-4 col-6">
                            <a href="#!" target="_blank" class="clients__block d-inline-flex align-items-center justify-content-center justify-content-sm-end w-100 h-100" data-aos="zoom-in" data-aos-delay="300">
                                <img src="{{ asset('uploads/trustus/'.$item->image) }}" alt="Clients Image" class="clients__block__image img-fluid">
                            </a>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 col-lg-8 mx-auto offset-xl-1 mt-5 mt-xl-0">
                <div class="counter">
                    <div class="section-header text-center text-lg-left">
                        <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{ $title->success_area_title }}</h3>
                        <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->success_area_heading }}</h1>
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
</section>

{{-- clients Section End --}}


@endsection




