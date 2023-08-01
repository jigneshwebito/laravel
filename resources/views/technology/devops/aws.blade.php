@extends('master')
@section('title', 'Amazon AWS Cloud Computing & Development')

@section('meta-description', 'Webito Infotech is a leading DevOps Consultation and AWS Cloud Solutions Development Company that offers scalable cloud solutions.')
@section('meta-keyword', 'Amazon AWS Cloud Computing & Development - Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/aws')
@section('meta-title', 'AWS Cloud Application Development Services Company | AWS Solutions India')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'AWS Cloud Application Development Services Company | AWS Solutions India';
    $metacontent = 'Webito Infotech is a leading DevOps Consultation and AWS Cloud Solutions Development Company that offers scalable cloud solutions. Hire certified AWS architects!';
    $metaname = 'AWS Cloud App Development Company';
    $metaproperty = 'Webito Infotech - AWS Cloud App Development Company';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Amazon AWS Cloud Computing & Development';
    $desc = 'Webito Infotech is a leading DevOps consultation and AWS cloud solutions development company that offers affordable, reliable, flexible and scalable cloud solutions. Hire AWS developers who have years of experience to provide AWS cloud application development, system implementation, integration and consultation services surrounding AWS cloud ecosystem for enhanced business solutions.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern2.jpg');
    $image = asset('assets/img/technologies/mobile/Xsource.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire AWS Architects';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Trusted AWS Cloud Solutions Development Company';
    $slide1title = 'AWS Cloud Services Expertise';
    $slide1desc = 'Our AWS developers use cutting-edge technologies to provide innovative Amazon cloud solutions. Our expert AWS cloud solutions development team has in-depth experience and required proficiency in working with AWS tools and technologies like Amazon S3, Amazon EC2, AWS Lambda, AWS Cloud9, Amazon Glacier, Amazon SQS, Amazon RDS, Amazon CloudFront, etc. to deliver end-to-end AWS development services.';
    $slide1alt = 'AWS Cloud Services Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'Being a trusted AWS cloud solutions development company in India & USA, our key monitoring policies include keeping an eye on both, pre-production and production environment along with Application Monitoring Tools (APM) that covers Web, API and Infrastructure monitoring. Our team mainly focuses on scaling, performance, quality of a product to give maximum user satisfaction.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'AWS Cloud Solutions';
    $slide3desc = 'Hire our end-to-end AWS cloud application development services that include custom AWS migration, AWS management and AWS consultation. We have years of experience in developing bespoke web and mobile apps with AWS cloud services integration for an array of industries like Education, eCommerce, Healthcare & Fitness, Media, Transportation & Logistics, etc.';
    $slide3alt = 'AWS Cloud Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire AWS Architects';
    $slide4desc = 'We at Webito Infotech offer flexible engagement models to hire AWS developers as per business needs leveraging full fledged AWS cloud development services. Hire AWS engineers in India and USA to build high performing applications at the best rates. We implement best practices of AWS implementation to help fulfil your strategic business objectives.';
    $slide4alt = 'Hire AWS Architects';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our AWS Cloud App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'AWS Cloud Development';
    $slide1desc = 'We adhere to state-of-the-art methodologies and industry standards to develop scalable and bespoke AWS cloud solutions.';
    
    $slide2title = 'AWS IoT Development';
    $slide2desc = 'Using AWS IoT SDK, we develop IoT apps for real-time data sharing with AWS cloud via MQTT, HTTP, WebSockets protocols.';
    
    $slide3title = 'AWS Migration';
    $slide3desc = 'We help businesses to migrate any size of data to AWS cloud based server with optimum data security with no downtime.';
    
    $slide4title = 'AWS Consultation';
    $slide4desc = 'Hire AWS consultants who provide innovative AWS Cloud Solutions establishing a solid foundation for the cloud initiative.';
    
    $slide5title = 'Maintenance & Support';
    $slide5desc = 'Our AWS experts provide ongoing support to offer strategic solutions for enhanced ROI through AWS professional services.';
    
    $slide6title = 'AWS Managed Services';
    $slide6desc = 'We are a leading AWS services providers with end-to-end AWS cloud solutions to build, scale, optimize and manage cloud apps.';
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
