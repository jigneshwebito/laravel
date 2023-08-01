@extends('master')
@section('title', 'Google Cloud Solutions to build Scalable Apps')

@section('meta-description','Webito Infotech is a leading Google Cloud services providing company that offers facility to hire architects along with expert DevOps consultation..')
@section('meta-keyword', 'Google Cloud Solutions to build Scalable Apps- Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/google_cloud')
@section('meta-title','Google Cloud Services Company | Hire Google Cloud Architects India')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Google Cloud Services Company | Hire Google Cloud Architects India';
    $metacontent = 'Webito Infotech is a leading Google Cloud services providing company that offers facility to hire Google Cloud architects along with expert DevOps consultation.';
    $metaname = 'Google Cloud Services Company | Hire Google Cloud Architects India';
    $metaproperty = 'Webito Infotech - Google Cloud Services Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Google Cloud Solutions to build Scalable Apps';
    $desc = 'Hire Google Cloud developers from Webito Infotech to develop, integrate and manage highly scalable, robust applications on Google Cloud. Webito Infotech is a leading Google Cloud development company offering end-to-end Google Cloud development services from Google Cloud Platform (GCP) consultation, system integration and implementation to Google Cloud development for all businesses.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern4.jpg');
    $image = asset('assets/img/technologies/mobile/LiveCake.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Google Cloud Architects';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'WHY WE ARE RENOWNED AS A';
    $subtitle = 'Top Google Cloud Development Company';
    $slide1title = 'Google Cloud Development Expertise';
    $slide1desc = 'Our expert Google Cloud development team has in-depth experience and required proficiency in working with Java, PHP, and Python along with Google Cloud technologies like Compute Engine, App Engine, Container Engine, Cloud SQL, bIG query, etc. to deliver comprehensive Google Cloud Development Services to empower businesses to unlock new possibilities. ';
    $slide1alt = 'Google Cloud Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'Our key monitoring policies include keeping an eye on both, pre-production and production environment along with Application Monitoring Tools (APM) that covers Web, API and Infrastructure monitoring. Our team mainly focus on scaling, performance, quality of a product to give maximum user satisfaction.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Google Cloud Solutions';
    $slide3desc = 'Hire our end-to-end Google Cloud development services that include GCP consultation, strategic implementation, development, migration and management. We have years of experience in developing custom applications with GCP integration for an array of industries like Education, eCommerce, Healthcare & Fitness, Media, Transportation & Logistics, etc.';
    $slide3alt = 'Google Cloud Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Google Cloud Developers';
    $slide4desc = 'We at Webito Infotech offer flexible engagement models to hire Google Cloud developers as per business needs leveraging full fledged Google Cloud development services. Hire Google Cloud developers in India and USA to build high performing applications at the best rates. We implement best practices of Google Cloud implementation to help fulfil your strategic business objectives.';
    $slide4alt = 'Hire Google Cloud Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Trusted Google Cloud Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Google Cloud Development';
    $slide1desc = 'We adhere to state-of-the-art methodologies and industry standards to develop scalable and bespoke Google Cloud solutions.';
    
    $slide2title = 'Google Cloud IoT';
    $slide2desc = 'We provide fully managed Google Cloud integration with IoT and ML based apps with speed, security and scalability.';
    
    $slide3title = 'Google Cloud Migration';
    $slide3desc = 'We help businesses to migrate any size of data from G Suite or any other source to Google Cloud to provide digital solutions.';
    
    $slide4title = 'Google Cloud Consultation';
    $slide4desc = 'Extend the functionality of your WooCommerce store with custom plugins to create a highly customizable store.';
    
    $slide5title = 'Google Cloud Support';
    $slide5desc = 'Hire Google Cloud developers for ongoing support related to strategic solutions to enhance ROI.';
    
    $slide6title = 'Managed Services';
    $slide6desc = 'We are a leading Google Cloud development company with complete cloud solutions to build, scale, optimize and manage apps.';
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
