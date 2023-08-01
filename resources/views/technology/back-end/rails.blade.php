@extends('master')
@section('title', 'Ruby on Rails Web Development')
@section('meta-keyword','Ruby on Rails Web Development - Webito Infotech')
@section('meta-description','A leading Ruby on Rails development company in India crafting dynamic web apps leveraging Rails framework expertise. Hire RoR developers now!')
@section('meta-url','https://webitoinfotech.com/rails')
@section('meta-title','Ruby on Rails Web Development')

@section('mobile-contain')


    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Ruby on Rails Web Development Company | RoR Development Services';
    $metacontent = 'A leading Ruby on Rails development company in India crafting dynamic web apps leveraging Rails framework expertise. Hire RoR developers now!';
    $metaname = 'Ruby on Rails Web Development Company';
    $metaproperty = 'Webito Infotech - Ruby on Rails Web Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">
    {{-- Title-Section Start --}}

    <?php
    $title = 'Ruby on Rails Web Development';
    $desc = 'We are simply the best Ruby on Rails (RoR) web development company in India for using an open-source Rails framework to develop dynamic websites & applications. Hire RoR developers from Webito Infotech to avail end-to-end Ruby on Rails web development services at affordable prices.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern1.jpg');
    $image = asset('assets/img/technologies/mobile/3.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire RoR Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top RoR Web Development Company';
    $slide1title = 'Rails Web Development Expertise';
    $slide1desc = 'We call it unmatched as RoR developers in Webito Infotech have years of experience in working with RoR framework ever since it has been launched back in 2020. Hire full stack Ruby on Rails developers (RoR programmers) who are proficient with Ajax, Web 2.0 app, MySQL, all Rails versions including the latest 6.0.0, HTML5/CSS3, XHTML, JavaScript and multiple libraries. ';
    $slide1alt = 'Rails Web Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'As we are a leading Ruby on Rails (RoR) development company, to ensure quality deliverables, our Quality Analysts (QA) perform dedicated and stringent quality checks at every level of Ruby on Rails (RoR) development life cycle. Our experienced QA team uses automated and manual testing techniques to check that the end product is fully functional, compatible, flawless, bug-free and user friendly. We also perform code audit.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'RoR Powered Web Solutions';
    $slide3desc = 'Our Ruby on Rails development team has unmatched experience in working with diverse industry verticals. This helps us to apply our creativity into suggesting, developing and deploying fast, robust, real-world and affordable website solutions. Our RoR developers also possess expertise in providing social networking, commercial, E-commerce web solutions leveraging RoR development services. ';
    $slide3alt = 'RoR Powered Web Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire RoR Developers';
    $slide4desc = 'We empower businesses to achieve and reach their full potential and goals through end-to-end RoR development services. Hire dedicated RoR developers from Webito Infotech having huge experience under the sleeves to perform flawless programming using Ruby. RoR programmers at Webito Infotech leverage benefits of Rails framework to deliver dynamic, robust and scalable websites and applications.';
    $slide4alt = 'Hire RoR Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Ruby on Rails (RoR) Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Custom RoR Web 2.0 Development';
    $slide1desc = 'Our clients receive highly interactive designs with intuitive and stunning User Interfaces (UIs) leveraging our expertise in RoR Web 2.0 development.';
    
    $slide2title = 'Custom Web Application Development';
    $slide2desc = 'Using the Rails API and its extensive package library RubyGem, our RoR development team creates scalable and powerful website applications.';
    
    $slide3title = 'Ecommerce App Development';
    $slide3desc = 'We build fast, user-friendly, dynamic online store management solutions and custom marketplaces for E-commerce businesses of any size.';
    
    $slide4title = 'Responsive Layout Design';
    $slide4desc = 'We are experts in designing top-notch responsive websites with appealing UI/UX that fits to all the devices on the web, Android and iOS platforms.';
    
    $slide5title = '3rd Party Integrations';
    $slide5desc = 'Leveraging the simplicity of Rails framework, we build websites & apps more functional with 3rd party integrations like social media, payment gateways, etc.';
    
    $slide6title = 'RoR Support & Maintenance';
    $slide6desc = 'Webito Infotech has experience in RoR development services that goes beyond the flawless coding with post-deployment maintenance and support.';
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
