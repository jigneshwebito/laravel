@extends('master')
@section('title', 'Java Web Application Development')

@section('meta-description','Hire Java experts from a top Java software app development company in India with J2EE, J2ME frameworks expertise to build scalable web, mobile apps.')
@section('meta-keyword','Java Web Application Development - Webito Infotech')

@section('meta-url', 'https://webitoinfotech.com/java')
@section('meta-title', 'Java Development Company | Web Applications & Software Services')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Java Development Company | Web Applications & Software Services';
    $metacontent = 'Hire Java experts from a top Java software app development company in India with J2EE, J2ME frameworks expertise to build scalable web, mobile apps.';
    $metaname = 'Java Development Company | Web Applications & Software Services';
    $metaproperty = 'Webito Infotech - Java Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Java Web Application Development';
    $desc = 'Webito Infotech is a top Java Web Application Development Company in India & USA, providing wide-ranging Java Web & Application Development Services. As a top Java software development company, we offer bespoke Java solutions using technological advancements in J2EE and J2ME frameworks.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern4.jpg');
    $image = asset('assets/img/technologies/mobile/4.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Java Programmers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Java Web App Development Company';
    $slide1title = 'Expertise in Java Development';
    $slide1desc = 'As Java is one of the most reliable server-side scripting languages in the tech domain, our quality Java development services let you develop highly customizable and secure Java web applications for your complex business operations. Being a leading Java software development company, our experience with working in all major Java frameworks like Spring, JBoss, Hibernate Apache Tomcat has helped clients across the globe in meeting their business goals.';
    $slide1alt = 'Expertise in Java Development';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'Webito Infotech is a leading Java web app development company where our holistic approach and proven methodology in developing customized applications, enterprise-grade solutions and software using Java and J2EE technology has delivered remarkable solutions to our valuable clients. We put stringent quality checks at every level of our process. Especially during Java software development, we deploy a dedicated QA team on each project that ensures bug-free, quality Java development services.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Practical Java Solutions';
    $slide3desc = 'We’ve developed many robust and customized web apps using Java Framework that increase scalability and viability making developing practices cost-efficient. Using our Java software appl development experience, we also help you scale your idea in a way that you can achieve your goals. Instead of big investments into a directionless plan, our budget-focused plan for any idea whether you’re a startup or an enterprise takes you one step at a time.';
    $slide3alt = 'Practical Java Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Java Developers';
    $slide4desc = 'Our expert Java developers have been building highly efficient Java solutions for a very long time. They are well versed with all necessary updates and trends in technologies to ensure delivery of top-notch Java application development services in various verticals of Java and J2EE. They are adept and their experience in successfully building desirable Java platforms will take your business to the next level.';
    $slide4alt = 'Hire Java Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Java Web App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Custom Java Development';
    $slide1desc = 'Advanced Java/J2EE programming services deployed for collaborative and integrated customization of Java applications.';
    
    $slide2title = 'Java Web Development';
    $slide2desc = 'Build futuristic websites for several industry verticals like healthcare, automobile, finance, retail and many more.';
    
    $slide3title = 'Java Software Development';
    $slide3desc = 'Impeccable software solutions to automate tedious workflow processes and management related tasks.';
    
    $slide4title = 'Java CMS Development';
    $slide4desc = 'Powerful Java CMS for content creators and developers to create multi channel websites for various business.';
    
    $slide5title = 'Spring MVC Development';
    $slide5desc = 'Model-View-Controller architecture and ready components that can be used to develop flexible and loosely coupled web applications.';
    
    $slide6title = 'Java Migration Services';
    $slide6desc = 'Switch your existing web application to Java framework without compromising on data and security.';
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
