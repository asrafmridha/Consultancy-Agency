<section class="team section-gap">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--106 mb-1">Our Team</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold">Expert Consultants</h1>
            </div>

            @foreach ($teamimages as $item)
                
            
            <div class="team__grid col-lg-3 col-md-4 col-sm-6 d-flex" data-aos="fade-up">
                <div class="team__block mx-auto">
                    <div class="team__block__wrapper position-relative overflow-hidden">
                        <img height="50px"  src="{{ asset('uploads/team/'.$item->image) }}" alt="A team member image" class="team__block__image w-100 h-100"> 
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