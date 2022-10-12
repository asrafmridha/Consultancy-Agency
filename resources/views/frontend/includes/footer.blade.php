<footer class="footer">
    <div class="footer__top section-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-5 mb-xl-0">
                    <div class="footer__block">
                        <a href="{{ route('index') }}" class="footer__block__logo d-inline-block side-line side-line--60">
                            <div class="logo">
                                <img class="img-fluid mr-2" src="{{ asset('frontend') }}/assets/images/logo/logo.png" alt="Logo image">onsult
                            </div>
                        </a>
                        <ul class="footer__block__list mb-0">
                            <li class="footer__block__list__item my-4">
                                <div class="contact-details d-flex align-items-center">
                                    <span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        {!! address()->email_font !!}
                                    </span>
                                    <address class="footer__block__list__address contact-details__text mb-0">{{address()->address  }}</address>	
                                </div>
                            </li>
                            <li class="footer__block__list__item my-4">
                                <div class="contact-details d-flex align-items-center">
                                    <span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        {!! address()->phone_font !!}
                                    </span>
                                    <div>
                                        <a href="tel:+5391235862145" class="footer__block__list__link d-inline-block">{{ address()->phone }}</a><br>
                                        <a href="tel:+8801234586987" class="footer__block__list__link d-inline-block">{!! address()->alter_phone !!}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="footer__block__list__item">
                                <div class="contact-details d-flex align-items-center">
                                    <span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                       {!! address()->address_font !!}
                                    </span>
                                    <div>
                                        <a href="mailto:consultancyagency@consult.com" class="footer__block__list__link d-inline-block">{{address()->email  }}</a><br>
                                        <a href="mailto:consult@consultancyagency.com" class="footer__block__list__link d-inline-block">{{address()->alter_email  }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
                    <div class="footer__block ml-md-4">
                        <h3 class="footer__block__title side-line side-line--40 mb-4">{{ $title->service_title }}</h3>
                        <ul class="footer__block__list mb-0 pt-2">
                            <li class="footer__block__list__item">
                                <a href="{{ route('service2') }}">{{ footer_service()->financial }}</a>
                            </li>
                            <li class="footer__block__list__item">
                                <a href="{{ route('service2') }}">{{ footer_service()->sale_service }}</a>
                            </li>
                            <li class="footer__block__list__item">
                                <a href="{{ route('service2') }}">{{ footer_service()->buisness }}</a>
                            </li>
                            <li class="footer__block__list__item">
                                <a href="{{ route('service2') }}">{{ footer_service()->market_research }}</a>
                            </li>
                            <li class="footer__block__list__item">
                                <a href="{{ route('service2') }}">{{ footer_service()->customer_support }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="footer__block ml-md-4">
                        <h3 class="footer__block__title side-line side-line--40 mb-4">Sign up for Newsletter</h3>
                        <p class="footer__block__text">If you sign up for newsletter, Then you will get notified in every single update</p>
                        @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        @endif
                        <form class="footer__block__form form-inline w-100 position-relative needs-validation" action="{{ route('user.subcription') }}" method="POST">
                            @csrf
                            @error('email')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror 
                            <input class="form-control d-inline-flex bg-transparent shadow-none w-100" type="email" placeholder="your email here" aria-label="email" required name="email">
                                        
                            <button class="primary-btn text-uppercase border-0 mt-4 mt-sm-0" type="submit">Submit</button>
                            
                        </form>
                        <h3 class="footer__block__title side-line side-line--40 mt-5 mb-3">Get Social</h3>
                        <ul class="social social--rounded d-flex flex-wrap align-items-center mb-0">
                            <li class="social__items" data-aos="fade-up">
                                <a href="{{ social_url()->fb_url }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-facebook-app-symbol"></i></a>
                            </li>
                            <li class="social__items" data-aos="fade-up" data-aos-delay="50">
                                <a href="{{ social_url()->twitter_url }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-twitter"></i></a>
                            </li>
                            <li class="social__items" data-aos="fade-up" data-aos-delay="150">
                                <a href="{{ social_url()->pinterest_url }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-pinterest"></i></a>
                            </li>
                            <li class="social__items" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ social_url()->linkedin_url }}" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom py-4">
        <div class="container">
            <p class="footer__bottom__text text-center mb-0">© {{ copy_right()->copy_right_year }} <a href="{{ route('dashboard') }}" class="footer__bottom__link">{{ copy_right()->copy_right_text }}</a></p>
        </div>
    </div>
</footer>