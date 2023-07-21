@extends('frontend.mastaring.master')
@section('content')

<section class="sub-banner section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase font-weight-bold">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb bg-transparent justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact section-gap">
    <div class="container">
        <div class="row justify-content-center section-space pt-0">
            <div class="col-xl-7 col-lg-6 col-md-10">
                <div class="contact__image-wrapper text-center">
                    <img src="{{ asset('frontend') }}/assets/images/contact/contact-image.png" alt="Contact Image" class="contact__image img-fluid">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-10 mt-5 mt-lg-0 d-flex align-items-end">
                @if(session()->has('message'))
                    <div class="h2 alert alert-danger">
                    {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('store.customermessage') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="section-header text-center text-lg-left col-12">
                                    <h3 class="section-header__sub-title side-line side-line--81 mb-1">{{ $title->contact_title }}</h3>
                                    <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->contact_heading }}</h1>      
                                </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control shadow-none h-auto" placeholder="your name"  name="customer_name">
                            @error('customer_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                        </div>
                        <div class="form-group col-12">
                            <input type="email" class="form-control shadow-none h-auto" placeholder="your e-mail"  name="customer_email">

                            @error('customer_email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <textarea class="form-control form-control--textarea shadow-none" placeholder="your message"  name="customer_message"></textarea>

                            @error('customer_message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                           <button class="primary-btn d-inline-block text-uppercase border-0 w-100" type="submit">Send Message</button>  
                        </div>
                    </div>
                </form>                
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 col-md-10 mx-auto">
                <div class="contact__card bg-white">
                    <div class="contact__card-wrapper">
                        <div class="contact__card-wrapper__block mb-5 mb-xl-0">
                            <div class="contact__card__block">
                                <div class="section-header text-center text-lg-left">
                                    <h3 class="section-header__sub-title mb-1">{{ $title->mail_title }}</</h3>
                                    <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->mail_heading }}</h1>
                                </div>
                                <div class="contact-details text-center text-lg-left d-flex flex-column flex-lg-row align-items-center">
                                    <span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 text-white mb-2 mb-lg-0">
                                        {{-- <i class="flaticon-envelope"></i> --}}
                                        {!! $contact->email_font !!}
                                    </span>
                                    <div>
                                        <a href="mailto:consultancyagency@consult.com" class="footer__block__list__link d-inline-block">{{ $contact->email }}</a><br>
                                        <a href="mailto:consult@consultancyagency.com" class="footer__block__list__link d-inline-block">{{ $contact->alter_email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__card-wrapper__block contact__card-wrapper__block--line mb-5 mb-xl-0 d-xl-flex justify-content-xl-center position-relative">
                            <div class="contact__card__block">
                                <div class="section-header text-center text-lg-left">
                                    <h3 class="section-header__sub-title mb-1">{{ $title->phone_title }}</h3>
                                    <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->phone_heading }}</h1>
                                </div>
                                <div class="contact-details text-center text-lg-left d-flex flex-column flex-lg-row align-items-center">
                                    <span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 text-white mb-2 mb-lg-0">
                                        {{-- <i class="flaticon-call"></i> --}}
                                        {!! $contact->phone_font !!}
                                    </span>
                                    <div>
                                        <a href="tel:+5391235862145" class="footer__block__list__link d-inline-block">{{ $contact->phone }}</a><br>
                                        <a href="tel:+8801234586987" class="footer__block__list__link d-inline-block">{{ $contact->alter_phone }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__card-wrapper__block">
                            <div class="contact__card__block">
                                <div class="section-header text-center text-lg-left">
                                    <h3 class="section-header__sub-title mb-1">{{ $title->location_title }}</h3>
                                    <h1 class="section-header__title text-uppercase font-weight-bold">{{ $title->location_heading }}</h1>
                                </div>
                                <div class="contact-details text-center text-lg-left d-flex flex-column flex-lg-row align-items-center">
                                    <span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 text-white mb-2 mb-lg-0">
                                        {{-- <i class="flaticon-placeholder"></i> --}}
                                        {!! $contact->address_font !!}
                                    </span>
                                    <address class="footer__block__list__address contact-details__text mb-0">{{ $contact->address }}</address>	
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


