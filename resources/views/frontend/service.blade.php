@extends('frontend.layouts.app')
@section('title','Services')
@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area d-flex align-items-center breadcrumb__height"
        data-background="{{asset('assets/frontend/img/bg/about/about-bg.jpg')}}" data-overlay="5">
        <div class="container container-3">
            <div class="breadcrumb__text mt-150">
                <div class="row align-items-center">
                    <div class="col-xxl-6">
                        <div class="breadcrumb__left">
                            <div class="breadcrumb__title">
                                <span>Welcome to our company</span>
                                <h2>Skin Surgery</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="breadcrumb__right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><b>Skin Surgery</b></a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- service area start -->
    <div class="service pt-100">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon">
                            <i class="glyph-icon flaticon-abdominoplasty"></i>
                        </div>
                        <div class="service__text">
                            <h4><a href="service-details.html">Liposaction</a></h4>
                            <p>Breast Augmentation
                                Breast Lift
                                Breast Reduction
                                Breast Revision
                                Gynecomastia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon">
                            <i class="glyph-icon flaticon-anatomy"></i>
                        </div>
                        <div class="service__text">
                            <h4><a href="service-details.html">Non Surgical</a></h4>
                            <p>Breast Augmentation
                                Breast Lift
                                Breast Reduction
                                Breast Revision
                                Gynecomastia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon">
                            <i class="glyph-icon flaticon-asymmetry"></i>
                        </div>
                        <div class="service__text">
                            <h4><a href="service-details.html">Breast Implants</a></h4>
                            <p>Breast Augmentation
                                Breast Lift
                                Breast Reduction
                                Breast Revision
                                Gynecomastia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon">
                            <i class="glyph-icon flaticon-beauty"></i>
                        </div>
                        <div class="service__text">
                            <h4><a href="service-details.html">Pender Unity</a></h4>
                            <p>Breast Augmentation
                                Breast Lift
                                Breast Reduction
                                Breast Revision
                                Gynecomastia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center border-0">
                        <div class="service__icon">
                            <i class="glyph-icon flaticon-aesthetic"></i>
                        </div>
                        <div class="service__text">
                            <h4><a href="service-details.html">Lips Surgery</a></h4>
                            <p>Breast Augmentation
                                Breast Lift
                                Breast Reduction
                                Breast Revision
                                Gynecomastia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- help banner area start -->
    <div class="help__banner-area pt-95 pb-120 mt-70">
        <div class="container">
            <div class="help__banner-box text-center">
                <div class="help__icon mb-35">
                    <i class="glyph-icon flaticon-abdominoplasty"></i>
                </div>
                <div class="help__banner-text">
                    <h2>Need a Doctor for Check-up? Emergency<br>
                        +8 (123) 456 789 12</h2>
                    <a href="price-plan.html" class="generic-btn mt-10 mt-md-0 btn-1 dark-bg mr-10" tabindex="0">Make Appointment <i class="fal fa-long-arrow-right ml-10"></i></a>
                    <a href="price-plan.html" class="generic-btn mt-10 mt-md-0 gray-border-btn-2 text-white" tabindex="0">Learn More
                        <i class="fal fa-long-arrow-right pl-10"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- help banner area end -->
    <!-- price area start -->
    <div class="price-area pt-110 pb-120 gray-bg">
        <div class="container">
            <div class="generic-title text-center mb-60">
                {{-- <span>Services</span> --}}
                <h2>Services</h2>
            </div>
            <div class="price__wrapper">
                <div class="row">
                    @forelse ($services as $service)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-30 mb-lg-0">
                        <div class="pricing__box-4 text-center">
                            <div class="pricing__img pricing__img-4 d-inline-block">
                                @if ($service->image)
                                <img src="{{asset($service->image)}}" alt="">

                                @else
                                <img src="{{asset('assets/frontend/img/pricing/pricing-1-2.jpg')}}" alt="">

                                @endif
                                
                            </div>
                            <div class="pricing__text pricing__text-4 no-border text-start">
                                <h4><a href="contact.html">{{$service->service_name}}</a></h4>
                                <div class="appoint__list appoint__list-4">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span class="f-right"><b>USD {{$service->price}}</b></span></p>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div>
                            <h6>No Services available</h6>
                        </div>
                    @endforelse
                   
                    {{-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-30 mb-lg-0">
                        <div class="pricing__box-4 text-center">
                            <div class="pricing__img pricing__img-4 d-inline-block">
                                <img src="{{asset('assets/frontend/img/pricing/pricing-1-2.jpg')}}" alt="">
                            </div>
                            <div class="pricing__text pricing__text-4 no-border text-start">
                                <h4><a href="contact.html">Implants &amp; Recuring</a></h4>
                                <div class="appoint__list appoint__list-4">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span class="f-right"><b>$6,400</b></span></p>
                                        </li>
                                        <li>
                                            <p>Belt Lipectomy (Body Lift) <span class="f-right"><b>$14,630</b></span></p>
                                        </li>
                                        <li>
                                            <p>Brachioplasty (Arm Lift) <span class="f-right"><b>$7,750</b></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Liposuction (Whole Body) <span class="f-right"><b>8:00AM-5:30PM</b></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 mb-30 mb-lg-0">
                        <div class="pricing__box-4 text-center">
                            <div class="pricing__img pricing__img-4 d-inline-block">
                                <img src="{{asset('assets/frontend/img/pricing/pricing-1-3.jpg')}}" alt="">
                            </div>
                            <div class="pricing__text pricing__text-4  no-border text-start">
                                <h4><a href="contact.html">Skin &amp; Face Retouching</a></h4>
                                <div class="appoint__list appoint__list-4">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span class="f-right"><b>$6,400</b></span></p>
                                        </li>
                                        <li>
                                            <p>Belt Lipectomy (Body Lift) <span class="f-right"><b>$14,630</b></span></p>
                                        </li>
                                        <li>
                                            <p>Brachioplasty (Arm Lift) <span class="f-right"><b>$7,750</b></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Liposuction (Whole Body) <span class="f-right"><b>8:00AM-5:30PM</b></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- price area end -->



</main>
@endsection