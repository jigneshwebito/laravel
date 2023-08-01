@extends('master')
@section('title', 'iOS App Development for iPhone, iPad & Apple Watch')
@section('meta-keyword', 'iOS App Development for iPhone, iPad & Apple Watch - Webito Infotech')
@section('meta-description','Webito Infotech is a top iOS with Flutter Mobile app development company in India that offers services to hire iOS developers.')
@section('meta-url', 'https://webitoinfotech.com/ios')
@section('meta-title', 'iOS with Flutter App Development Company | iOS with Flutter Mobile App Design Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'iOS with Flutter App Development Company | iOS with Flutter Mobile App Design Services';
    $metacontent = 'Webito Infotech is a top iOS with Flutter Mobile app development company in India that offers services to hire iOS developers to build apps for businesses for iPad, iPhone & iWatch.';
    $metaname = 'iOS with Flutter App Development Company | iOS with Flutter Mobile App Design Services';
    $metaproperty = 'Webito Infotech - iOS with Flutter App Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css?v=<?php echo time(); ?>') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'iOS App Development for iPhone, iPad & Apple Watch';
    $desc = 'As a leading iOS Mobile Application Development Company in India, Webito Infotech offers iOS app development services tailored-made to your business needs. We bring a range of iOS app solutions to various business verticals with our result-driven iOS apps for iPhones, iPads, and Apple watches.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern3.jpg');
    $image = asset('assets/img/technologies/mobile/3.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire iOS App Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us. <br>';
    
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'WHY WE ARE RENOWNED AS A';
    $subtitle = 'Top iOS App Development Company    ';
    $slide1title = 'Unparalleled iOS Expertise';
    $slide1desc = 'We have delivered iOS projects that have rendered great ROI for our clients. As every new iOS version is a grand combination of innovation and creativity, we build iOS apps that create a niche for themselves and our prowess in developing personalized apps for all Apple devices makes us one of the most prominent iOS app development companies globally.';
    $slide1alt = 'Unparalleled iOS Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in time';
    $slide2desc = 'We put stringent quality checks at every level of our iOS app development process. Specially during development, we deploy a dedicated QA team on each project that ensures bug-free, quality iOS app development supported by pre-release system check that keeps control over your dedicated timeline.';
    $slide2alt = 'Quality Delivered in time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Bespoke iOS Solutions';
    $slide3desc = 'We help you scale your idea in a way that you can achieve your goals one milestone at a time. Instead of big investments into a directionless plan, our budget focused strategy for any idea whether you’re a startup, a business or an enterprise takes you one step at a time.';
    $slide3alt = 'Bespoke iOS Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Experienced iOS Developers for Hire';
    $slide4desc = 'Our team is well-versed with all necessary updates and trends in technologies. The experience and expertise of our iOS app developers can ensure top-notch iOS application development with various languages like Swift, Objective C, Xcode, HTML5, React and Javascript.';
    $slide4alt = 'Experienced iOS Developers for Hire';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Best iOS App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Prototyping, Wireframes & Mockups';
    $slide1desc = 'We design wireframes and present options to you. The coding cycle begins once you select from the shortlisted wireframe designs.';
    
    $slide2title = 'Quality Coding & Debugging';
    $slide2desc = 'We follow agile development for high-quality coding cycle along with professional software testing for bug-free & fast release.';
    
    $slide3title = 'AI & ML Capabilities in iOS Apps';
    $slide3desc = 'We hold experience to add intelligence to your iOS apps with integration of AI & ML technologies using Core ML framework.';
    
    $slide4title = 'Third-party API Integration';
    $slide4desc = 'We provide methods for integrating third-party APIs with our iOS development allowing other programs to access the data easily.';
    
    $slide5title = 'Cloud Development & Integration';
    $slide5desc = 'We help you connect various applications and systems along cloud integration services to allow users to easily access the data.';
    
    $slide6title = 'App Upgrade & Maintenance';
    $slide6desc = 'We offer contract to upgrade your apps along with maintenance to ensure full compatibility with the latest OS version & features.';
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
