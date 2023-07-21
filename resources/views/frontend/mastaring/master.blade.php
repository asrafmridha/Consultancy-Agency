<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.includes.head')
	<!-- All CSS -->
	 @include('frontend.includes.css') 
</head>
<body>
	<!-- Preloader Section Start -->
	{{-- <div class="preloader position-fixed w-100 h-100">
		<div class="preloader__bg d-flex align-items-center justify-content-center w-100 h-100">
			<img src="{{ asset('frontend/assets/images/preloader/preloader.gif') }}" alt="Preloader Image" class="img-fluid">
		</div>
	</div> --}}
	<!-- Preloader Section End -->

	<!-- Header Section Start -->

    @include('frontend.includes.header') 
	
	<!-- Header Section End -->

	<!-- Banner Section Start -->
	
	<!-- Banner Section End -->

	<!-- Our Services Section Start -->
	
	<!-- Our Services Section End -->

	<!-- About Us Section Start -->
	

	<!-- Case Studies Section Start -->
	
	<!-- Case Studies Section End -->

	<!-- Horizontal Line Section Start -->
	

	@yield('content')
	<!-- Horizontal Line Section End -->

	<!-- Form and FAQ Section Start -->
	
	<!-- Form and FAQ Section End -->

	<!-- Testimonial Section Start -->
	
	<!-- Testimonial Section End -->

	<!-- Our Team Section Start -->
	
	<!-- Our Team Section End -->

	<!-- Contact Quote Section Start -->
	
	<!-- Contact Quote Section End -->

	<!-- Clients and Counter Section Start -->
	
	<!-- Clients and Counter Section End -->

	<!-- Footer Section Start -->

    @include('frontend.includes.footer')
	
	<!-- Footer Section End -->

	<!-- Scroll To Top Button Start -->
	<div class="scroll-top position-fixed">
		<span class="scroll-top__btn d-inline-flex align-items-center justify-content-center">
			<i class="flaticon-upload"></i>
		</span>
	</div>
	<!-- Scroll To Top Button End -->

	<!-- All Scripts -->
	@include('frontend.includes.script')
</body>
</html>