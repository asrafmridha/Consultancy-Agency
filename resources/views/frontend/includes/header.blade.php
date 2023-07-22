<header class="header position-absolute w-100">
    <nav class="navbar navbar-expand-xl w-100">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <div class="logo">
                    <img class="img-fluid mr-2" src="{{ asset('storage/') }}/{{ generalSettings()->logo }}" alt="Logo image" style="height: 50px; width:250px">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="flaticon-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center mx-auto" style="color: #1c4594">
                    <li class="nav-item">
                        {{-- <a class="nav-link text-capitalize active" href="{{ asset('frontend') }}/index.html">Home</a> --}}
                        <a class="nav-link text-capitalize" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('service2') }}">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('cases') }}">Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{route('about-us') }}">About Us</a>
                    </li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('contact') }}" class="btn d-inline-block text-uppercase" style="background-color: #3e7dc0;color:white">Contact Us</a>
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
