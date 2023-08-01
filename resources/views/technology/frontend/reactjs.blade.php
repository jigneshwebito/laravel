@extends('master')
@section('title', 'ReactJS Web Application Development')

@section('meta-keyword', 'ReactJS Web Application Development - Webito Infotech')
@section('meta-description','Hire ReactJS developers from Webito Infotech, a top ReactJS development company offering full fledged ReactJS services to build affordable web & mobile apps.')
@section('meta-url', 'https://webitoinfotech.com/reactjs')
@section('meta-title', 'ReactJS Web App Development Services Company | ReactJS Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'ReactJS Web App Development Services Company | ReactJS Services';
    $metacontent = 'Hire ReactJS developers from Webito Infotech, a top ReactJS development company offering full fledged ReactJS services to build affordable web & mobile apps.';
    $metaname = 'ReactJS Web App Development Services Company | ReactJS Services';
    $metaproperty = 'Webito Infotech - ReactJS Web App Development Services Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'ReactJS Web Application Development';
    $desc = 'Webito Infotech is a top ReactJS web app development company, crafting stunning and compostable web user Interfaces (UI) for enterprise-grade apps and consumer-facing projects with optimum security. Hire dedicated ReactJS developers from Webito Infotech, whose technology expertise includes all the versions of ReactJS, from 0.3.0 to 16.6.3 as our mainstream front-end technology.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern3.jpg');
    $image = asset('assets/img/technologies/mobile/LiveCake.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire ReactJS Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top ReactJS Development Company';
    $slide1title = 'ReactJS Development Expertise';
    $slide1desc = 'Hire the best ReactJS developers from Webito Infotech, a leading ReactJS development company, who are proficient in JavaScript, CSS, HTML, JSX, JavaScript fundamentals, ES6, Babel, Webpack, Redux, etc. Our proficiency and experience with ReactJS framework is our strength to develop and deploy production-ready React JS applications with minimum possible bundle sizes.';
    $slide1alt = 'ReactJS Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'To ensure quality deliverables, our QA ( Quality Analysts) perform dedicated and stringent quality checks at every level of ReactJS development services eco-system, by using automated and manual testing techniques. This is done to ensure that the every ReactJS web application that we develop is fully functional, compatible, flawless, bug-free and user-friendly.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = ' Practical ReactJS Solutions';
    $slide3desc = 'Our ReactJS development team has unmatched experience in working with diverse industry verticals like healthcare, retail, finance, automotive, media, etc. This helps us to apply our creativity into suggesting, developing and deploying robust, real-world and affordable applications for small, medium and large scale businesses globally';
    $slide3alt = ' Practical ReactJS Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Dedicated ReactJS Developers';
    $slide4desc = 'Hire dedicated ReactJS developers at affordable prices from Webito Infotech who possess top-of-the-line expertise in ReactJS development services. Being a leading ReactJS development company with a client centric approach, Webito Infotech offers flexible engagement models to hire dedicated ReactJS developers as per business needs.';
    $slide4alt = 'Hire Dedicated ReactJS Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our ReactJS App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Custom ReactJS Development';
    $slide1desc = 'Our ReactJS programmers develop dynamic, robust, secure software solutions and applications for complex business scenarios.';
    
    $slide2title = 'ReactJS UI/UX Development';
    $slide2desc = 'Hire best ReactJS coders from us to avail full-fledged ReactJS development services to build your next gen app with captivating & intuitive UI/UX.';
    
    $slide3title = 'ReactJS Front-End Development';
    $slide3desc = 'ReactJS team at Webito Infotech has years of experience in solving challenges like SPAs, various frameworks and multiple complex architectures.';
    
    $slide4title = 'ReactJS Native App Development';
    $slide4desc = 'We also build fast, affordable and robust native mobile apps using React Native app development services leveraging React Native framework.';
    
    $slide5title = 'ReactJS Migration & Integration';
    $slide5desc = 'Our ReactJS programmers can migrate/ integrate your existing web applications to the ReactJS framework without any loss of data with security.';
    
    $slide6title = 'ReactJS Plugin Development & APIs';
    $slide6desc = 'We empower clients with highly functional ReactJS based plugins development & work on API-driven ReactJS projects to explore 3rd party solutions.';
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
