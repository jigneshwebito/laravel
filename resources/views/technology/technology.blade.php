@extends('master')
@section('title', 'Technology - Webito Infotech')
@section('meta-keyword', 'Tech Arena- Webito Infotech')
@section('meta-description', 'Webitoinfotech.com leverages cutting-edge technology to deliver innovative web developmen and app development solutions.')
@section('meta-url', 'https://webitoinfotech.com/technology')
@section('meta-title', 'Technology - Webito Infotech')

@section('technology-page-content')

    <?php
    $seotitle = ' Technologies We Use for Software Development Services';
    $metacontent = 'Webito Infotech is one of the leading IT Company in India, which is specialized in Web Design & Development, SEO & SEM Integration, ui ux design, graphics design , block chain development media buying & selling, digital marketing services India. Since 2002, our expert web and mobile dev teams help global clients to implement a wide range of business solutions.';
    $metaname = 'Technologies We Use for Software Development Services';
    $metaproperty = 'Webito Infotech - Technologies We Use For Development';
    ?>
    <link href="{{ asset('assets/css/mobile.css') }}" rel="stylesheet">
    <?php
    $title = 'Tech Arena';
    $desc = 'Solving business problems is in our DNA. And Webito has the technology expertise to make this happen. You have the idea and we have just the right resources with rich industry experience that your software development project needs.';
    ?>

    @include('technology.common.title')
    <!-- title end -->

    <!-- learn more on -->
    <?php
    $title = 'Technology spectrum we have';
    $link1 = 'technology/mobile';
    $box1icon = '//img.icons8.com/ios-glyphs/50/4a90e2/iphone.png';
    $box1title = 'Mobile';
    $box1paragraph = 'Resources with average experience of 1 years and tech expertise across the domains of native iOS, Android, cross platform, and hybrid apps.';
    $link2 = '/technology/frontend';
    $box2icon = '//img.icons8.com/ios-glyphs/50/4a90e2/monitor.png';
    $box2title = 'Front end';
    $box2paragraph = 'Delivering visually appealing, interactive, smooth, user-friendly, and high performing front ends with our 1+ years of industry experience.';
    $link3 = '/technology/backend-development';
    $box3icon = '//img.icons8.com/ios-glyphs/50/4a90e2/code.png';
    $box3title = 'Backend';
    $box3paragraph = 'Great importance to backend is essential for a successful software and our expertise in Java, NodeJS, .NET, PHP, Python, etc. help you achieve it.';
    $link4 = '/technology/database';
    $box4icon = '//img.icons8.com/ios-glyphs/50/4a90e2/accept-database.png';
    $box4title = 'Database';
    $box4paragraph = 'Our expertise in multiple database technologies helps you to find the perfect fit for your project based on the requirements and user base.';
    $link5 = '/technology/devops';
    $box5icon = '//img.icons8.com/ios-glyphs/50/4a90e2/devops.png';
    $box5title = 'Infra and DevOps';
    $box5paragraph = 'We help you transform your business with automating infrastructure, software development and deployment processes using various DevOps tools.';
    $link6 = '/technology/cms';
    $box6icon = '//img.icons8.com/ios-glyphs/50/4a90e2/dashboard.png';
    $box6title = 'CMS';
    $box6paragraph = 'Our hands-on experience with popular CMS tools helps enterprises to create and manage their digital content with greater flexibility and ease.';
    ?>
    @include('technology.common.learnmore')

    <!-- learn more on end-->

    <!-- how to help -->

    <?php
    $helptitle = 'How does Webito help?';
    $helpparagraph1 = 'Since 2020, team Webito has learnt more from the failures in developing softwares with the evolving nature of business innovations and intelligence. The global success and recognition we have today is due to our learnings from failures throughout these decades.';
    $helpparagraph2 = 'To solve your business problems and challenges with 100% integrity is our mantra. Our tech experts will guide you thoroughly about the possible solutions given our industry experience. We develop successful software solutions meant for web and mobile platforms for startups and enterprises with guaranteed delivery.';
    $helpappsimg = '';
    $icon1 = 'https://img.icons8.com/ios-filled/50/4a90e2/mac-os.png';
    $icon2 = 'https://img.icons8.com/metro/50/4a90e2/android-os.png';
    $icon3 = '//img.icons8.com/ios-glyphs/50/4a90e2/magento.png';
    $icon4 = 'https://img.icons8.com/ios-filled/50/4a90e2/flutter.png';
    $icon5 = 'https://img.icons8.com/metro/46/4a90e2/python.png';
    $icon6 = 'https://img.icons8.com/windows/55/4a90e2/nodejs.png';
    $image = asset('assets/img/technologies/CakeFactory.webp');
    ?>


    @include('technology.common.howtohelp')

    <!-- how to help -->

    <!-- apps use -->

    @include('technology.common.appsuse')

    <!-- apps use end -->



    <!--***************target customer section ends****************-->
    @include('layouts.contactline')
@endsection
