<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Abusufyan International Foundation - Home</title>
    <meta name="description" content="Abusufyan International Foundation  None-Profite Organization NGO ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.html">

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/xsIcon.css">
    <link rel="stylesheet" href="assets/css/isotope.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/plugins.css" />

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel='stylesheet alternate' title='color-1' type='text/css' href='assets/css/colors/color-1.css'>
    {{-- <link rel='stylesheet alternate' title='color-2' type='text/css' href='assets/css/colors/color-2.css'> --}}
    {{-- <link rel='stylesheet alternate' title='color-3' type='text/css' href='assets/css/colors/color-3.css'> --}}
    {{-- <link rel='stylesheet alternate' title='color-4' type='text/css' href='assets/css/colors/color-4.css'> --}}
    {{-- <link rel='stylesheet alternate' title='color-5' type='text/css' href='assets/css/colors/color-5.css'> --}}
    {{-- <link rel='stylesheet alternate' title='color-6' type='text/css' href='assets/css/colors/color-6.css'> --}}
    {{-- <link rel='stylesheet alternate' title='color-7' type='text/css' href='assets/css/colors/color-7.css'> --}}
</head>

<body>
    <!--[if lt IE 10]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->

    <div id="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    @yield('navbar')

    @yield('main-content')
    
        {{-- include footer here --}}
        
        @include('layouts.frontend-partials.footer')
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/spectragram.min.js')}}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script> --}}
        <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
