

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Site Title -->
	<title>Consult | Contact Us</title>
	<!-- Favicon Link -->

    @include('frontend.includes.css')
	
</head>
<body>
	<!-- Preloader Section Start -->
	<div class="preloader position-fixed w-100 h-100">
		<div class="preloader__bg d-flex align-items-center justify-content-center w-100 h-100">
			<img src="./assets/images/preloader/preloader.gif" alt="Preloader Image" class="img-fluid">
		</div>
	</div>
	<!-- Preloader Section End -->

	<!-- Header Section Start -->
	<header class="header position-absolute w-100">
		<div class="container">
			<div class="header__top d-none d-md-block">
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
			</div>
		</div>
		<nav class="navbar navbar-expand-xl w-100">
			<div class="container">
				<a class="navbar-brand" href="./index.html">
					<div class="logo">
						<img class="img-fluid mr-2" src="./assets/images/logo/logo.png" alt="Logo image">onsult
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="flaticon-menu"></i>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center mx-auto">
						<li class="nav-item">
							<a class="nav-link text-capitalize" href="./index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize" href="./service-details.html">Our Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize" href="./case-study.html">Cases</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize" href="./index.html#testimonial">Testimonials</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-capitalize active" href="./contact.html">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link text-capitalize dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
							<div class="dropdown-menu border-0 mx-auto text-center mb-3 mb-xl-0" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="./about.html">About Us</a>
								<a class="dropdown-item" href="./404.html">404 Page</a>
							</div>
						</li>
					</ul>
					<div class="text-center">
						<a href="./contact.html" class="primary-btn d-inline-block text-uppercase">Get a Quote</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header Section End -->

	<!-- Sub Banner Section Start -->
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
	<!-- Sub Banner Section End -->

	<!-- Contact Us Section Start -->
	<section class="contact section-gap">
		<div class="container">
			<div class="row justify-content-center section-space pt-0">
				<div class="col-xl-7 col-lg-6 col-md-10">
					<div class="contact__image-wrapper text-center">
						<img src="./assets/images/contact/contact-image.png" alt="Contact Image" class="contact__image img-fluid">
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 col-md-10 mt-5 mt-lg-0 d-flex align-items-end">
					<form class="contact-form needs-validation bg-white" novalidate data-aos="fade-up">
						<div class="row">
							<div class="section-header text-center text-lg-left col-12">
								<h3 class="section-header__sub-title side-line side-line--81 mb-1">Contact</h3>
								<h1 class="section-header__title text-uppercase font-weight-bold">Send us a Quick Message</h1>
							</div>
							<div class="form-group col-12">
								<input type="text" class="form-control shadow-none h-auto" placeholder="your name" required>
								<span class="invalid-feedback bg-danger text-white p-2 rounded">Please provide your name.</span>
							</div>
							<div class="form-group col-12">
								<input type="email" class="form-control shadow-none h-auto" placeholder="your e-mail" required>
								<span class="invalid-feedback bg-danger text-white p-2 rounded">Please provide your valid email.</span>
							</div>
							<div class="form-group col-12">
								<textarea class="form-control form-control--textarea shadow-none" placeholder="your message" required></textarea>
								<span class="invalid-feedback bg-danger text-white p-2 rounded">Please provide your valuable message.</span>
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
										<h3 class="section-header__sub-title mb-1">E-mail</h3>
										<h1 class="section-header__title text-uppercase font-weight-bold">Contact Through E-Mail</h1>
									</div>
									<div class="contact-details text-center text-lg-left d-flex flex-column flex-lg-row align-items-center">
										<span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 text-white mb-2 mb-lg-0">
											<i class="flaticon-envelope"></i>
										</span>
										<div>
											<a href="mailto:consultancyagency@consult.com" class="footer__block__list__link d-inline-block">consultancyagency@consult.com</a><br>
											<a href="mailto:consult@consultancyagency.com" class="footer__block__list__link d-inline-block">consult@consultancyagency.com</a>
										</div>
									</div>
								</div>
							</div>
							<div class="contact__card-wrapper__block contact__card-wrapper__block--line mb-5 mb-xl-0 d-xl-flex justify-content-xl-center position-relative">
								<div class="contact__card__block">
									<div class="section-header text-center text-lg-left">
										<h3 class="section-header__sub-title mb-1">Phone</h3>
										<h1 class="section-header__title text-uppercase font-weight-bold">Contact Via Call</h1>
									</div>
									<div class="contact-details text-center text-lg-left d-flex flex-column flex-lg-row align-items-center">
										<span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 text-white mb-2 mb-lg-0">
											<i class="flaticon-call"></i>
										</span>
										<div>
											<a href="tel:+5391235862145" class="footer__block__list__link d-inline-block">(539) 123-586-2145</a><br>
											<a href="tel:+8801234586987" class="footer__block__list__link d-inline-block">(880) 1234 586 987</a>
										</div>
									</div>
								</div>
							</div>
							<div class="contact__card-wrapper__block">
								<div class="contact__card__block">
									<div class="section-header text-center text-lg-left">
										<h3 class="section-header__sub-title mb-1">Location</h3>
										<h1 class="section-header__title text-uppercase font-weight-bold">Our Address</h1>
									</div>
									<div class="contact-details text-center text-lg-left d-flex flex-column flex-lg-row align-items-center">
										<span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 text-white mb-2 mb-lg-0">
											<i class="flaticon-placeholder"></i>
										</span>
										<address class="footer__block__list__address contact-details__text mb-0">1234, Parkstreet avenue NewYork City, America</address>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Us Section End -->

	<!-- Footer Section Start -->
	<footer class="footer">
		<div class="footer__top section-space">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-md-6 mb-5 mb-xl-0">
						<div class="footer__block">
							<a href="./index.html" class="footer__block__logo d-inline-block side-line side-line--60">
								<div class="logo">
									<img class="img-fluid mr-2" src="./assets/images/logo/logo.png" alt="Logo image">onsult
								</div>
							</a>
							<ul class="footer__block__list mb-0">
								<li class="footer__block__list__item my-4">
									<div class="contact-details d-flex align-items-center">
										<span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
											<i class="flaticon-placeholder"></i>
										</span>
										<address class="footer__block__list__address contact-details__text mb-0">1234, Park Street avenue, New York City <br>America</address>	
									</div>
								</li>
								<li class="footer__block__list__item my-4">
									<div class="contact-details d-flex align-items-center">
										<span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
											<i class="flaticon-call"></i>
										</span>
										<div>
											<a href="tel:+5391235862145" class="footer__block__list__link d-inline-block">(539) 123-586-2145</a><br>
											<a href="tel:+8801234586987" class="footer__block__list__link d-inline-block">(880) 1234 586 987</a>
										</div>
									</div>
								</li>
								<li class="footer__block__list__item">
									<div class="contact-details d-flex align-items-center">
										<span class="contact-details__icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
											<i class="flaticon-envelope"></i>
										</span>
										<div>
											<a href="mailto:consultancyagency@consult.com" class="footer__block__list__link d-inline-block">consultancyagency@consult.com</a><br>
											<a href="mailto:consult@consultancyagency.com" class="footer__block__list__link d-inline-block">consult@consultancyagency.com</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
						<div class="footer__block ml-md-4">
							<h3 class="footer__block__title side-line side-line--40 mb-4">Our Services</h3>
							<ul class="footer__block__list mb-0 pt-2">
								<li class="footer__block__list__item">
									<a href="./service-details.html" class="footer__block__list__link d-inline-block">Financial Consultancy</a>
								</li>
								<li class="footer__block__list__item">
									<a href="./service-details.html" class="footer__block__list__link d-inline-block">Sales Service Consultancy</a>
								</li>
								<li class="footer__block__list__item">
									<a href="./service-details.html" class="footer__block__list__link d-inline-block">Business Strategy</a>
								</li>
								<li class="footer__block__list__item">
									<a href="./service-details.html" class="footer__block__list__link d-inline-block">User and Market Research</a>
								</li>
								<li class="footer__block__list__item">
									<a href="./service-details.html" class="footer__block__list__link d-inline-block">Customer Support Consulting</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-md-8">
						<div class="footer__block ml-md-4">
							<h3 class="footer__block__title side-line side-line--40 mb-4">Sign up for Newsletter</h3>
							<p class="footer__block__text">If you sign up for newsletter, Then you will get notified in every single update</p>
							<form class="footer__block__form form-inline w-100 position-relative needs-validation" novalidate>
								<input class="form-control d-inline-flex bg-transparent shadow-none w-100" type="email" placeholder="your email here" aria-label="email" required>
								<div class="invalid-tooltip">Please provide a valid email.</div>
								<button class="primary-btn text-uppercase border-0 mt-3 mt-sm-0" type="submit">Submit</button>
							</form>
							<h3 class="footer__block__title side-line side-line--40 mt-5 mb-3">Get Social</h3>
							<ul class="social social--rounded d-flex flex-wrap align-items-center mb-0">
								<li class="social__items" data-aos="fade-up">
									<a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-facebook-app-symbol"></i></a>
								</li>
								<li class="social__items" data-aos="fade-up" data-aos-delay="50">
									<a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-twitter"></i></a>
								</li>
								<li class="social__items" data-aos="fade-up" data-aos-delay="150">
									<a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-pinterest"></i></a>
								</li>
								<li class="social__items" data-aos="fade-up" data-aos-delay="200">
									<a href="#!" target="_blank" class="social__link d-inline-flex align-items-center justify-content-center rounded-circle"><i class="flaticon-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom py-4">
			<div class="container">
				<p class="footer__bottom__text text-center mb-0">© copyright 2021. All rights reserved by <a href="./index.html" class="footer__bottom__link">Consult</a></p>
			</div>
		</div>
	</footer>
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