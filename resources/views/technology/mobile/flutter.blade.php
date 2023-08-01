@extends('master')
@section('title', 'Flutter App Development Company')

@section('meta-description','We are a top Flutter mobile app development company providing expert Flutter development services to build high-quality Android/iOS applications.')
@section('meta-url', 'https://webitoinfotech.com/flutter')
@section('meta-keyword', 'Flutter App Developement - Webito Infotech')
@section('meta-title', 'Flutter Mobile App Development Services Company in India')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Flutter Mobile App Development Services Company in India';
    $metacontent = 'We are a top Flutter mobile app development company providing expert Flutter development services to build high-quality Android/iOS applications in the fastest time.';
    $metaname = 'Flutter Mobile App Development Company';
    $metaproperty = 'Webito Infotech - Flutter Mobile App Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Flutter App Development Company';
    $desc = 'Top-notch Flutter app development company delivering powerful, intuitive and robust Android and iOS applications in the fastest time using open source mobile SDK. Webito Infotech has a pool to hire Flutter developers who develop mobile apps with fully functional, rich & fluid user experience. Hire dedicated Flutter developers at the best rates for premium Flutter app development services for your mobile app idea.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern1.jpg');
    $image = asset('assets/img/technologies/mobile/tiifa1.png');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Flutter App Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'WHY WE ARE RENOWNED AS A';
    $subtitle = 'Leading Flutter App Development Company';
    $slide1title = 'Flutter App Development Expertise';
    $slide1desc = 'Using a single code using Google’s Flutter SDK, our developers build hybrid mobile applications using Google Fuchsia. Hire Flutter developers who can help sketch you the smartest yet quickest solution for your cross-platform development project and bring to life the expectations you aspire for them.';
    $slide1alt = 'Flutter App Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'Being a premium Flutter app development company, to ensure quality deliverables, our Quality Analysts (QA) perform dedicated and stringent quality checks at every level of hybrid app development. Our QA team uses automated and manual testing techniques to ensure flawless and functional end product.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Flutter App Solutions';
    $slide3desc = 'With the Flutter framework, it is easier for our Android/ iOS developers to bring their own creativity using APIs for 2D and other animations. Leveraging Flutter SDK, We develop hybrid app solutions for diverse industries like Ecommerce, Education and E-learning, Media, Banking, Travel and more.';
    $slide3alt = 'Flutter App Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Flutter Developers';
    $slide4desc = 'Our client-oriented approach helps us to know diverse business needs over the years. Hire dedicated Flutter developers from Webito Infotech using our flexible engagement models and gain control over your cross-platform mobile app development project. Gain a competitive advantage instantly via our Flutter app development services, from precise consultation to quality development, deployment and beyond. ';
    $slide4alt = 'Hire Flutter Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Quality Flutter App Development Services';
    $subtitle = 'WHAT WE OFFER';
    
    $slide1title = 'Custom Flutter App Development';
    $slide1desc = 'From PoCs to full-fledged enterprise-grade app, we offer Flutter app development services for iOS, Android applications.';
    
    $slide2title = 'UI/UX Design for Flutter Apps';
    $slide2desc = 'With Cupertino (iOS) and Material Design (Android), we build responsive Android/ iOS apps with expressive UI and fast loading.';
    
    $slide3title = 'AI & ML Integration to Flutter Apps';
    $slide3desc = 'We infuse power of AI and ML to Flutter development to add intelligence to apps for simplifying human to machine interactions.';
    
    $slide4title = 'Third-Party APIs Integration';
    $slide4desc = 'We develop and integrate server-side APIs for cross-platform mobile applications as per custom business requirements.';
    
    $slide5title = 'Application Testing & Debugging';
    $slide5desc = 'Comprehensive check & record is performed regularly to ensure that coding is efficient and bug-free that meets client expectations.';
    
    $slide6title = 'App Maintenance & Support';
    $slide6desc = 'We provide contract system and support services to make Flutter apps up and running at all times with full responsiveness.';
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
