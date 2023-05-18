<header class="header position-absolute w-100">
    <nav class="navbar navbar-expand-xl w-100">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <div class="logo">
                    <img class="img-fluid mr-2" src="{{ asset('frontend') }}/assets/images/logo/logo.png" alt="Logo image" style="max-height: 50px">onsultancy
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
                        <a class="nav-link text-capitalize" href="{{route('contact') }}">Contact</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{route('about-us') }}">About Us</a>
                    </li> 
                </ul>
                <div class="text-center">
                    <a href="{{ route('contact') }}" class="primary-btn d-inline-block text-uppercase">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</header>

@section('js')
<script>
    $('.navbar-toggler').on('click',function(){
         $('#navbarSupportedContent').toggle();
    });
</script>
@endsection
