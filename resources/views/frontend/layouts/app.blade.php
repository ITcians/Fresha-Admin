<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/twentytwenty.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">

</head>

<body>
    
    <!-- header area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>

   @include('frontend.layouts.inc.header')
    <!-- search popup -->
    <div class="search-popup">
        <div class="search-close">
            <button>
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="search-form">
            <form action="#">
                <input type="text" placeholder="Search Here">
                <button><i class="fal fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- info area start -->
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="index.html">
                <img src="{{asset('assets/frontend/img/logo/logo-white.png')}}" alt="">
            </a>
        </div>
        <div class="side-info mb-30">
            <div class="contact-list mb-30">
                <h4>Office Address</h4>
                <p>123/A, Miranda City Likaoli
                    Prikano, Dope</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <p>+0989 7876 9865 9</p>
                <p>+(090) 8765 86543 85</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <p><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2c45424a436c49544d415c4049024f4341">[email&#160;protected]</a></p>
                <p><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5d0cdd4d8c5d9d09bd8d4dcd9f5ddc0d89bd6dad8">[email&#160;protected]</a></p>
            </div>
        </div>
        <div class="instagram">
            <a href="#" target="_blank">
                <img src="{{asset('assets/frontend/img/portfolio/1.jpg')}}" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="{{asset('assets/frontend/img/portfolio/2.jpg')}}" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="{{asset('assets/frontend/img/portfolio/3.jpg')}}" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="{{asset('assets/frontend/img/portfolio/4.jpg')}}" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="{{asset('assets/frontend/img/portfolio/5.jpg')}}" alt="">
            </a>
            <a href="#" target="_blank">
                <img src="{{asset('assets/frontend/img/portfolio/1.jpg')}}" alt="">
            </a>
        </div>
        <div class="social-icon-right mt-20">
            <a href="#" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="offcanvas"></div>
    <!-- info area end -->
    <!-- responsive menu start -->
    <div class="mobile-nav">
        <div>
            <button class="mobile-nav-close text-white">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab" href="#menu-tab-1" role="tab" aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2" role="tab"  aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="responsive-logo">
            <a href="index.html"><img src="{{asset('assets/frontend/img/logo/logo-white.png')}}" alt=""></a>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel">
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0c9cec6cfe0c5d8c1cdd0ccc58ec3cfcd">[email&#160;protected]</a></p>
                        <p><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89ecf1e8e4f9e5eca7e4e8e0e5c9e1fce4a7eae6e4">[email&#160;protected]</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- responsive menu end -->
   @yield('content')


   @include('frontend.layouts.inc.footer')

    <!-- JS here -->
    <script data-cfasync="false" src="{{asset('assets/frontend/js/email-decode.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/vendor/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/one-page-nav-min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>

</html>
</html>
