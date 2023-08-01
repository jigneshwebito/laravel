@extends('master')
@section('title', 'Windows Presentation Foundation (WPF) App Development')

@section('meta-description','Webito Infotech is a top Windows Presentation Foundation development company providing full range of WPF development services to build app with graphical UI.')
@section('meta-keyword', 'Windows Presentation Foundation (WPF) App Development - Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/wpf')
@section('meta-title', 'Top Windows Presentation Foundation App Development Company | Hire WPF Developers')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Top Windows Presentation Foundation App Development Company | Hire WPF Developers';
    $metacontent = 'Webito Infotech is a top Windows Presentation Foundation (WPF) development company providing full range of WPF development services to build app with graphical UI.';
    $metaname = 'Top Windows Presentation Foundation App Development Company | Hire WPF Developers';
    $metaproperty = 'Webito Infotech - Windows Presentation Foundation App Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Windows Presentation Foundation (WPF) App Development';
    $desc = 'Leverage expert skills of our Windows Presentation Foundation (WPF) developers to get cutting-edge and feature-rich Windows desktop and Windows app store software solutions. Being a top WPF application development company in India and USA, we provide custom WPF app development services to create browser-based business solutions with intuitive Graphical User Interfaces (GUI).';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern6.jpg');
    $image = asset('assets/img/technologies/mobile/T3Developers.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire WPF Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top WPF Application Development Company';
    $slide1title = 'WPF App Developers Expertise';
    $slide1desc = 'Hire expert WPF app developers from Webito Infotech, a top WPF application development company, who have years of experience to offer dynamic, robust, customized and attractive WPF solutions at affordable rates. Our expertise helps our global clientele to deploy dynamic WPF applications with absolutely zero wastage of money.';
    $slide1alt = 'WPF App Developers Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'To ensure quality deliverables, our QAs (Quality Analysts) perform dedicated and stringent quality checks at every level of WPF app development. Hire WPF developers from Webito Infotech, who also perform code review to ensure that the Windows Presentation Foundation (WPF) app we deliver is fully functional, compatible, flawless, bug-free and user-friendly.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Robust Multimedia Integration';
    $slide3desc = 'Hire dedicated WPF developers from Webito Infotech, who will deliver stunning windows applications with appealing UI by integrating UI elements like typography, 2D/3D rendering, vector graphics, pre-rendered media, fixed and adaptive documents, runtime animation, etc. all at one place.';
    $slide3alt = ' Robust Multimedia Integration';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire WPF Developers';
    $slide4desc = 'Our customer-centric approach over the years has helped us to bring forward flexible engagement models fitting various business models. Hire dedicated Windows Presentation Foundation (WPF) developers who have excelled in delivering best-in-class WPF solutions that are certified with the industry standards compatibility.';
    $slide4alt = 'Hire WPF Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our WPF Application Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Custom WPF Application Development';
    $slide1desc = 'Seamless implementation of custom made designs to deliver bespoke UI using the WPF framework of MVVP in building business apps.';
    
    $slide2title = 'WPF Enterprise App Development';
    $slide2desc = 'We develop clean, engaging, user-friendly and feature-rich enterprise applications using lightweight and fast infrastructure of WPF.';
    
    $slide3title = 'WPF UI/UX Development';
    $slide3desc = 'Our WPF developers use the WPF framework to customize every component of UI with editing existing XAML for enhanced UI/UX.';
    
    $slide4title = 'WPF Components Development';
    $slide4desc = 'To make UI engaging, we develop bespoke components of WPF application which helps in optimum quality performance.';
    
    $slide5title = 'WPF Performance Optimization';
    $slide5desc = 'We offer performance optimization service for WPF apps so to make them faster and load quickly to meet user expectations.';
    
    $slide6title = 'WPF Graphics Development';
    $slide6desc = 'We craft stunning graphics according to various business models with organized window layout to build applications.';
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
