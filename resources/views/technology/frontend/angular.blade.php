@extends('master')
@section('title', 'AngularJS Application Development')
@section('meta-keyword', 'AngularJS Application Development- Webito Infotech')
@section('meta-description', 'Hire AngularJS developers from Webito Infotech, a top AngulaJS application development services company that builds scalable front-end web & mobile apps.')
@section('meta-url', 'https://webitoinfotech.com/angular')
@section('meta-title', 'AngularJS Development Company | AngularJS Web Development Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'AngularJS Development Company | AngularJS Web Development Services';
    $metacontent = 'Hire AngularJS developers from Webito Infotech, a top AngulaJS application development services company that builds scalable front-end web & mobile apps with 100% satisfaction.';
    $metaname = 'AngularJS Application Development Company';
    $metaproperty = 'Webito Infotech - AngularJS Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/flutter2.css"> --}}

    {{-- Title-Section Start --}}

    <?php
    $title = 'AngularJS Application Development';
    $desc = 'A leading AngularJS app development company that helps businesses to leverage the power of JavaScript-based AngularJS framework through expert and end-to-end AngularJS development services. Hire AngularJS developers from Webito Infotech to gain benefits like high extensibility, readability, and expressiveness of AngularJS framework to build custom web and mobile apps.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern1.jpg');
    $image = asset('assets/img/technologies/mobile/AaravStar.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire AngularJS Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top AngularJS App Development Company';
    $slide1title = 'AngularJS Development Expertise';
    $slide1desc = 'Being a top AngularJS development company, we strive to offer complete web and mobile app solutions within this modern framework of Javascript, ranging from eCommerce to interactive social apps or enterprise solutions. Having  worked on over 200+ web and mobile app development projects using the AngularJS framework, we help you benefit from this highly reliable and flexible  platform to cater to all your personalised needs.';
    $slide1alt = 'AngularJS Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'To continue our trusted AngularJS development services as we have over the years, we put stringent quality checks at every level of our web or mobile app development projects. Especially during the development, we deploy a dedicated QA team on each project that ensures bug-free, quality development supported by pre-release system check that keeps control over your dedicated timeline.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Strategic AngularJS Solutions';
    $slide3desc = 'We help you scale your idea in a way that you can achieve your goals one milestone at a time. Instead of big investments into a directionless plan, our end-to-end AngularJS app development services also include a budget-focused plan for any idea whether you’re a startup, a business or an enterprise takes you one step at a time.';
    $slide3alt = 'Strategic AngularJS Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Expert AngularJS Developers';
    $slide4desc = 'Our AngularJS development team is well-versed with all necessary updates and trends in technologies. Together we  ensure top-notch web application development to meet your business requirements when you get a customised solution with our AngularJS experts.';
    $slide4alt = 'Expert AngularJS Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our AngularJS Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Custom AngularJS Development';
    $slide1desc = 'Creating high impact, user-centered applications in different open source development frameworks like Ionic, React, Mean Stack, Protractor & Radian.';
    
    $slide2title = 'Hybrid AngularJS Apps';
    $slide2desc = 'Create a multiplatform app for your innovative ideas with integrated elements of AngularJS native and web applications.';
    
    $slide3title = 'API/ Backend Development';
    $slide3desc = 'Effortless database-driven Angular apps with tightly integrated backend systems through APIs.';
    
    $slide4title = 'UI/UX Design';
    $slide4desc = 'Along with innovative UI, get compelling and functional UX design to transform your business ideas into meaningful user stories.';
    
    $slide5title = 'AngularJS Version Migration';
    $slide5desc = 'Our expertise helps you easily upgrade your current AngularJS application to an advanced version to make sure the app is running flawlessly.';
    
    $slide6title = 'Hire AngularJS Developers';
    $slide6desc = 'We provide useful AngularJS consulting based on your personalised business requirements, wherever and whenever you want it.';
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
