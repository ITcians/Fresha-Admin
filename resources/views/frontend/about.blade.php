@extends('frontend.layouts.app')
@section('title','About Us')
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
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="breadcrumb__right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('about')}}"><b>About Us</b></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- about area start -->
    <div class="about-area about-area-2 about-area-new bg-white pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__photo">
                        <img src="{{asset('assets/frontend/img/about/about.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 mt-30 mt-md-0">
                    <div class="about__left">
                        <div class="generic-title">
                            <span>About Us</span>
                            <h4>We are the plastic<br>
                                surgery center.</h4>
                        </div>
                        <div class="about__info">
                            <img src="{{asset('assets/frontend/img/about/a-sm-1.png')}}" class="f-left" alt="">
                            <p>Progery reiterates the pledge to help all and give
                                hope to those who have lost hope.</p>
                        </div>
                        <div class="about__text about__text-4">
                            <p class="desc">NewLook unlike many traditional plastic surgery centers in San Diego,
                                are industry recognized experts in a wide variety of cosmetic procedure
                                and are dedicated to providing customers.</p>
                        </div>
                        <div class="about__meta mt-40">
                            <div class="about__meta--avater">
                                <img src="{{asset('assets/frontend/img/about/avater.png')}}" alt="">
                            </div>
                            <div class="about__meta--text">
                                <h5>Mixer Y. Yellow</h5>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- service area start -->
    <div class="service-area service-area-2 service-area-4 gray-bg pt-105  pb-220">
        <div class="container">
            <div class="generic-title text-center mb-45">
                <span>Services</span>
                <h4>What We Do Here</h4>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 mb-xxl-0">
                    <div class="service__box-2  text-center">
                        <div class="service__logo service__logo-2">
                            <i class="glyph-icon flaticon-aesthetic-1"></i>
                        </div>
                        <div class="service__text service__text-3">
                            <h4>Surgery Preparation</h4>
                            <p>Cosmetic surgery is a unique discipline
                                of medicine focused on enhancing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 mb-xxl-0">
                    <div class="service__box-2  text-center">
                        <div class="service__logo service__logo-2">
                            <i class="glyph-icon flaticon-belly-1"></i>
                        </div>
                        <div class="service__text service__text-3">
                            <h4>Cosmetics Surgery</h4>
                            <p>Cosmetic surgery is a unique discipline
                                of medicine focused on enhancing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 mb-xxl-0">
                    <div class="service__box-2  text-center">
                        <div class="service__logo service__logo-2">
                            <i class="glyph-icon flaticon-anatomy-3"></i>
                        </div>
                        <div class="service__text service__text-3">
                            <h4>Slim Body Plants</h4>
                            <p>Cosmetic surgery is a unique discipline
                                of medicine focused on enhancing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 mb-xxl-0">
                    <div class="service__box-2  text-center">
                        <div class="service__logo service__logo-2">
                            <i class="glyph-icon flaticon-beauty-1"></i>
                        </div>
                        <div class="service__text service__text-3">
                            <h4>Surgery Preparation</h4>
                            <p>Cosmetic surgery is a unique discipline
                                of medicine focused on enhancing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- support widget start -->
    <div class="support-widget-area">
        <div class="container">
            <div class="support-widget border-radius-10 mt-minus-100">
                <h3>Get support &amp; hire us</h3>
                <a href="price-plan.html" class="generic-btn btn-1 bg-dark-theme d-none d-lg-inline-block"
                    tabindex="0">View Details<i class="fal fa-long-arrow-right pl-10"></i></a>
            </div>
        </div>
    </div>
    <!-- support widget start -->
    <!-- journy area start -->
    <div class="journy__area mt-120 d-none d-xl-block">
        <div class="container">
            <div class="generic-title text-center mb-110">
                <span>Journy Path</span>
                <h4>Our Long Journy</h4>
            </div>
            <div class="row  g-0">
                <div class="col-xxl-10 offset-xxl-1 ">
                    <div class="journy__list d-none d-xl-block">
                        <div class="row justify-content-between">
                            <div class="col-xxl-6 col-xl-6 journy-col left-side">
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2000</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2001</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2002</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2003</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 journy-col journy-flex">
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2004</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2005</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2006</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="journy__box">
                                    <div class="journy__box-thumb">
                                        <img src="{{asset('assets/frontend/img/journy/1.jpg')}}" class="w-100" alt="">
                                    </div>
                                    <div class="journy__box-text">
                                        <h4><a href="news-details.html">Journey was started - 2007</a></h4>
                                        <p>Plastic surgery is a surgical specialty involving the
                                            restoration, reconstruction, or alteration.</p>
                                        <div class="journy__box-logo">
                                            <i class="glyph-icon flaticon-support"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="journy__plus-box">
                            <i class="fal fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- journy area end -->
    <!-- news area start -->
    <div class="news-area news-area-2 gray-bg pt-110 pb-80 mt-200">
        <div class="container">
            <div class="row mb-50 align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="generic-title">
                        <span>Price & Plans</span>
                        <h4>Surgical Estimates</h4>
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
                                <div class="news__text">
                                    <div class="news__meta">
                                        <a href="blog.html" class="theme-color">Experience</a> <span>August 22th,
                                            2019</span>
                                    </div>
                                    <div class="news__link">
                                        <h4>
                                            <a href="news-details.html">Tips How to repair your car
                                                by yourselft in</a>
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
                                <div class="news__text">
                                    <div class="news__meta">
                                        <a href="blog.html" class="theme-color">Experience</a> <span>August 22th,
                                            2019</span>
                                    </div>
                                    <div class="news__link">
                                        <h4>
                                            <a href="news-details.html">Notwithstanding, Aulus Cornelius Celsus</a>
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
                                <div class="news__text">
                                    <div class="news__meta">
                                        <a href="blog.html" class="theme-color">Experience</a> <span>August 22th,
                                            2019</span>
                                    </div>
                                    <div class="news__link">
                                        <h4>
                                            <a href="news-details.html">Surgery is a medical or dental specialty</a>
                                        </h4>
                                    </div>
                                    <div class="news__view">
                                        <ul>
                                            <li><a href="news-details.html"> <i class="fal fa-comments"></i> 3
                                                    Comments </a></li>
                                            <li><i class="fal fa-user"></i> 3 Comments</li>
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