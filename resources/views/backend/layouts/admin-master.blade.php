<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/uploads/site_favicon/' . get_setting('site_favicon')) }}">

    <!-- jsvectormap css -->
    <link href="{{asset('assets/backend/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!--Swiper slider css-->
    <link href="{{asset('assets/backend/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="{{asset('assets/backend/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/backend/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/backend/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />




    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />







    @stack('styles')


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('backend.layouts.inc.header')
        <!-- ========== App Menu ========== -->
        @include('backend.layouts.inc.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
       @yield('content')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    {{-- <script src="{{asset('assets/backend/js/pages/calendar.init.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/backend/js/plugins.js')}}"></script> --}}







    {{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script> --}}

     {{-- <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script> --}}


<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>

<!-- Include the Timeline Plugin -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar-timeline@5.10.1/main.global.min.js'></script>






    <!-- apexcharts -->
    <script src="{{asset('assets/backend/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('assets/backend/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset('assets/backend/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset('assets/backend/js/pages/dashboard-ecommerce.init.js')}}"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>

    <script src="https://themesbrand.com/velzon/html/default/assets/libs/flatpickr/flatpickr.min.js"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
    {{-- <script src="https://themesbrand.com/velzon/html/default/assets/libs/fullcalendar/index.global.min.js"></script> --}}
    <!-- App js -->
    <script src="https://themesbrand.com/velzon/html/default/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="{{asset('assets/backend/libs/simonwep/pickr/pickr.min.js')}}"></script>

    <!-- init js -->
    {{-- <script src="{{asset('assets/backend/js/app.js')}}"></script> --}}
    <script src="{{asset('assets/backend/js/pages/form-pickers.init.js')}}"></script>
    

    @include('sweetalert::alert')
    @stack('scripts')

</body>
</html>