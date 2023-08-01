@extends('master')
@section('title', 'Delivering Web & Mobile Solutions using Laravel')
@section('mobile-contain')
@section('meta-description','Laravel Application Development Services Company in India - Webito Infotech')
@section('meta-url','https://webitoinfotech.com/laarvel')
@section('meta-keyword','Delivering Web & Mobile Solutions using Laravel  - Webito Infotech')
@section('meta-title','PHP Web Development Company - Webito Infotech')

    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Laravel Application Development Services Company in India - Webito Infotech';
    $metacontent = 'PHP Web Development Company';
    $metaname = 'Hire PHP developers from Webito Infotech for custom PHP web app development services company with expertise in PHP frameworks like Laravel, Magento, Zend, CakePHP, etc.';
    $metaproperty = 'Webito Infotech - PHP Web Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Delivering Web & Mobile Solutions using Laravel';
    $desc = 'Webito Infotech is a leading Laravel application development company in India, that provides foremost web apps with PHP Laravel development services. Benefit from all of Laravel web application development services and utilise the features of this structured open source PHP framework for your business site.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern5.jpg');
    $image = asset('assets/img/technologies/mobile/5.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = '7 Days Free Trial.';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'PHP Laravel Application Development Company';
    $slide1title = 'Skilful Laravel Expertise';
    $slide1desc = 'We’ve delivered web applications with expressive and elegant syntax using Laravel framework​ for a long time. Being the most popular PHP framework, we help you develop web and enterprise level Laravel applications on the platform of MVP architecture. With our expertise in the Laravel technology, you can benefit from all of its features like modular packaging, template engineering, Eloquent ORM, Database migration and unit testing.';
    $slide1alt = 'Skilful Laravel Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'We put stringent quality checks at every level of our Laravel web development process. Specially during development, we deploy a dedicated QA team on each project that ensures bug-free, quality Laravel web development. Laravel’s focus is of writing code syntax which is simple, efficient and less expensive. We boast an excellent track record of completing Laravel projects within a dedicated budget and deadline.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical Laravel solutions';
    $slide3desc = 'We help you scale your idea in a way that you can achieve your goals one milestone at a time. Instead of big investments into a directionless plan, our budget focused strategy for any customized Laravel application whether you’re a startup, a business or an enterprise takes you one step at a time. Our standardised process in a controlled environment gets you the best Laravel industry expertise.';
    $slide3alt = 'Practical Laravel solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Skilled Laravel Developers';
    $slide4desc = 'Our Laravel developers are well-versed with all necessary updates and trends in technologies. Together we ensure top-notch Laravel web application development using this incredible framework with all its benefits like easily extendable plugins, efficient testing methods, MVC controlling & clear coding to build a feature rich web application.';
    $slide4alt = 'Skilled Laravel Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Top Laravel Application Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Custom Laravel Development';
    $slide1desc = 'Creating high impact, user centered applications that are fully customizable as per your business requirements.';
    
    $slide2title = 'Mobile App Development';
    $slide2desc = 'Develop a fully functional yet useful application using the Laravel framework that supports significant backend infrastructure.';
    
    $slide3title = 'RESTful App development';
    $slide3desc = 'Delivering successful mobile apps using Restful Mobile APIs with Laravel used for backend and AngularJs for frontend.';
    
    $slide4title = 'Laravel Cloud Development';
    $slide4desc = 'Create and deploy Laravel applications for a simplified managed hosting experience.';
    
    $slide5title = 'Ecommerce Solutions';
    $slide5desc = 'Laravel e-commerce package development for professional and fast set up of online shops and complex B2B applications.';
    
    $slide6title = 'Laravel Upgradation & Extensiont';
    $slide6desc = 'Laravel extension development or upgradation from older Laravel versions to Laravel 5.5 made available as per your business requirements.';
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
