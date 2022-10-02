@extends('frontend.mastaring.master')
@section('content')

<section class="sub-banner section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase font-weight-bold">CASE STUDIES</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb bg-transparent justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Case Studies</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="case-studies case-studies--secondary section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="case-studies__navigation nav nav-pills flex-column flex-sm-row align-items-center justify-content-center mb-4" id="pills-tab" role="tablist">
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                          <button class="case-studies__navigation__link nav-link bg-transparent border-0 active" data-mixitup-control data-filter="all" data-toggle="pill" role="tab" aria-selected="true">Business & Finance</button>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                          <button class="case-studies__navigation__link nav-link bg-transparent border-0" data-mixitup-control data-filter=".customer-support" data-toggle="pill" role="tab" aria-selected="false">Customer Support</button>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                        <button class="case-studies__navigation__link nav-link bg-transparent border-0" data-mixitup-control data-filter="all" data-toggle="pill" role="tab" aria-selected="false">Financial Service</button>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                          <button class="case-studies__navigation__link nav-link bg-transparent border-0" data-mixitup-control data-filter=".business-strategy" data-toggle="pill" role="tab" aria-selected="false">Business Strategy</button>
                    </li>
                    <li class="case-studies__navigation__item nav-item" role="presentation">
                          <button class="case-studies__navigation__link nav-link bg-transparent border-0" data-mixitup-control data-filter=".sales-service" data-toggle="pill" role="tab" aria-selected="false">Sales Service</button>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="case-studies__container row">
                    @foreach ($recentwork as $item)  
                    <div class="col-lg-4 col-sm-6 mix business-strategy">
                                 
                        <div class="case-studies__block position-relative">
                            <img  height="300px" width="200px" src="{{ asset('uploads/recentwork/'. $item->image ) }}" alt="Case Studies Image" class="case-studies__block__image w-100">
                            <div class="case-studies__block__overlay d-flex align-items-end w-100 h-100 position-absolute">
                                <div class="case-studies__block__overlay__content d-flex align-items-end w-100">
                                    <div class="case-studies__block__overlay__content__text position-relative flex-grow-1">
                                        <h4 class="case-studies__block__overlay__sub-title font-weight-normal side-line side-line--40 mb-1">{{$item->title  }}</h4>
                                        <h3 class="case-studies__block__overlay__title mb-0 mr-4 text-uppercase">
                                            <a href="./case-study.html" class="case-studies__block__overlay__title__link d-inline-block">{{$item->short_description  }}</</a>
                                        </h3>
                                    </div>
                                    <a href="{{ asset('uploads/recentwork/'. $item->image ) }}" data-gall="case-studies" class="plus-btn venobox d-inline-flex align-items-center justify-content-center flex-shrink-0 stretched-link">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        
             
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>





@endsection