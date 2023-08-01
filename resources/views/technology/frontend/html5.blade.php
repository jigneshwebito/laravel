@extends('master')
@section('title', 'HTML5 App Development for Web & Mobile')
@section('meta-keyword', 'HTML5 App Development for Web & Mobile - Webito Infotech')
@section('meta-description','Webito Infotech is a top HTML5/CSS3 development company providing awesome front-end development services by using HTML5 tools to build web and mobile apps.')
@section('meta-url', 'https://webitoinfotech.com/html5')
@section('meta-title', 'HTML5 Web and Mobile App Development Company | HTML5 Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'HTML5 Web and Mobile App Development Company | HTML5 Services';
    $metacontent = 'Webito Infotech is a top HTML5/CSS3 development company providing awesome front-end development services by using HTML5 tools to build quality web and mobile apps.';
    $metaname = 'HTML5 Web and Mobile App Development Company';
    $metaproperty = 'Webito Infotech - HTML5 Web and Mobile App Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'HTML5 App Development for Web & Mobile';
    $desc = 'Develop appealing and engaging websites with Webito Infotech leading HTML5 web development services in India & USA. Get our HTML5 language services with advantages of CSS3 and jQuery combined. Being a top HTML5 app development company, we boast years of experience to offer quality yet affordable web and mobile app development services leveraging HTML5 technology.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern2.jpg');
    $image = asset('assets/img/technologies/mobile/Banwery.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire HTML5 Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Vue.js App Development Company';
    $slide1title = 'HTML5 Development Expertise';
    $slide1desc = 'In the world of dynamic websites, we help you develop cross-platform apps and websites using the advancements of HTML5 development. You can get feature-rich websites and web portals with frontend solutions designed in HTML5 using tools and frameworks like SproutCore, Ember.JS, AngularJS, and PhoneGap. Get the perfect blend of functionality, performance, and accessibility for your website.';
    $slide1alt = 'HTML5 Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'We put stringent quality checks at every level of our HTML5 development services. Being a top HTML5 app development company, we deploy a dedicated QA team on each HTML5 web or mobile app development project that ensures bug-free, quality development supported by pre-release system check. We are also intent on leveraging the benefits of code portability and limited coding supported by HTML5.We put stringent quality checks at every level of our HTML5 development services. Being a top HTML5 app development company, we deploy a dedicated QA team on each HTML5 web or mobile app development project that ensures bug-free, quality development supported by pre-release system check. We are also intent on leveraging the benefits of code portability and limited coding supported by HTML5.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical HTML5 Solutions';
    $slide3desc = 'Leveraging our IT industry experience, we help you scale your idea in a way that you can achieve your goals with custom HTML5 powered web apps or mobile apps. Instead of big investments into a directionless plan, our budget-focused plan for any idea whether you’re a startup, a business or an enterprise takes you one step at a time. Now you can get et a highly responsive, unique and appealing website or application developed in HTML5.';
    $slide3alt = 'Practical HTML5 Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Skilled HTML5 Developers';
    $slide4desc = 'Our HTML5 app development team is well-versed with all necessary updates and trends in HTML5 technology. Our experienced HTML5 developers ensure top-notch delivery of HTML5 application development services to meet your business requirements by creating highly dynamic websites using CSS3, jQuery & Kendo. Our HTML5 development team also specializes in providing HTML5 consulting and migration services.';
    $slide4alt = 'Skilled HTML5 Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our HTML5 App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Hybrid apps with HTML5';
    $slide1desc = 'Create a multiplatform web app using HTML5 with integrated elements of native and web applications to support cross platform functionality.';
    
    $slide2title = 'jQuery & CSS3 Development';
    $slide2desc = 'Simple implementation of dynamic components and animations for your business website to make them look futuristic.';
    
    $slide3title = 'HTML5 Plugin Development';
    $slide3desc = 'Extend the functionality of your site as per your business requirements with custom HTML5 plugins and modules installation.';
    
    $slide4title = 'HTML5 Migration';
    $slide4desc = 'Switch your existing website without compromising your data and security using our HTML5 migration and consultation services.';
    
    $slide5title = 'PSD to HTML5';
    $slide5desc = 'Convert your PSD files into HTML5 web pages with attractive and appealing themes and web design.';
    
    $slide6title = 'Support and Maintenance';
    $slide6desc = 'Extended support and maintenance along with upgradation of your HTML5 website, wherever and whenever you want it.';
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
