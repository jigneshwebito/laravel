@extends('master')
@section('title', 'Magento eCommerce Web Development')


@section('meta-description', 'We are a top Magento eCommerce website development company in India, that provides custom eCommerce web app development services for every online business.')
@section('meta-keyword', 'Magento eCommerce Web Development - Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/magento')
@section('meta-title', 'Magento Development Company | eCommerce website Development Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Magento Development Company | eCommerce website Development Services';
    $metacontent = 'We are a top Magento eCommerce website development company in India, that provides custom eCommerce web app development services for every online business.';
    $metaname = 'Magento Development Company | eCommerce website Development Services';
    $metaproperty = 'Webito Infotech - Magento Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Magento eCommerce Web Development';
    $desc = 'Webito Infotech is a leading Magento eCommerce store development company in India, that provides eCommerce development services designed for every online business irrespective of size, value, and model to provide high customizability at low costs.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern1.jpg');
    $image = asset('assets/img/technologies/mobile/Banwery.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Magento Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Magento Web Development Company';
    $slide1title = 'Magento Web Development Expertise';
    $slide1desc = 'Leveraging Magento store development expertise, our Magento developers help you get the most of this cloud-based eCommerce platform with its next-generation technology, global partner ecosystem, and extensions marketplace to create distinct and thriving retail experiences and storefronts. Our Magento experts have helped many clients with proven eCommerce website development services to create unique online shopping experiences to enhance the brand image of diverse business verticals.';
    $slide1alt = 'Magento Web Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'We put stringent quality checks at every level of our Magento eCommerce website development process. Especially for eCommerce website or online store development, we deploy a dedicated QA team on each project that ensures bug-free, quality, and user friendly Magento online store development. We also integrate accessible source codes to address future requirements of your online store for offering you quality solutions in viable time.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical Magento Solutions';
    $slide3desc = 'Being a top Magento web development company, we help you scale your online store business in a way that you can achieve your goals. Instead of big investments into a directionless plan, our budget-focused plan, whether you’re a startup or a growing online business, takes you one step at a time towards the success. You can tweak features and functionality with our Magento web development services anytime you like.';
    $slide3alt = 'Practical Magento Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Skilled Magento Developers';
    $slide4desc = 'As a certified Magento web development company, Webito Infotech offers premium Magento eCommerce website development services that help you migrate to the Magento platform from any existing eCommerce platforms. Small and mid-sized vendors can also benefit from our highly flexible models to hire Magento developers while establishing an online eCommerce business using the Magento platform.';
    $slide4alt = 'Skilled Magento Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Top Magento eCommerce Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'CMS development';
    $slide1desc = 'We help you get control over your content for powerful marketing, SEO and catalog management to empower your Magento online store.';
    
    $slide2title = 'Magento Web Customization';
    $slide2desc = 'We deliver responsive eCommerce websites that are highly functional and flexible for future customizations as your business grows.';
    
    $slide3title = 'Theme Design & Integration';
    $slide3desc = 'Attractive eCommerce storefront design and redesign services with various themes & templates to choose for meeting custom business needs.';
    
    $slide4title = 'Magento API/Backend';
    $slide4desc = 'Effortless database-driven eCommerce with tightly integrated backend through APIs for easy Magento online store management.';
    
    $slide5title = 'Magento Plugin & Module Extension';
    $slide5desc = 'Extend the functionality of your eCommerce store as per your business requirements with custom Magento plugins & modules.';
    
    $slide6title = 'Magento Store Migration';
    $slide6desc = 'Switch your existing eCommerce store without compromising your data and security using our top Magento web development services.';
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
