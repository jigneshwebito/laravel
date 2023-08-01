@extends('master')
@section('title', 'Drupal Website Development')
@section('meta-keyword', 'Drupal Website Development - Webito Infotech')
@section('meta-description', 'Webito Infotech is a leading Drupal web development company that offers a complete range of Drupal development services for all businesses.')
@section('meta-url', 'https://webitoinfotech.com/drupal')
@section('meta-title', 'Drupal Development Company | Drupal website services India')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Drupal Development Company | Drupal website services India';
    $metacontent = 'Webito Infotech is a leading Drupal web development company that offers a complete range of Drupal development services for all businesses. Hire Drupal developers.';
    $metaname = 'Drupal Development Company | Drupal website services';
    $metaproperty = 'Webito Infotech - Drupal Development Company ';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Drupal Website Development';
    $desc = 'As a leading Drupal Website Development Company in India, Webito Infotech helps you benefit from this enterprise-ready content management framework with extensive API support leveraging a full range of Drupal web development services by expert Drupal web developers.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern5.jpg');
    $image = asset('assets/img/technologies/mobile/T3Developers.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Drupal Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Leading Drupal Web Development Company';
    $slide1title = 'Drupal Web Development Expertise';
    $slide1desc = 'With Drupal’s impeccable CMS we help you build robust Drupal websites, web applications and web portals to take your business forward & stay connected with a vast customer base. Being a top Drupal web development company, our experience in designing and developing numerous Drupal websites with the latest extensions and components makes us a renowned Drupal web development company.';
    $slide1alt = 'Drupal Web Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'We put stringent quality checks at every stage of our Drupal web development services. Especially during Drupal web development, we deploy a dedicated QA team on each project that ensures bug-free, quality Drupal development.  Our excellent track record boasts of completing Drupal projects within a dedicated budget and deadline and help you reach desired business goals.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical Drupal Web Solutions';
    $slide3desc = 'We help you scale your idea in a way that you can achieve your goals one milestone at a time. Instead of big investments into a directionless plan, our budget-focused strategy along with our standardized process in a controlled environment for any customized Drupal website, whether you’re a startup, a business or an enterprise takes you one step at a time.';
    $slide3alt = 'Practical Drupal Web Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire the Best Drupal Developers';
    $slide4desc = 'Together we ensure top-notch Drupal web application development with all its benefits like easily extendable plugins, & efficient testing methods. Using W3C validation, cross-browser compatibility, SEO semantic code & hand-coded HTML/XHTML & CSS, our Drupal developers can successfully build you a desirable platform to take your business forward.';
    $slide4alt = 'Hire the Best Drupal Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Drupal Web Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'CMS Installation';
    $slide1desc = 'We offer powerful Drupal web app development with built-in validation features of this open-source content management platform.';
    
    $slide2title = 'SEO & SEP Integration';
    $slide2desc = 'Cover online marketing requirements for Drupal website by onsite and offsite optimisation services.';
    
    $slide3title = 'Custom Modules';
    $slide3desc = 'Extend and customize Drupal functionality with custom module development using latest version of Drupal 7, 9 and X.';
    
    $slide4title = 'Drupal Migration';
    $slide4desc = 'Upgrade your older Drupal website or migrate your existing website in Drupal configuration.';
    
    $slide5title = 'Themes & Templates';
    $slide5desc = 'Crafting resourceful templates with attractive and versatile interface designs to attract customers.';
    
    $slide6title = 'PSD to Drupal';
    $slide6desc = 'Converts your PSD layout to a Drupal theme with validated W3C code without any hassle.';
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
