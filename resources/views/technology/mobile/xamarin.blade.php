@extends('master')
@section('title', 'Xamarin Mobile App Development')
@section('meta-keyword', 'Xamarin Mobile App Development - Webito Infotech')
@section('meta-description','Hire expert Xamarin developers in India and USA from a top Xamarin Mobile app development company to build high performing native and hybrid mobile apps.')
@section('meta-url', 'https://webitoinfotech.com/xamarin')
@section('meta-title', 'Xamarin Development Company | Xamarin App Development Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Xamarin Development Company | Xamarin App Development Services';
    $metacontent = 'Xamarin Mobile App Development Company';
    $metaname = 'Hire expert Xamarin developers in India and USA from a top Xamarin Mobile app development company to build high performing native and hybrid mobile apps.';
    $metaproperty = 'Webito Infotech - Xamarin App Development Services';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Xamarin Mobile App Development';
    $desc = 'Webito Infotech is a top Xamarin app development company that delivers cross-platform applications that integrate perfectly with the business requirement with utmost quality maintained, just like a native app. We offer the best Xamarin app development services to deliver robust, flexible, high performing & future-ready cross-platform applications using the Xamarin framework with native UI and APIs access.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern2.jpg');
    $image = asset('assets/img/technologies/mobile/2.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Xamarin App Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us. <br>';
    
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'WHY WE ARE RENOWNED AS A';
    $subtitle = 'Trusted Xamarin App Development Company';
    $slide1title = 'Xamarin App Development Expertise';
    $slide1desc = 'Hire expert Xamarin developers from Webito Infotech, a top Xamarin mobile app development company in India, who are experts in #C and .Net programming, IDE in Visual Studio, Xamarin forms, Xamarin Native, Web API 2.0, database using SQL/ MySQL. We merge business intelligence, domain knowledge, and technical proficiency to deliver affordable yet cost-effective cross-platform mobile app solutions. ';
    $slide1alt = 'Xamarin App Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'Being a premium Xamarin app development company, to ensure quality deliverables, our Quality Analysts (QA) perform dedicated and stringent quality checks at every level of Xamarin app development services. Our QA team uses automated and manual testing techniques to ensure flawless and functional cross-platform or hybrid mobile applications. ';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Xamarin App Solutions';
    $slide3desc = 'We develop custom and scalable hybrid app solutions for diverse industries like Ecommerce, Education and E-learning, Media, Banking, Travel and more using our expertise in Xamarin app development services. A competent pricing model can be set up that suits the budget of startups, large enterprises, and SMEs to develop end-to-end mobility solutions.';
    $slide3alt = 'Xamarin App Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Best Dev Team to Hire';
    $slide4desc = 'Being a top Xamarin app development company, our client-oriented approach helps us to know diverse business needs over the years. Hire Xamarin app developers in Webito Infotech using our flexible engagement models for your hybrid app development project. Avail end-to-end Xamarin app development services, from precise consultation to quality development, deployment and beyond.';
    $slide4alt = 'Best Dev Team to Hire';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Xamarin App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Prototyping, Wireframes & Mockups';
    $slide1desc = 'We design wireframes and present options to you. The coding cycle begins once you select from the shortlisted wireframe designs.';
    
    $slide2title = 'Quality Coding & Debugging';
    $slide2desc = 'We follow agile development for quality coding along with app testing on all platforms ensuring bug-free delivery.';
    
    $slide3title = 'AI & ML Integration with Xamarin';
    $slide3desc = 'We infuse power of AI and ML to Xamarin app development to add intelligence and simplify human to machine interactions.';
    
    $slide4title = 'Third-Party API Integration';
    $slide4desc = 'We provide methods for integrating third-party APIs with Xamarin apps to add functionalities as per the business requirements.';
    
    $slide5title = 'Xamarin Application Migration';
    $slide5desc = 'Our developers use Xamarin’s single code base for multiple platforms to migrate native apps to hybrid apps & vice versa.';
    
    $slide6title = 'App Maintenance & Support';
    $slide6desc = 'We provide a contract system for maintenance and support services to make Xamarin apps compatible with the latest OS versions.';
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
