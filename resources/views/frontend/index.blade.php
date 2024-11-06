@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
<main>
    <!-- slider area start -->
    <div class="slider-area" data-background="{{asset('assets/frontend/img/slider/slider-1.png')}}">
        <div class="slider-active">
            <div class="single-slider d-flex align-items-center slider-height">
                <div class="container">
                    <div class="slider-text slider-text-5 has-border mt-140">
                        <span>Perfect Face Perfection</span>
                        <h2>Perfect Face Surgery<br>
                            For Everyone.</h2>
                        <p>Progery reiterates the pledge to help all and give hope to<br>
                            those who have lost hope.</p>
                        <a href="service-details.html" class="generic-btn btn-1">All Services</a>
                        <a href="service-details.html" class="featured-btn feature-btn-2">Other Features <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->
    <!-- service area start -->
    <div class="service service-area-1 pt-120">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-abdominoplasty"></i>
                        </div>
                        <div class="service__text">
                            <h4>Liposaction</h4>
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
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-anatomy"></i>
                        </div>
                        <div class="service__text">
                            <h4>Non Surgical</h4>
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
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-asymmetry"></i>
                        </div>
                        <div class="service__text">
                            <h4>Breast Implants</h4>
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
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-aesthetic"></i>
                        </div>
                        <div class="service__text">
                            <h4>Lips Surgery</h4>
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
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-beauty"></i>
                        </div>
                        <div class="service__text">
                            <h4>Pender Unity</h4>
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
    <!-- about area start -->
    <div class="about-area about-area-1 mt-90 mb-150">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-xl d-none d-md-block">
                    <div class="about-area__wrapper">
                        <div class="about__img">
                            <img src="{{asset('assets/frontend/img/about/a1.png')}}" alt="">
                        </div>
                        <div class="about__img">
                            <img class="mt-60" src="{{asset('assets/frontend/img/about/a2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl col-md-10">
                    <div class="about__text pl-80 about__text-5">
                        <div class="generic-title">
                            <span>About Us</span>
                            <h4>We are the leading plastic
                                surgery center.</h4>
                        </div>
                        <div class="about__info align-items-center d-flex">
                            <a href="https://www.youtube.com/watch?v=DGQwd1_dpuc&amp;t=10s" class="video-popup"><i
                                    class="fas fa-play"></i></a>
                            <p>Progery reiterates the pledge to help all and give
                                hope to those who have lost hope.</p>
                        </div>
                        <p class="desc">NewLook unlike many traditional plastic surgery centers in San Diego,
                            are industry recognized experts in a wide variety of cosmetic procedure
                            and are dedicated to providing customers.</p>
                        <div class="about__list about__list-1 mt-15">
                            <ul>
                                <li>
                                    <i class="fal fa-check"></i>
                                    <h6 class="mr-50">Breast implant safety</h6>
                                </li>
                                <li>
                                    <i class="fal fa-check"></i>
                                    <h6>Surgery preparation</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- features area start -->
    <div class="features__area features-1 gray-bg pt-120 pb-445">
        <div class="container">
           <div class="features__tab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#features__1"
                            type="button" role="tab"  aria-selected="false">Chemical
                            Research</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#features__2" type="button" role="tab" 
                            aria-selected="false">Advanced Surgery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#features__3" type="button"
                            role="tab"  aria-selected="false">Skins Renewal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#features__4" type="button"
                            role="tab"  aria-selected="false">Saline Implants</button>
                    </li>
                </ul>
           </div>
            <div class="tab-content">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="features__1" role="tabpanel">
                        <div class="features__content mt-40">
                            <div class="features__wrapper">
                                <div class="row g-0">
                                    <div class="col-xl">
                                        <div class="features__text h-100">
                                            <div class="generic-title">
                                                <span>Chemical Research</span>
                                                <h4>Facts you need to know
                                                    ahead consequences.</h4>
                                            </div>
                                            <div class="features__list">
                                                <ul>
                                                    <li class="mt-40">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f1.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Surgery Preparation</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                    <li class="mt-30">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f2.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Body Surgery</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl d-none d-xl-block">
                                        <div class="feature__img">
                                            <img src="{{asset('assets/frontend/img/bg/about-bg.png')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="features__2" role="tabpanel">
                        <div class="features__content mt-40">
                            <div class="features__wrapper">
                                <div class="row g-0">
                                    <div class="col-xl">
                                        <div class="features__text h-100">
                                            <div class="generic-title">
                                                <span>Advanced Surgery</span>
                                                <h4>Residents and fellows to practice surgical</h4>
                                            </div>
                                            <div class="features__list">
                                                <ul>
                                                    <li class="mt-40">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f1.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Surgery Preparation</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                    <li class="mt-30">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f2.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Body Surgery</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl d-none d-xl-block">
                                        <div class="feature__img">
                                            <img src="{{asset('assets/frontend/img/bg/about/02.jpg')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="features__3" role="tabpanel">
                        <div class="features__content mt-40">
                            <div class="features__wrapper">
                                <div class="row g-0">
                                    <div class="col-xl">
                                        <div class="features__text h-100">
                                            <div class="generic-title">
                                                <span>Skins Renewal</span>
                                                <h4> The hands-on, in-vivo lab includes</h4>
                                            </div>
                                            <div class="features__list">
                                                <ul>
                                                    <li class="mt-40">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f1.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Surgery Preparation</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                    <li class="mt-30">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f2.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Body Surgery</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl d-none d-xl-block">
                                        <div class="feature__img">
                                            <img src="{{asset('assets/frontend/img/bg/about/03.jpg')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="features__4" role="tabpanel">
                        <div class="features__content mt-40">
                            <div class="features__wrapper">
                                <div class="row g-0">
                                    <div class="col-xl">
                                        <div class="features__text h-100">
                                            <div class="generic-title">
                                                <span>Saline Implants</span>
                                                <h4>Residents and fellows to practice </h4>
                                            </div>
                                            <div class="features__list">
                                                <ul>
                                                    <li class="mt-40">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f1.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Surgery Preparation</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                    <li class="mt-30">
                                                        <div class="feature__logo">
                                                            <img src="{{asset('assets/frontend/img/icon/f2.png')}}" alt="">
                                                        </div>
                                                        <div class="feature__text">
                                                            <h4>Body Surgery</h4>
                                                            <p><span>Cosmetic surgery is a unique discipline</span>
                                                                of medicine focused on enhancing</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl d-none d-xl-block">
                                        <div class="feature__img">
                                            <img src="{{asset('assets/frontend/img/bg/about/04.jpg')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features area end -->
    <!-- ui banner start -->
    <div class="ui-banner-area mt-minus-325">
        <div class="container">
            <div class="ui-banner twentytwenty-container">
                <img src="{{asset('assets/frontend/img/banner/banner-2.jpg')}}" class="w-100" alt="">
                <img src="{{asset('assets/frontend/img/banner/banner-1.jpg')}}" class="w-100" alt="">
            </div>
        </div>
    </div>
    <!-- ui banner end -->
    <!-- team area start -->
    <div class="team-area pt-110">
        <div class="container">
            <div class="row  p-rel">
                <div class="col-xl-5 col-lg-6">
                    <div class="team__left">
                        <div class="generic-title">
                            <span>Our Team</span>
                            <h4>Our experts team is ready
                                for this kind solutions.</h4>
                            <p>NewLook unlike many traditional plastic surgery centers in San Diego,
                                are industry recognized experts in a wide variety of cosmetic procedure
                                and are dedicated to providing customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 p-static offset-xl-1">
                    <div class="testimonial__active  p-static mt-30">
                        <div class="single__testimonial text-center">
                            <div class="col-12">
                                <div class="testimonial__wrapper">
                                    <div class="testimonial__img">
                                        <img src="{{asset('assets/frontend/img/testimonial/t1.png')}}" alt="">
                                        <div class="testimonial__img-inner">
                                            <div class="testimonial-social text-right">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text">
                                        <span>Surgent</span>
                                        <a href="team.html">
                                            <h4>MR. Max Alex</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single__testimonial text-center">
                            <div class="col-12">
                                <div class="testimonial__wrapper">
                                    <div class="testimonial__img">
                                        <img src="{{asset('assets/frontend/img/testimonial/t2.png')}}" alt="">
                                        <div class="testimonial__img-inner">
                                            <div class="testimonial-social text-right">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text">
                                        <span>MBBS</span>
                                        <a href="team.html">
                                            <h4>Alex D. Denzel</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single__testimonial text-center">
                            <div class="col-12">
                                <div class="testimonial__wrapper">
                                    <div class="testimonial__img">
                                        <img src="{{asset('assets/frontend/img/testimonial/t1.png')}}" alt="">
                                        <div class="testimonial__img-inner">
                                            <div class="testimonial-social text-right">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text">
                                        <span>Surgent</span>
                                        <a href="team.html">
                                            <h4>Alex D. Denzel</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single__testimonial text-center">
                            <div class="col-12">
                                <div class="testimonial__wrapper">
                                    <div class="testimonial__img">
                                        <img src="{{asset('assets/frontend/img/testimonial/t2.png')}}" alt="">
                                        <div class="testimonial__img-inner">
                                            <div class="testimonial-social text-right">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text">
                                        <span>Surgent</span>
                                        <a href="team.html">
                                            <h4>Alex D. Denzel</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single__testimonial text-center">
                            <div class="col-12">
                                <div class="testimonial__wrapper">
                                    <div class="testimonial__img">
                                        <img src="{{asset('assets/frontend/img/testimonial/t1.png')}}" alt="">
                                        <div class="testimonial__img-inner">
                                            <div class="testimonial-social text-right">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text">
                                        <span>Surgent</span>
                                        <a href="team.html">
                                            <h4>Alex D. Denzel</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->
    <!-- featured are astart -->
    <div class="featured-area gray-bg pt-110 mt-130 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                    <div class="generic-title text-center">
                        <span>Botox Products</span>
                        <h4>Featured Products.</h4>
                    </div>
                </div>
            </div>
            <div class="featured-active owl-carousel">
                <div class="single-featured">
                    <div class="col-12">
                        <div class="featured__product mt-45">
                            <div class="featured__product-img">
                                <a href="shop-details.html">
                                    <img src="{{asset('assets/frontend/img/product/f1.png')}}" alt="">
                                    <img src="{{asset('assets/frontend/img/product/f2.png')}}" alt="" class="secondary">
                                </a>
                                <div class="product-action">
                                    <div class="product-action__icon">
                                        <a href="shop.html"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="shop-details.html"><i class="fal fa-eye"></i></a>
                                        <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                                <span class="onsale">HOT</span>
                            </div>
                            <div class="featured__product-text text-center">
                                <span class="price">$99.00</span>
                                <h4><a href="shop-details.html">Camao Ligglia Face Cream</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-featured">
                    <div class="col-12">
                        <div class="featured__product mt-45">
                            <div class="featured__product-img">
                                <a href="shop-details.html">
                                    <img src="{{asset('assets/frontend/img/product/f2.png')}}" alt="">
                                    <img src="{{asset('assets/frontend/img/product/f3.png')}}" alt="" class="secondary">
                                </a>
                                <div class="product-action">
                                    <div class="product-action__icon">
                                        <a href="shop.html"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="shop-details.html"><i class="fal fa-eye"></i></a>
                                        <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured__product-text text-center">
                                <span class="price">$22.00</span>
                                <h4><a href="shop-details.html">Loose Oversized Shirt </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-featured">
                    <div class="col-12">
                        <div class="featured__product mt-45">
                            <div class="featured__product-img">
                                <a href="shop-details.html">
                                    <img src="{{asset('assets/frontend/img/product/f3.png')}}" alt="">
                                    <img src="{{asset('assets/frontend/img/product/f4.png')}}" alt="" class="secondary">
                                </a>
                                <div class="product-action">
                                    <div class="product-action__icon">
                                        <a href="shop.html"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="shop-details.html"><i class="fal fa-eye"></i></a>
                                        <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                                <span class="onsale">-50%</span>
                            </div>
                            <div class="featured__product-text text-center">
                                <span class="price">$43.00</span>
                                <h4><a href="shop-details.html">Cotton Jersey Loose</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-featured">
                    <div class="col-12">
                        <div class="featured__product mt-45">
                            <div class="featured__product-img">
                                <a href="shop-details.html">
                                    <img src="{{asset('assets/frontend/img/product/f4.png')}}" alt="">
                                    <img src="{{asset('assets/frontend/img/product/f3.png')}}" alt="" class="secondary">
                                </a>
                                <div class="product-action">
                                    <div class="product-action__icon">
                                        <a href="shop.html"><i class="fal fa-shopping-cart"></i></a>
                                        <a href="shop-details.html"><i class="fal fa-eye"></i></a>
                                        <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured__product-text text-center">
                                <span class="price">$23.00</span>
                                <h4><a href="shop-details.html">Cotton Jersey Top (Variable)</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured are end -->
    <!-- appoint area start -->
    <div class="appoint-area appoint-area__4 p-rel gray-bg pt-105 pb-110">
        <div class="appoint__content-bg"></div>
        <div class="appoint__text-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="appoint-2__text appoint-3__text ps-0">
                            <div class="generic-title">
                                <h4 class="text-white">Get Appointment</h4>
                                <span class="text-white mt-15">Based on UTC +2</span>
                            </div>
                            <div class="appoint-2__list list-2 mt-55">
                                <ul>
                                    <li>
                                        <h6 class="text-white">Monday</h6>
                                        <p class="text-white">8:00 AM - 5:30 PM</p>
                                    </li>
                                    <li>
                                        <h6 class="text-white">Tuesday</h6>
                                        <p class="text-white">8:00 AM - 5:30 PM</p>
                                    </li>
                                    <li>
                                        <h6 class="text-white">Wednesday</h6>
                                        <p class="text-white">8:00 AM - 5:30 PM</p>
                                    </li>
                                    <li>
                                        <h6 class="text-white">Thursday</h6>
                                        <p class="text-white">8:00 AM - 5:30 PM</p>
                                    </li>
                                    <li>
                                        <h6 class="text-white">Sunday</h6>
                                        <p class="text-white"><span>Off Day</span></p>
                                    </li>
                                </ul>
                                <img src="{{asset('assets/frontend/img/icon/calendar-2.png')}}" alt="">
                            </div>
                            <a href="price-plan.html" class="generic-btn btn-2 mt-50  appoint-btn" tabindex="0"><i
                                    class="fal fa-calendar-alt"></i> Make Appointment</a>
                        </div>
                    </div>
                    <div class="appoint__right-2 pl-115">
                        <div class="appoint__active">
                            <div class="single-appoint">
                                <div class="single-testimonial-4 has-after bg-white">
                                    <div class="view-rating">
                                        <h6>Execellent -</h6>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                    </div>
                                    <div class="testimonial__text">
                                        <p>“ The name isn't taken from the synthetic substance but from the Greek
                                            word plastikos, which means to form or mold (and which gives the
                                            material plastic its name as well). Plastic surgery is a special type of
                                            surgery that can change a person's appearance and ability to function.
                                            The name isn't taken from the synthetic substance “</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-item-2 pl-25 mt-35 d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{asset('assets/frontend/img/testimonial/shop/1.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Robert Downer</h5>
                                        <p>Creative Director at <span>Envato LLC</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-appoint">
                                <div class="single-testimonial-4 has-after bg-white">
                                    <div class="view-rating">
                                        <h6>Execellent -</h6>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                    </div>
                                    <div class="testimonial__text">
                                        <p>“ The name isn't taken from the synthetic substance but from the Greek
                                            word plastikos, which means to form or mold (and which gives the
                                            material plastic its name as well). Plastic surgery is a special type of
                                            surgery that can change a person's appearance and ability to function.
                                            The name isn't taken from the synthetic substance “</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-item-2 pl-25 mt-35 d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{asset('assets/frontend/img/testimonial/shop/1.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Robert Downer</h5>
                                        <p>Creative Director at <span>Envato LLC</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-appoint">
                                <div class="single-testimonial-4 has-after bg-white">
                                    <div class="view-rating">
                                        <h6>Execellent -</h6>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                        <i class="fal fa-star active"></i>
                                    </div>
                                    <div class="testimonial__text">
                                        <p>“ The name isn't taken from the synthetic substance but from the Greek
                                            word plastikos, which means to form or mold (and which gives the
                                            material plastic its name as well). Plastic surgery is a special type of
                                            surgery that can change a person's appearance and ability to function.
                                            The name isn't taken from the synthetic substance “</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-item-2 pl-25 mt-35 d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{asset('assets/frontend/img/testimonial/shop/1.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Robert Downer</h5>
                                        <p>Creative Director at <span>Envato LLC</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- appoint area end -->
    <!-- pricing area start -->
    <div class="pricing-area pt-95 mt-60 mt-lg-0">
        <div class="container">
            <div class="generic-title text-center mb-55">
                <span>Price & Plans</span>
                <h4>Surgical Estimates</h4>
            </div>
            <div class="pricing__wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                        <div class="pricing__box mb-30">
                            <div class="pricing__img">
                                <img src="{{asset('assets/frontend/img/pricing/1.png')}}" alt="">
                            </div>
                            <div class="price-bg-img" data-background="{{asset('assets/frontend/img/bg/appoint/appoint-text-1.png')}}"></div>
                            <div class="pricing__text  p-rel">
                                <h4><a href="service-details.html">Body Contouring</a></h4>
                                <div class="appoint__list mt-20">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span><b>$6,400 – $12,600</b></span></p>
                                        </li>
                                        <li>
                                            <p>Tuesday <span><b>$14,630</b></span></p>
                                        </li>
                                        <li>
                                            <p>Wednesday <span><b>$7,750</b></span></p>
                                        </li>
                                        <li>
                                            <p>Thursday <span><b>8:00 AM - 5:30 PM</b></span></p>
                                        </li>
                                        <li>
                                            <p>Sunday <span><b>$3,550 – 8,500</b></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                        <div class="pricing__box mb-30">
                            <div class="pricing__img">
                                <img src="{{asset('assets/frontend/img/pricing/2.png')}}" alt="">
                            </div>
                            <div class="price-bg-img" data-background="{{asset('assets/frontend/img/bg/appoint/appoint-text-1.png')}}"></div>

                            <div class="pricing__text">
                                <h4><a href="service-details.html">Breast Operation</a></h4>
                                <div class="appoint__list mt-20">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span><b>$6,400 – $12,600</b></span></p>
                                        </li>
                                        <li>
                                            <p>Tuesday <span><b>$14,630</b></span></p>
                                        </li>
                                        <li>
                                            <p>Wednesday <span><b>$7,750</b></span></p>
                                        </li>
                                        <li>
                                            <p>Thursday <span><b>8:00 AM - 5:30 PM</b></span></p>
                                        </li>
                                        <li>
                                            <p>Sunday <span><b>$3,550 – 8,500</b></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                        <div class="pricing__box mb-30">
                            <div class="pricing__img">
                                <img src="{{asset('assets/frontend/img/pricing/3.png')}}" alt="">
                            </div>
                            <div class="price-bg-img" data-background="{{asset('assets/frontend/img/bg/appoint/appoint-text-1.png')}}"></div>

                            <div class="pricing__text">
                                <h4><a href="service-details.html">Facial Procedures</a></h4>
                                <div class="appoint__list mt-20">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span><b>$6,400 – $12,600</b></span></p>
                                        </li>
                                        <li>
                                            <p>Tuesday <span><b>$14,630</b></span></p>
                                        </li>
                                        <li>
                                            <p>Wednesday <span><b>$7,750</b></span></p>
                                        </li>
                                        <li>
                                            <p>Thursday <span><b>8:00 AM - 5:30 PM</b></span></p>
                                        </li>
                                        <li>
                                            <p>Sunday <span><b>$3,550 – 8,500</b></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                        <div class="pricing__box mb-30">
                            <div class="pricing__img">
                                <img src="{{asset('assets/frontend/img/pricing/4.png')}}" alt="">
                            </div>
                            <div class="price-bg-img" data-background="{{asset('assets/frontend/img/bg/appoint/appoint-text-1.png')}}"></div>

                            <div class="pricing__text">
                                <h4><a href="service-details.html">Skins Fillers</a></h4>
                                <div class="appoint__list mt-20">
                                    <ul>
                                        <li>
                                            <p>Abdominoplasty (Tummy Tuck) <span><b>$6,400 – $12,600</b></span></p>
                                        </li>
                                        <li>
                                            <p>Tuesday <span><b>$14,630</b></span></p>
                                        </li>
                                        <li>
                                            <p>Wednesday <span><b>$7,750</b></span></p>
                                        </li>
                                        <li>
                                            <p>Thursday <span><b>8:00 AM - 5:30 PM</b></span></p>
                                        </li>
                                        <li>
                                            <p>Sunday <span><b>$3,550 – 8,500</b></span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing area end -->
    <!-- news area start -->
    <div class="news-area gray-bg pt-95 pb-70 mt-80">
        <div class="container">
            <div class="row mb-50 align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="generic-title">
                        <span>Price & Plans</span>
                        <h2>Surgical Estimates</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6">
                    <a href="https://devsnews.com/template/progery/progery/news.html/" class="generic-btn-2 white-btn f-right"><i class="fal fa-newspaper"></i>
                        News
                        Insights</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-xl col-lg col-md-6 col-sm-6 col-12">
                            <div class="single__news mb-30">
                                <div class="news__img">
                                    <img src="{{asset('assets/frontend/img/news/n1.png')}}" class="w-100" alt="">
                                </div>
                                <div class="news__text p-0">
                                    <div class="news__meta">
                                        <a href="blog.html" class="theme-color">Experience</a> <span>August 22th,
                                            2019</span>
                                    </div>
                                    <div class="news__link">
                                        <h4>
                                            <a href="news-details.html">Face Lift is a Non-surgical Surgery to </a>
                                        </h4>
                                    </div>
                                    <div class="news__view">
                                        <ul>
                                            <li><a href="news-details.html"> <i class="fal fa-comments"></i> 3
                                                    Comments </a></li>
                                            <li><a href="news-details.html"><i class="fal fa-user"></i> 20 view</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl col-lg col-md-6 col-sm-6 col-12">
                            <div class="single__news mb-30">
                                <div class="news__img">
                                    <img src="{{asset('assets/frontend/img/news/n2.png')}}" class="w-100" alt="">
                                </div>
                                <div class="news__text p-0">
                                    <div class="news__meta">
                                        <a href="blog.html" class="theme-color">Experience</a> <span>August 22th,
                                            2019</span>
                                    </div>
                                    <div class="news__link">
                                        <h4>
                                            <a href="news-details.html">Most Popular Breast Implant Surgeon </a>
                                        </h4>
                                    </div>
                                    <div class="news__view">
                                        <ul>
                                            <li><a href="news-details.html"> <i class="fal fa-comments"></i> 3
                                                    Comments </a></li>
                                            <li><a href="news-details.html"><i class="fal fa-user"></i> 20 view</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl col-lg col-md-6 col-sm-6 col-12">
                            <div class="single__news mb-30">
                                <div class="news__img">
                                    <img src="{{asset('assets/frontend/img/news/n3.png')}}" class="w-100" alt="">
                                </div>
                                <div class="news__text p-0">
                                    <div class="news__meta">
                                        <a href="blog.html" class="theme-color">Experience</a> <span>August 22th,
                                            2019</span>
                                    </div>
                                    <div class="news__link">
                                        <h4>
                                            <a href="news-details.html">Tips How to repair your car
                                                by yourselft in your gara</a>
                                        </h4>
                                    </div>
                                    <div class="news__view">
                                        <ul>
                                            <li><a href="news-details.html"> <i class="fal fa-comments"></i> 3
                                                    Comments </a></li>
                                            <li><a href="news-details.html"><i class="fal fa-user"></i> 20 view</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="subscribe__widget">
                        <div class="subscribe__widget-icon">
                            <img src="{{asset('assets/frontend/img/icon/envelope.png')}}" alt="">
                        </div>
                        <div class="subscribe__widget-text">
                            <h4>Subscribe Now</h4>
                            <div class="subscribe__widge-form">
                                <form action="#">
                                    <input type="text" placeholder="Enter email address">
                                    <button class="generic-btn border-0 btn-1">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area end -->

</main>
@endsection