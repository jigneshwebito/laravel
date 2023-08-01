@extends('master')
@section('title', 'ASP.NET Web Application Development')

@section('meta-description', 'Hire .NET developers from a leading ASP.NET website development company in India for complete web and eCommerce application development services.')
@section('meta-url', 'https://webitoinfotech.com/dotnet')
@section('meta-keyword','ASP.NET Web Application Development- Webito Infotech')
@section('meta-title', 'ASP.NET Development Company | Web & Software Development Services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'ASP.NET Development Company | Web & Software Development Services';
    $metacontent = 'Hire .NET developers from a leading ASP.NET website development company in India for complete web and eCommerce application development services.';
    $metaname = 'Hire PHP developers from Webito Infotech for custom PHP web app development services company with expertise in PHP frameworks like Laravel, Magento, Zend, CakePHP, etc.';
    $metaproperty = 'Webito Infotech - ASP.NET Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'ASP.NET Web Application Development';
    $desc = 'As a leading ASP.NET web application development company, Webito Infotech provides custom web and eCommerce solutions leveraging power-packed features and functionalities of ASP.NET technology. Hire ASP.NET developers for end-to-end ASP.NET web app development services with optimum quality and security intact.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern3.jpg');
    $image = asset('assets/img/technologies/mobile/3.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire ASP.NET Developers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top ASP.NET Web App Development Company';
    $slide1title = 'Expertise in ASP.NET Development ';
    $slide1desc = 'As ASP.NET is one of the most reliable server-side scripting languages in the tech domain, our quality ASP.NET web app development services let you develop highly customizable and bespoke web application solutions for your complex business operations.';
    $slide1alt = 'Expertise in ASP.NET Development ';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'Being a top ASP.NET web app development company in India, our holistic approach and proven methodology in developing customized web pages using ASP.net have offered trusted web app solutions to many clients globally. We help you unleash the power of this free, cross-platform, open-source framework to its full potential.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Enterprise ASP.NET Solutions';
    $slide3desc = 'Using our expert ASP.NET web app development services, we’ve developed many robust and customized enterprise web apps and made much of the code redundant. While increasing the scalability and viability of your project, you can develop cost-efficient solutions with the help of the various custom libraries that Asp.Net MVC technology has to offer.';
    $slide3alt = 'Enterprise ASP.NET Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Highly Skilled ASP.NET Developers';
    $slide4desc = 'Hire expert ASP.NET developers who have been building highly efficient web solutions for a very long time. They’ve tried and tested web app development practices that can assist you in leveraging all the benefits of the ASP.NET technology along with an active community of ASP.NET developers.';
    $slide4alt = 'Highly Skilled ASP.NET Developers';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our ASP.NET Web Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'ASP.NET MVC Development';
    $slide1desc = 'Creating high impact, user-centered websites and applications in different frameworks like Sharepoint and ASP.NET MVC.';
    
    $slide2title = 'Enterprise ASP.NET Web Solutions';
    $slide2desc = 'Hire ASP.NET developers who will help you develop a top-notch solution for your big enterprise in the most secure and fastest way of using ASP.NET advantage.';
    
    $slide3title = 'Robust ASP.NET CRM Apps';
    $slide3desc = 'We offer ASP.NET powered CRM app development that boots business productivity, streamline processes, and build better customer relationships.';
    
    $slide4title = 'UI/UX Design';
    $slide4desc = 'Along with innovate UI get compelling and functional UX design to transform your ideas into meaningful user stories.';
    
    $slide5title = 'Version Migration';
    $slide5desc = 'Our expertise helps you integrate ASP.NET with other Microsoft technologies without compromising on data and security.';
    
    $slide6title = 'Support & Maintenance';
    $slide6desc = 'We provide useful ASP.NET consulting based on your personalised business requirements, wherever and whenever you want it.';
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
