<header class="header position-absolute w-100">
    <div class="container">
        {{-- <div class="header__top d-none d-md-block">
            <div class="row">
                <div class="col-lg-6 col-md-8 text-center text-md-left">
                    <a href="tel:+9611234567890" class="header__top__contact d-inline-flex align-items-center mr-4"><i class="header__top__contact__icon flaticon-call mr-2"></i>(+961) 1234 567 890</a>
                    <a href="mailto:consult@consultancy.com" class="header__top__contact d-inline-flex align-items-center"><i class="header__top__contact__icon flaticon-envelope mr-2"></i>consult@consultancy.com</a>
                </div>
                <div class="col-lg-6 col-md-4">
                    <ul class="social d-flex align-items-center justify-content-center justify-content-md-end mb-0">
                        <li class="social__items">
                            <a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-facebook-app-symbol"></i></a>
                        </li>
                        <li class="social__items">
                            <a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-twitter"></i></a>
                        </li>
                        <li class="social__items">
                            <a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-linkedin"></i></a>
                        </li>
                        <li class="social__items">
                            <a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center"><i class="flaticon-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
    <nav class="navbar navbar-expand-xl w-100">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <div class="logo">
                    <img class="img-fluid mr-2" src="{{ asset('frontend') }}/assets/images/logo/logo.png" alt="Logo image">onsult
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="flaticon-menu"></i>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center mx-auto">
                    <li class="nav-item">
                        {{-- <a class="nav-link text-capitalize active" href="{{ asset('frontend') }}/index.html">Home</a> --}}
                        <a class="nav-link text-capitalize active" href="{{ Route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('service2') }}">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('cases') }}">Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#testimonials">Testimonials</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{route('contact') }}">Contact</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link text-capitalize dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu border-0 mx-auto text-center mb-3 mb-xl-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('about-us') }}">About Us</a>
                            <a class="dropdown-item" href="{{ asset('frontend') }}/404.html">404 Page</a>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('contact') }}" class="primary-btn d-inline-block text-uppercase">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>
</header>