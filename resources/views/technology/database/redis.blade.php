@extends('master')
@section('title', 'Redis Database Development Company')
@section('meta-keyword', 'Redis Database Development Company- Webito Infotech')
@section('meta-description','We are a trusted Redis database development company delivering beautiful back-end applications from idea to reality.')
@section('meta-url', 'https://webitoinfotech.com/redis')
@section('meta-title', 'Top Redis Database Development Company | Hire Expert Redis Programmers')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Top Redis Database Development Company | Hire Expert Redis Programmers';
    $metacontent = 'We are a trusted Redis database development company delivering beautiful back-end applications from idea to reality. Hire Redis database experts for end-to-end database solutions and services.';
    $metaname = 'Top Redis Database Development Company | Hire Expert Redis Programmers';
    $metaproperty = 'Webito Infotech - Redis Database Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/flutter2.css"> --}}

    {{-- Title-Section Start --}}

    <?php
    $title = 'Redis Database Development Company';
    $desc = 'We are a trusted Redis database development company delivering beautiful back-end applications from idea to consumer. Hire Redis developers from Webito Infotech for top quality Redis Database development services, who will take your business applications to the next level given the speed and performance of the fastest open-source database.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern6.jpg');
    $image = asset('assets/img/technologies/mobile/LoginScreen.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Redis Database Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Redis Database Development Company';
    $slide1title = 'Redis DB Development Expertise';
    $slide1desc = 'We are a leading Redis database development company having full-stack database architects to provide end-to-end Redis database development services, from the design face all the way to the implementation. Redis developers at Webito Infotech are well versed in programming languages like C, C#, C++, Clojure, Crystal, D, Dart, Elixir, Erlang, Fancy, Go, Haskell, Haxe, Java, JavaScript, Lisp, Lua, MatLab, Objective-C, OCaml, Perl, PHP, Prolog, Pure Data, Python, R, Rebol, Ruby, Rust, Scala, Scheme, Smalltalk, Tcl.';
    $slide1alt = 'Redis DB Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'To ensure quality deliverables, our QA ( Quality Analysts) perform dedicated and stringent quality checks at every level of Redis database development. Hire Redis database development services from Webito Infotech that include code review from back-end system experts to ensure that the end product is fast, functional and secure.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Powerful Redis DB Solutions';
    $slide3desc = 'The reliability and scalability advantages of Redis along with our expert Redis development services resulted in top-notch application development multiple domains like gaming, web, ad tech, mobile, IoT apps and several other applications. It is also specially adapted for supporting multiple document types and key-value store models. ';
    $slide3alt = 'Powerful Redis DB Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Redis DB Developers';
    $slide4desc = 'We at Webito Infotech offer flexible engagement models to hire Redis developers as per business needs leveraging full-fledged Redis database development services. Contact us now to hire Redis database developers in India and USA to build high performing web and mobile applications at the best rates.';
    $slide4alt = 'Hire Redis DB Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Redis Database Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Redis Application Development';
    $slide1desc = 'We are a top Redis development company with a vision to develop apps and dynamic database systems to meet your expectations.';
    
    $slide2title = 'eCommerce App Development';
    $slide2desc = 'We build real-time, simple yet powerful eCommerce apps leveraging Redis features of instant fraud detection and personalization.';
    
    $slide3title = 'IoT Application Development';
    $slide3desc = 'Hire Redis development services for developing highly functional IoT apps with a strong database for smooth and fast user experience.';
    
    $slide4title = 'Redis Support & Maintenance';
    $slide4desc = 'Our Redis support and maintenance services are focused on every aspect of your back-end applications and overall app performance.';
    
    $slide5title = 'Redis Database Migration';
    $slide5desc = 'Hire Redis developers to migrate an existing database to Redis with ZERO downtime to keep the app up and running.';
    
    $slide6title = 'Expert Redis Consultation';
    $slide6desc = 'We are a leading Redis database development company offering expert Redis consulting to quick fix existing back-end problems.';
    ?>
    @include('technology.mobile.common.what-we-offer')
    {{-- Offer-Section End --}}

    {{-- Services-Section Start --}}
    <?php
    $title = 'Looking at a wider Spectrum';
    $subtitle = 'WEBITO INFOTECH SERVICES';
    $slide1img = asset('assets/img/technologies/mobile/mobile-application-development.svg');
    $slide1alt = 'Mobile Application Development';
    $slide1title = 'Mobile Application Development';
    $slide1desc = 'Developing iOS and Android apps for smartphones and tablets with great attention to design.';
    
    $slide2img = asset('assets/img/technologies/mobile/custom-web-development.svg');
    $slide2alt = 'Custom Web Development';
    $slide2title = 'Custom Web Development';
    $slide2desc = 'Developing responsive websites with complete content control and scalability.';
    
    $slide3img = asset('assets/img/technologies/mobile/mobile-game-development.svg');
    $slide3alt = 'Mobile Games Development';
    $slide3title = 'Mobile Games Development';
    $slide3desc = 'Developing engaging 2D and 3D games on iOS and Android platforms that generate revenue.';
    
    $slide4img = asset('assets/img/technologies/mobile/digital-marketing-service.svg');
    $slide4alt = 'Digital Marketing Services';
    $slide4title = 'Digital Marketing Services';
    $slide4desc = 'Entire online marketing stack with focus on content, creative, social media and digital.';
    
    $slide5img = asset('assets/img/technologies/mobile/ui-design-creative-services.svg');
    $slide5alt = 'UI Design / Creative Services';
    $slide5title = 'UI Design / Creative Services';
    $slide5desc = 'Designing stunning user interfaces and designs that gives unique identity and experience.';
    
    $slide6img = asset('assets/img/technologies/mobile/cloud-infrastructure-management.svg');
    $slide6alt = 'Cloud Infrastructure Management';
    $slide6title = 'Cloud Infrastructure Management';
    $slide6desc = 'AWS certified cloud architects who can set up and manage entire cloud infrastructure.';
    ?>
    @include('technology.mobile.common.services')

    {{-- Services-Section End --}}

    {{-- Solution-Section Start --}}

    @include('technology.mobile.common.solution')
    {{-- Solution-Section End --}}

    {{-- Trusted-Section Start --}}

    {{-- @include('technology.mobile.common.trusted-by') --}}

    {{-- Trusted-Section End --}}

    {{-- Ourwork-Section Start --}}

    {{-- @include('technology.mobile.common.ourwork') --}}
    <?php
    $title = 'Our Work';
    $desc = 'We strive to deliver the best for every single project. Take a look at some of our work.';
    $link1 = 'https://play.google.com/store/apps/details?id=com.webitoinfotech.jkr';
    $link2 = 'https://www.goinfa.com/';
    $link3 = 'https://play.google.com/store/apps/details?id=com.webitoinfotech.viskvakarma';
    $link4 = 'https://play.google.com/store/apps/details?id=com.webitoinfotech.expenger';
    $link5 = 'http://vmjewel.com/';
    $link6 = 'http://t3developers.com/';
    $image1 = asset('assets/img/technologies/JKR.webp');
    $image2 = asset('assets/img/technologies/goinfa.webp');
    $image3 = asset('assets/img/technologies/Vishwakarma_app.webp');
    $image4 = asset('assets/img/technologies/Expenger.webp');
    $image5 = asset('assets/img/technologies/VMjewels.webp');
    $image6 = asset('assets/img/technologies/T3Developers.webp');
    $what1 = 'SERVICE | STOCK MANAGEMENT';
    $what2 = 'ECOMMERCE | HERBAL PRODUCTS';
    $what3 = 'SERVICE | REWARD GENERATOR';
    $what4 = 'SERVICE | MONEY MANAGEMENT';
    $what5 = 'SERVICE | DIAMOND TRACKING | STOCK MANAGEMENT';
    $what6 = 'ECOMMERCE | NETWORK MARKETING | MLM';
    $app1 = 'JKR';
    $app2 = 'Goinfa';
    $app3 = 'Vishvakarma';
    $app4 = 'Expenger';
    $app5 = 'VMjewels';
    $app6 = 'T3 Developers';
    $b1Span1 = 'Flutter';
    $b2Span1 = 'Android';
    $b2Span2 = 'IOS';
    $b3Span1 = 'Flutter';
    $b4Span1 = 'Flutter';
    $b5Span1 = 'Wordpress';
    $b5Span2 = 'UI / UX';
    $b6Span1 = 'Wordpress';
    ?>

    @include('services.common.ourwork')

    {{-- Ourwork-Section End --}}

    {{-- Stories-Section Start --}}

    {{-- @include('technology.mobile.common.stories') --}}

    {{-- Stories-Section End --}}

    {{-- Request-Section Start --}}

    @include('technology.mobile.common.request')

    {{-- Request-Section End --}}

@endsection
