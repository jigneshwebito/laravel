@extends('master')
@section('title', 'Vue.js Application Development')

@section('meta-description','Hire Vue.js developers from a top-notch Vue.js application development services company to build single-page apps (SPAs), complex and progressive web apps.')
@section('meta-keyword', 'Vue.js Application Development - Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/vue')
@section('meta-title', 'Vue.js Apps Development Company | Vuejs Development Services')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Vue.js Apps Development Company | Vuejs Development Services';
    $metacontent = 'Hire Vue.js developers from a top-notch Vue.js application development services company to build single-page apps (SPAs), complex and progressive web apps.';
    $metaname = 'Vue.js Apps Development Company | Vuejs Development Services';
    $metaproperty = 'Webito Infotech - Vue.js Apps Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Vue.js Application Development';
    $desc = 'We are at the forefront in providing expert Vue.js app development services to build single-page apps (SPAs), complex and progressive web apps (PWAs). Hire Vue.js developers from Webito Infotech, a top Vue.js development company in India & USA, to grow your business with best-in-class Vue.js solutions with intuitive and appealing UI for web apps.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern5.jpg');
    $image = asset('assets/img/technologies/mobile/Rosy.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Vue.js Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Vue.js App Development Company';
    $slide1title = 'Vue.js App Development Expertise';
    $slide1desc = 'Hire expert Vue.js developers from Webito Infotech, a top Vue.js app development company, who have required proficiency in working with the latest Vue.js version 2.6.10, libraries (vue-test-utils, Jest), backend libraries (nuxtjs, vue-sync), UX frameworks (vue-material, bootstrap-vue) along with other tools and technologies like Vuex, Vuelm, Movue, etc. ';
    $slide1alt = 'Vue.js App Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'To ensure quality deliverables, our QA ( Quality Analysts) perform dedicated and stringent quality checks at every level of Vue.js development using automated and manual testing techniques. This is done to ensure that the Vue.js application we will develop is fully functional, compatible, flawless, bug-free and user-friendly SPA or PWA.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical Vue.js Solutions';
    $slide3desc = 'Hire full stack Vue.js developers from a trusted Vue.js web app development company to get fast, cost-effective and quality web solutions. Our Vue.js app development team has rich experience in delivering digital web solutions into various industry domains like fintech, healthcare, retail and eCommerce and more.';
    $slide3alt = ' Practical Vue.js Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Skilled Vue.js Developers';
    $slide4desc = 'We are a leading Vue.js web app development company that understands diverse business needs. Hire Vue.js full-stack development team with flexible engagement models that will meet your business needs and we guarantee to deliver cost-effective web applications using trending and robust technologies in record time.';
    $slide4alt = 'Hire Skilled Vue.js Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Top-notch Vue.js Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Vue.js Application Development';
    $slide1desc = 'Hire Vue.js developers to build feature-rich web apps from small scale to large scale to deliver powerful presence online.';
    
    $slide2title = 'Single Page App Development';
    $slide2desc = 'Vue is our preferred choice due to its supporting libraries, frameworks, and tools for building simple or complex SPAs.';
    
    $slide3title = '3rd Party Integration';
    $slide3desc = 'Vue.js developers at Webito Infotech possess skills and experience which are required in third-party integration of Vue.js.';
    
    $slide4title = 'UI Development with Vue.js';
    $slide4desc = 'We build interactive and scalable UI which will enhance your user experience and enhances business growth.';
    
    $slide5title = 'Portal Development Solutions';
    $slide5desc = 'Hire Vue.js developers who can build online portals with custom product development to meet diverse business needs.';
    
    $slide6title = 'Vue.js Migration Services';
    $slide6desc = 'We empower businesses to easily migrate from the existing framework to Vue.js t with a pragmatic approach with no risk.';
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
    $link1 = 'https://princejewellery.in/';
    $link2 = 'https://rosyimitation.com/';
    $link3 = 'http://tiifafilmcity.in/';
    $link4 = 'https://www.banweryfashion.com/';
    $link5 = 'https://www.livecake.in/';
    $link6 = 'https://xsourceinterio.com/';
    $image1 = asset('assets/img/technologies/Jewellery.webp');
    $image2 = asset('assets/img/technologies/RosyImitation.webp');
    $image3 = asset('assets/img/technologies/Tiifa.webp');
    $image4 = asset('assets/img/technologies/BanweryFashion.webp');
    $image5 = asset('assets/img/technologies/CakeFactory.webp');
    $image6 = asset('assets/img/technologies/Xsource.webp');
    $what1 = 'ECOMMERCE | JEWELLERY';
    $what2 = 'ECOMMERCE | IMITATION';
    $what3 = 'ECOMMERCE | REAL ESTATE';
    $what4 = 'ECOMMERCE | CLOTHING';
    $what5 = 'ECOMMERCE | CAKE STORE';
    $what6 = 'ECOMMERCE | WOODEN PRODUCTS';
    $app1 = 'Prince Jewellery';
    $app2 = 'Rosy Imitation';
    $app3 = 'Tiifa Film City';
    $app4 = 'Banwery';
    $app5 = 'Live Cake';
    $app6 = 'XSource';
    $b1Span1 = 'Android';
    $b1Span2 = 'iOS';
    $b1Span3 = 'PHP';
    $b2Span1 = 'NodeJs';
    $b2Span2 = 'Angular';
    $b3Span1 = 'Android';
    $b3Span2 = 'iOS';
    $b3Span3 = 'PHP';
    $b4Span1 = 'Android';
    $b4Span2 = 'iOS';
    $b4Span3 = 'Wordpress';
    $b5Span1 = 'Magento';
    $b6Span1 = 'Android';
    $b6Span1 = 'iOS';
    $b6Span1 = 'PHP';
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
