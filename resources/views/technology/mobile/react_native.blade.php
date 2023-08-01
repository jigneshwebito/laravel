@extends('master')
@section('title', 'React Native App Development Company')
@section('meta-keyword', 'React Native App Development Company - Webito Infotech')

@section('meta-description','Hire the best React Native developers from a leading React Native mobile app development services company in India having expertise.')
@section('meta-url', 'https://webitoinfotech.com/react-native')
@section('meta-title', 'React Native App Development Company | Native development Services')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'React Native App Development Company | Native development Services';
    $metacontent = 'Hire the best React Native developers from a leading React Native mobile app development services company in India having expertise in to build cross-platform mobile apps.';
    $metaname = 'React Native App Development Services';
    $metaproperty = 'Webito Infotech - React Native App Development Services';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'React Native App Development Company';
    $desc = 'We help global businesses to broaden their user base on Android and iOS platforms, by developing affordable yet fast, powerful and high performing mobile apps with native look and feel. Being a leading React Native app development company in India, Webito Infotech offers end-to-end React Native app development services with excellence in quality customer service. Hire React Native developers from Webito Infotech to have expert consultation on-the-go.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern5.jpg');
    $image = asset('assets/img/technologies/mobile/5.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire React Native Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us. <br>';
    
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top React Native App Development Company';
    $slide1title = 'React Native Expertise';
    $slide1desc = 'Hire React Native developers from Webito Infotech who are proficient in all trending React Native tools like React native Expo, VSCode, ESLint, Flow, Enzyme and Reactotron; frameworks like Snowflake, Ignite, Nativebase; and libraries such as React Navigation, MobX and Animatable. Our React Native app development services are efficient with excellent coding standards with focused effort on UI/UX.';
    $slide1alt = 'React Native Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'Being a top React Native app development company, to ensure quality deliverables, our Quality Analysts (QA) perform dedicated and stringent quality checks at every level of hybrid app development. Our QA team uses automated and manual testing techniques to check that the end product is fully functional, compatible, flawless, bug-free and user-friendly. ';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'React Native App Solutions';
    $slide3desc = 'With the code reusability feature of React Native, we build robust and scalable mobile app solutions faster. With Facebook, Skype, Instagram, Uber, Airbnb adopting React Native to accelerate the process of building apps for both platforms, we develop hybrid app solutions for diverse industries like Ecommerce, Education and E-learning, Media, Banking, Travel and more.';
    $slide3alt = 'React Native App Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire React Native Developers';
    $slide4desc = 'Our client-oriented approach helps us to know diverse business needs over the years. Hire dedicated React Native developers from Webito Infotech using our flexible engagement models and gain control over your mobile app project. Gain a competitive advantage instantly via our React Native development services, from precise consultation to quality react native app development, deployment and beyond.';
    $slide4alt = 'Hire React Native Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our React Native App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Prototyping, Wireframes & Mockups';
    $slide1desc = 'We design wireframes and present options to you. The coding cycle begins once you select from the shortlisted wireframe designs.';
    
    $slide2title = 'Custom React Native App Development';
    $slide2desc = 'From PoCs to full-fledged mobile app, we offer React Naive development services for iOS, Android and web applications.';
    
    $slide3title = 'Integration of AI & ML Capabilities';
    $slide3desc = 'We infuse power of AI and ML to React Native app development to add intelligence and simplify human to machine interactions.';
    
    $slide4title = 'Quality Assurance & App Testing';
    $slide4desc = 'Comprehensive checking/ recording is performed to ensure that coding is efficient and bug-free that meets client expectations.';
    
    $slide5title = 'Server Side APIs Integration';
    $slide5desc = 'We deliver secure, adaptable server side APIs and integrate them with apps to make them robust and dynamic.';
    
    $slide6title = 'App Maintenance & Support';
    $slide6desc = 'We provide a contract system for maintenance and support services to assure your app is compatible with the latest OS version.';
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
