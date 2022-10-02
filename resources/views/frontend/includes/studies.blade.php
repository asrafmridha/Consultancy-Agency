<section class="case-studies" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="section-header col-12 text-center">
                <h3 class="section-header__sub-title side-line side-line--81 mb-1">Case Studies</h3>
                <h1 class="section-header__title text-uppercase font-weight-bold">Our Recent Works</h1>
            </div>
            <div class="col-12">
                <ul class="case-studies__navigation nav nav-pills flex-column flex-sm-row align-items-center justify-content-center mb-4" id="pills-tab" role="tablist">
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent active" id="pills-business-finance-tab" data-toggle="pill" href="#pills-business-finance" role="tab" aria-controls="pills-business-finance" aria-selected="true">Business & Finance</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-customer-support-tab" data-toggle="pill" href="#pills-customer-support" role="tab" aria-controls="pills-customer-support" aria-selected="false">Customer Support</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                        <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-financial-service-tab" data-toggle="pill" href="#pills-financial-service" role="tab" aria-controls="pills-financial-service" aria-selected="false">Financial Service</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-business-strategy-tab" data-toggle="pill" href="#pills-business-strategy" role="tab" aria-controls="pills-business-strategy" aria-selected="false">Business Strategy</a>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                      <a class="case-studies__navigation__link nav-link bg-transparent" id="pills-sales-service-tab" data-toggle="pill" href="#pills-sales-service" role="tab" aria-controls="pills-sales-service" aria-selected="false">Sales Service</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade d-block show active" id="pills-business-finance" role="tabpanel" aria-labelledby="pills-business-finance-tab">

                        @foreach ($recentwork as $item)
                            
                        
                        <div class="case-studies__slider row">
                            <div class="case-studies__slide col-lg-4 col-md-6">
                                <div class="case-studies__block position-relative">
                                    <img src="{{ asset('frontend') }}/assets/images/case-studies/case-studies-1.png" alt="Case Studies Image" class="case-studies__block__image w-100">
                                    <div class="case-studies__block__overlay d-flex align-items-end w-100 h-100 position-absolute">
                                        <div class="case-studies__block__overlay__content d-flex align-items-end w-100">
                                            <div class="case-studies__block__overlay__content__text position-relative flex-grow-1">
                                                <h4 class="case-studies__block__overlay__sub-title font-weight-normal side-line side-line--40 mb-1">{{ $item->title }}</h4>
                                                <h3 class="case-studies__block__overlay__title mb-0 mr-4 text-uppercase">
                                                    <a href="./case-study.html" class="case-studies__block__overlay__title__link d-inline-block">{{ $item->short_description }}</a>
                                                </h3>
                                            </div>
                                            <a href="{{ asset('frontend') }}/assets/images/case-studies/case-studies-1.png" data-gall="case-studies" class="plus-btn venobox d-inline-flex align-items-center justify-content-center flex-shrink-0 stretched-link">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-studies__slide col-lg-4 col-md-6">
                                <div class="case-studies__block position-relative">
                                  
                                        <div class="case-studies__block__overlay__content d-flex align-items-end w-100">
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
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