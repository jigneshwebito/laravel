@extends('master')
@section('title', 'Portfolio - Webito Infotech')

@section('meta-description', 'Discover Webitoinfotech.com impressive portfolio of web development and digital marketing projects. Our work showcases our expertise in delivering exceptional.')
@section('meta-url', 'https://webitoinfotech.com/portfolio')
@section('meta-keyword', 'Our Work Defines US - Webito Infotech')
@section('meta-title', 'Portfolio - Webito Infotech')

@section('portfoliocontent2')
    <section class="portfolio-section">
        <div class="container portfolio-title">
            <div class="title">Our Work Defines Us</div>
            <div class="subtitle"> </div>
        </div>
    </section>
@endsection
@section('portfoliocontent')
    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightslider.css') }}" />
    <link rel="stylesheet" href="<?php echo asset('css/sass.css'); ?>">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"> --}}
    <link href="{{ asset('assets/css/slider.css') }}" rel="stylesheet">
    <!--Jquery-->
    {{-- <script type="text/javascript" src="/assets/js/JQuery3.3.1.js"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/lightslider.js') }}"></script>


    <!--slider ends------------------->


    @include('layouts.web-slider')
    @include('layouts.app-slider')

    <!--slider ends------------------->




    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
@endsection



@section('slider-contain')
    {{-- <script src="../assets/js/jquery.min.js"></script> --}}
    {{-- <script src="../assets/js/popper.js"></script> --}}
    {{-- <script src="../assets/js/bootstrap.min.js"></script> --}}
    {{-- <script src="/assets/js/owl.carousel.min.js"></script> --}}
    <script src="{{ asset('assets/js/slider.js') }}"></script>

@endsection
