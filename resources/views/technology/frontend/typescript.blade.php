@extends('master')
@section('title', 'TypeScript Development Company')

@section('meta-description', 'Hire TypeScript developers from a top TypeScript development services company to build high-quality web applications with flawless coding for all businesses.')
@section('meta-keyword', 'TypeScript Development Company - Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/typescript')
@section('meta-title', 'TypeScript Development Services Company | Hire TypeScript Developers')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'TypeScript Development Services Company | Hire TypeScript Developers';
    $metacontent = 'Hire TypeScript developers from a top TypeScript development services company to build high-quality web applications with flawless coding for all businesses.';
    $metaname = 'TypeScript Development Services Company | Hire TypeScript Developers';
    $metaproperty = 'Webito Infotech - TypeScript Development Services Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'TypeScript Development Company';
    $desc = 'We are early adopters of Microsoft TypeScript (TS) to use with a range of JS based frameworks to implement flawless coding environments. This results in faster and quality delivery of websites and applications. Being a leading web development company, Webito Infotech has expert TypeScript developers to hire who explore, innovate and master the latest technologies to develop and deliver large scale applications.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern4.jpg');
    $image = asset('assets/img/technologies/mobile/LoginScreen.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Typescript Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Trusted TypeScript Development Company';
    $slide1title = 'TypeScript Development Expertise';
    $slide1desc = 'Hire expert TypeScript (TS) developers from Webito Infotech, a top TypeScript development company, who have proficiency in JavaScript and all the basics of TypeScript to run using different JS-based frameworks like AngularJS, ReactJS, Vue.js, Visual Studio, Node.js, MSBuild. They are experts in debugging errors and implement interfaces along with full-fledged development services.';
    $slide1alt = 'TypeScript Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'Being a leading TypeScript (TS) development company, to ensure quality deliverables, our QAs (Quality Analysts) perform dedicated and stringent quality checks at every level of the TypeScript development process using automated and manual testing techniques. Our TS experts also perform code review to ensure that the end product is fully functional, compatible, flawless, bug-free and user-friendly web & mobile applications.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'TS based Industry Solutions';
    $slide3desc = 'The benefit of implementing TypeScript in the development cycle is to bridge important gaps in JavaScript. This helps us in doing custom programming using powerful JS-based frameworks with error-free coding. Our diverse industry solutions include various domains like retail, healthcare, real estate, entertainment, banking, etc.';
    $slide3alt = ' TS based Industry Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire TypeScript Developers';
    $slide4desc = 'Hire dedicated TypeScript developers from a leading Web development company that offers the best TypeScript development services for years. We at Webito Infotech, a leasing TypeScript development company, offer flexible engagement models to hire dedicated TypeScript developers as per business needs leveraging end-to-end TypeScript development services.';
    $slide4alt = 'Hire TypeScript Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our TypeScript Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Enterprise App Development';
    $slide1desc = 'Hire our TypeScript developers to build flawless, robust, scalable and interactive enterprise-grade apps with stunning UI.';
    
    $slide2title = 'Web App Development';
    $slide2desc = 'We have mastered using TS scripting language to make it work with various JS based frameworks to build web apps.';
    
    $slide3title = 'TypeScript App Development';
    $slide3desc = 'Get intuitive apps across various domains including Retail, Insurance, Banking, Healthcare, Entertainment, Education, etc.';
    
    $slide4title = 'TypeScript Consultation';
    $slide4desc = 'Get expert consultation on implementing TypeScript in your existing or new web or mobile application projects.';
    
    $slide5title = 'Maintenance & Support';
    $slide5desc = 'Using TS as a scripting language, we do version upgrades and provide maintenance services to the app updated at all times.';
    
    $slide6title = 'JS to TS Migration';
    $slide6desc = 'We empower businesses to easily migrate from the existing JavaScript to TypeScript with a pragmatic approach with no risk.';
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
