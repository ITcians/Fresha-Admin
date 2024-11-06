@extends('frontend.layouts.app')
@section('title','Contact Us')
@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area d-flex align-items-center breadcrumb__height"
        data-background="{{asset('assts/frontend/img/bg/about/about-bg.jpg')}}" data-overlay="5">
        <div class="container container-3">
            <div class="breadcrumb__text mt-150">
                <div class="row align-items-center">
                    <div class="col-xxl-6">
                        <div class="breadcrumb__left">
                            <div class="breadcrumb__title">
                                <span>Welcome to our company</span>
                                <h2>Get In Touch</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="breadcrumb__right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><b>Faq</b></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- contact area start -->
    <div class="contact-area mt-120">
        <div class="container">
            <div class="contact-widget mb-minus-100">
                <div class="contact-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xxl-5 col-xl-5 col-lg-6">
                            <div class="contact__left" data-background="img/bg/contact-bg.png">
                                <h4>Catch Us Here</h4>
                                <p>Get a solid plan anytime & from anywhere</p>
                                <div class="contact__list-2">
                                    <ul>
                                        <li>
                                            <div class="contact__icon">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                            <div class="contact__desc">
                                                <span>Phone Number</span>
                                                <h6>098. 098.756. 76</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact__icon">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="contact__desc">
                                                <span>Email Address</span>
                                                <h6><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5bcbbb3ba95bbb0a2a2b0b7b8b4bcb9fbb6bab8">[email&#160;protected]</a></h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact__icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                            </div>
                                            <div class="contact__desc">
                                                <span>Office Address</span>
                                                <h6>12/a, New Hall Tower
                                                    New York, US</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social__icon contact-social mt-110">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-6">
                            <div class="contact__right pr-80 mt-50 mt-lg-0">
                                <h4>Make Your Request</h4>
                                <p>Get a solid plan anytime & from anywhere</p>
                                <div class="contact__form appointment__form  mt-35">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Full name" name="username"
                                                        id="username">
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Enter email" name="email"
                                                        id="email">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <div class="form-group">
                                                    <select name="subject" id="subject">
                                                        <option value="">Select Subject</option>
                                                        <option value="1">Bangla</option>
                                                        <option value="2">English</option>
                                                        <option value="3">Math</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <div class="form-group">
                                                    <textarea name="message" id="message" cols="30"
                                                        rows="10">Enter message</textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <div class="form-group">
                                                    <button class="generic-btn btn-1 border-0 w-fit-content">Submit
                                                        Request</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7299.004189173018!2d90.3721977!3d23.836298199999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375429d885f62efd%3A0x329a5997d89bb240!2sMonohardi%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1614067558109!5m2!1sen!2sbd" class="border-0" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- contact area end -->
</main>
@endsection