@extends('master')
@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Appium Automation Testing Company | Hire Appium Developers';
    $metacontent = 'Hire Appium developers from a top DevOps services company providing full Appium automation testing for Android, iOS and cross-platform mobile applications.';
    $metaname = 'Appium Automation Testing Company | Hire Appium Developers';
    $metaproperty = 'Webito Infotech - Appium Automation Testing Company';
    ?>
    <link rel="stylesheet" href="{{asset('assets/css/flutter.css')}}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'App Accessibility Automation Testing with Appium';
    $desc = 'Being a top mobile app automation testing company over the years, we deliver expert mobile test automation services leveraging Appium, a versatile open source automation framework for testing mobile apps to enhance quality. Hire Appium developers from Webito Infotech who help businesses with the best practices in Appium automation testing for Android, iOS and cross-platform mobile applications.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern1.jpg');
    $image = asset('assets/img/technologies/mobile/AaravStar.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Appium Testers';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Appium App Automation Testing Company';
    $slide1title = 'Appium Testers Expertise';
    $slide1desc = 'Hire Appium testers from Webito Infotech who develop and run robust scripts with faster execution. Our Appium developers are well versed in working with build frameworks (Maven, ANT, Gradle), Continuous Integration tools (Hudson, Jenkins), functional web testing (Selenium, TestNG) and programming languages like Objective-C, Java, PHP, C#, Python, Clojure, Ruby, JavaScript with Node.js.';
    $slide1alt = 'Appium Testers Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');

    $slide2title = 'Uncompromised Quality Checks';
    $slide2desc = 'To ensure quality deliverables, our QA ( Quality Analysts) perform dedicated and stringent quality checks at every level of the Jenkins automation testing process. Hire Jenkins testers who work coordination with web teams, iOS app development and Android app development to serve seamless mobile app testing.';
    $slide2alt = 'Uncompromised Quality Checks';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');

    $slide3title = 'Business Solutions';
    $slide3desc = 'We have years of experience in delivering end-to-end Appium automation testing services to an array of industries like Education, eCommerce, Healthcare & Fitness, Media, Transportation & Logistics, etc. We are the leaders in Appium automation testing services with proven expertise in testing tools and methodologies to offer a wide range of testing solutions. ';
    $slide3alt = 'Business Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');

    $slide4title = 'Hire Appium Developers';
    $slide4desc = 'We at Webito Infotech offer flexible engagement models to hire Appium developers as per business needs leveraging all-in-one Appium automation testing services. Hire Appium testers in India and USA to build high performing applications at the best rates. We implement best practices of Appium implementation to help fulfill your strategic business objectives.';
    $slide4alt = 'Hire Appium Developers    ';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Appium App Automation Testing Services';
    $subtitle = 'WHAT WE DO';

    $slide1title = 'Strategic Application Testing';
    $slide1desc = 'We plan an automation process that depends on the app development stage, infrastructure analysis, and understanding challenges.';

    $slide2title = 'Mobile Automation Testing';
    $slide2desc = 'Validate functionality, performance, network configuration, memory capacity, & compatibility with various platforms & devices.';

    $slide3title = 'Functional Test Automation';
    $slide3desc = 'Hire Appium testers who verify & validate functionalities for different conditions with great precision & accuracy.';

    $slide4title = 'Automated Regression Testing';
    $slide4desc = 'We provide automated regression testing for mobile applications, web services, APIs by re-running scripts to meet quality.';

    $slide5title = 'Testing Report Generation';
    $slide5desc = 'Hire Appium developers who use Extent API to generate regular and interactive automation test reports to resolve bugs at the earliest.';

    $slide6title = 'Appium Testing Consultation';
    $slide6desc = 'Hire Appium consultants who provide innovative automated testing services to quickly identify and resolve issues.';
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
