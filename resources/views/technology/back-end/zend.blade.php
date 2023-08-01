@extends('master')
@section('title', 'Enhancing Business Websites leveraging Zend Framework')
@section('mobile-contain')
@section('meta-description', 'Hire PHP developers from WebitoInfotech for customPHP webappdevelopment services with expertise in PHP frameworks like Laravel, Magento, Zend, CakePHP, etc.')
@section('meta-url', 'https://webitoinfotech.com/technology/backend/zend')
@section('meta-keyword', 'Enhancing Business Websites leveraging Zend Framework - Webito Infotech')
@section('meta-title', 'Zend Development Services | Zend Development Company India - Webito Infotech')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Zend Development Services | Zend Development Company India - Webito Infotech';
    $metacontent = 'Zend Development Company India';
    $metaname = 'Hire PHP developers from Webito Infotech for custom PHP web app development services company with expertise in PHP frameworks like Laravel, Magento, Zend, CakePHP, etc.';
    $metaproperty = 'Webito Infotech - Zend Development Services';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Enhancing Business Websites leveraging Zend Framework';
    $desc = 'Webito Infotech’s high quality, customized Zend framework web solutions offer you secure and scalable web applications through customized and agile Zend web development in India & USA. We provide custom web solutions & develop complex business applications using the Zend PHP framework.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern2.jpg');
    $image = asset('assets/img/technologies/mobile/4.webp');
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
    $subtitle = 'Zend Development Company in India';
    $slide1title = 'Skilful Zend Expertise';
    $slide1desc = 'As a leading Zend development company, we help you benefit from this open-source, object-oriented PHP framework to get you secure and modern web 2.0/3.0 apps with a flexible architecture. We also follow all MVC conventions that allow flexible caching and data validation supporting PHP templates and multiple database systems including MySQL, Microsoft SQL many more for rapid web development.';
    $slide1alt = 'Skilful Zend Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'We put stringent quality checks at every level of our Zend web development process. Especially during development, we deploy a dedicated QA team on each project that ensures bug-free, quality Zend web development. Our reliable and secure web services employ various APIs to offer the best possible business solution using PHP’s Zend framework.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical Solutions';
    $slide3desc = 'We help you scale your idea in a way that you can achieve your goals one milestone at a time. Instead of big investments into a directionless plan, our budget focused strategy for any customised Zend application takes you one step at a time. We use a modular approach of Zend framework to builds blocks which could be used in the future with other frameworks to build a practical, low maintenance solution.';
    $slide3alt = 'Practical Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Skilled Zend Developers';
    $slide4desc = 'Our Zend web developers are well-versed with Object Oriented Programming and the latest trends in Zend technology. Together we ensure top-notch Zend web application development with all its benefits like easily extendable plugins, simple coding,  efficient testing methods & MVC controlling to build a feature-rich web application.';
    $slide4alt = 'Skilled Zend Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Zend Web Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Zend Application Development';
    $slide1desc = 'Build a robust and manageable cloud application using visual tooling and drag and drop creation of complex backend services.';
    
    $slide2title = 'Custom Zend Development';
    $slide2desc = 'Developing high performing CMS, e-Commerce & enterprise applications with highly customizable features as per your business requirements.';
    
    $slide3title = 'Upgradation & Migration';
    $slide3desc = 'Migrate your existing website to Zend Framework or upgrade an older version to Zend Framework-2 without compromising on data & security.';
    
    $slide4title = 'CMS Development';
    $slide4desc = 'Crafting a CMS rapidly with built-in validation features that are compatible with different platforms.';
    
    $slide5title = 'Zend Support & Maintenance';
    $slide5desc = 'Providing useful Zend framework consulting and application maintenance based on your personalised business requirements.';
    
    $slide6title = 'API/Backend Development';
    $slide6desc = 'Effortless database driven Zend apps with tightly integrated backend system through APIs.';
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
