@extends('master')
@section('title', 'Umbraco Website Development')
@section('meta-keyword', 'Umbraco Website Development - Webito Infotech')
@section('meta-description','Webito Infotech is a top Umbraco Web CMS development company in USA, delivering custom Umbraco Website development services. ')
@section('meta-url', 'https://webitoinfotech.com/umbraco')
@section('meta-title', 'Top Umbraco Development Company | Hire Umbraco Developers India')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Top Umbraco Development Company | Hire Umbraco Developers India';
    $metacontent = 'Webito Infotech is a top Umbraco Web CMS development company in USA, delivering custom Umbraco Website development services. Hire Umbraco developers at the best rates!';
    $metaname = 'Top Umbraco Development Company | Hire Umbraco Developers India';
    $metaproperty = 'Webito Infotech - Shopify Development Company ';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Umbraco Website Development';
    $desc = 'We empower businesses by delivering high performing, dynamic, powerful, secure, scalable and feature-rich Content Management System (CMS) using expert Umbraco development services. Being a leading Umbraco CMS development company in India and USA, we have been delivering end-to-end Umbraco development services to our global clients to run simple as well as complex websites & applications efficiently.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern4.jpg');
    $image = asset('assets/img/technologies/mobile/Xsource.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Umbraco Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Umbraco Development Company India';
    $slide1title = 'Umbraco Web Development Expertise';
    $slide1desc = 'Hire professional Umbraco developers from Webito Infotech, a top Umbraco website development company, at affordable rates who are well versed in working with technologies like ASP.NET, Microsoft SQL, #C, XML, .NET, etc. Our certified Umbraco developers have experience in building content management systems with customization and integration with new and existing business applications.';
    $slide1alt = 'Umbraco Web Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'To ensure quality deliverables, our QA ( Quality Analysts) perform dedicated and stringent quality checks at every level of Umbraco development services. Our Umbraco development services at Webito Infotech include code review from Umbraco experts to ensure that the end product is fully functional, compatible, flawless, and user-friendly web & mobile apps.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Powerful Umbraco Solutions';
    $slide3desc = 'We are a leading Umbraco web development company with years of experience in Umbraco website development services to provide end-to-end CMS solutions and services like efficient .NET integrations, extensive documentation, responsive web development to cater multilingual audience. We help businesses with CRM and ERP integration services too.';
    $slide3alt = 'Powerful Umbraco Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Skilled Umbraco Developers';
    $slide4desc = 'Hire dedicated Umbraco developers from a leading Umbraco website development company that offers to integrate CMS with the utmost flexibility. We at Webito Infotech offer flexible engagement models to hire dedicated Umbraco developers as per business needs leveraging full-fledged Umbraco development services.';
    $slide4alt = 'Hire Skilled Umbraco Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Umbraco Website Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Umbraco CMS Design & Development';
    $slide1desc = 'Delivering responsive Umbraco template design and feature-packed CMS development to empower clients to manage content efficiently.';
    
    $slide2title = 'Umbraco Plugin Development';
    $slide2desc = 'Hire Umbraco developers who aim to provide fully functional and secure CMS to provide futuristic web solutions with plugin development services.';
    
    $slide3title = 'Umbraco Migration';
    $slide3desc = 'Hire Umbraco developers to foster migration of PHP, ASP, ASP.NET and other CMS systems to Umbraco powered websites or CMS.';
    
    $slide4title = 'API Integration';
    $slide4desc = 'We offer powerful API integration that enables website or app to use every aspect of Umbraco CMS for superior user experience.';
    
    $slide5title = 'Umbraco Support & Maintenance';
    $slide5desc = 'Our Umbraco development ecosystem offers round the clock Umbraco support & maintenance to our esteemed clients.';
    
    $slide6title = 'Enterprise-Grade Solutions';
    $slide6desc = 'We develop highly functional, robust and scalable enterprise level CMS solutions which are bespoke to meet exact business requirements.';
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
