@extends('master')
@section('title', 'Building Native & Cross Platform Mobile Apps')

@section('meta-description','We develop native and cross-platform mobile apps in iOS, Android, React Native, Flutter, Ionic, and Xamarin for global startups, businesses, & enterprises.')
@section('meta-url', 'https://webitoinfotech.com/technology/mobile')
@section('meta-keyword', 'Building Native & Cross Platform Mobile Apps - Webito Infotech')
@section('meta-title', 'Flutter & Cross Platform Mobile App Development Company')

@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = ' Flutter & Cross Platform Mobile App Development Company';
    $metacontent = 'We develop native and cross-platform mobile apps in iOS, Android, React Native, Flutter, Ionic, and Xamarin for global startups, businesses, & enterprises.';
    $metaname = 'Technologies We Use for  Mobile App Development';
    $metaproperty = 'Webito Infotech - Technologies We Use For Mobile App Development';
    ?>
    <link href="{{ asset('assets/css/mobile.css') }}" rel="stylesheet">
    <?php
    $title = 'Building Native & Cross Platform Mobile Apps';
    $desc = 'Webito helps to conceptualize, design, develop, and implement mobile app solutions for enterprises and startups with over 22+ years of experience.';
    ?>

    @include('technology.common.title')
    <!-- title end -->

    <!-- learn more on -->
    <?php $title = 'Mobile Technologies We Use'; ?>

    <?php
    $link1 = 'technology/mobile/ios';
    $box1icon = 'https://img.icons8.com/ios-filled/50/4a90e2/mac-os.png';
    $box1title = 'iOS Apps Development';
    $box1paragraph = 'Crafting apps for iPhone, iPad, Apple Watch, Apple TV, etc. with AI & ML integration and more, keeping users at the core.';
    ?>

    <?php
    $link2 = 'technology/mobile/android';
    $box2icon = 'https://img.icons8.com/metro/50/4a90e2/android-os.png';
    $box2title = 'Android Apps Development';
    $box2paragraph = 'Our dev team helps you craft native Android apps for Smartphones, Tablets, Android Wear, and Android TV from the scratch.';
    ?>

    <?php
    $link3 = 'technology/mobile/react-native';
    $box3icon = 'https://img.icons8.com/ios-filled/50/4a90e2/react-native.png';
    $box3title = 'React Native Apps Development';
    $box3paragraph = 'Delivering affordable yet fast, powerful, and high performing cross-platform apps with native look and feel.';
    ?>

    <?php
    $link4 = 'technology/mobile/flutter';
    $box4icon = 'https://img.icons8.com/ios-filled/50/4a90e2/flutter.png';
    $box4title = 'Flutter Apps Development';
    $box4paragraph = 'Crafting apps for iPhone, iPad, Apple Watch, Apple TV, etc. with AI & ML integration and more, keeping users at the core.';
    ?>

    <?php
    $link5 = 'technology/mobile/ionic';
    $box5icon = 'https://img.icons8.com/ios-filled/50/4a90e2/ionic.png';
    $box5title = 'Ionic Apps Development';
    $box5paragraph = 'Crafting fast and interactive hybrid applications that work perfectly on web, mobile and desktop devices using Ionic.';
    ?>

    <?php
    $link6 = 'technology/mobile/xamarin';
    $box6icon = 'https://img.icons8.com/ios-filled/50/4a90e2/xamarin.png';
    $box6title = 'Xamarin Apps Development';
    $box6paragraph = 'With the power of .NET and C#, our experts build Android, iOS, and cross-platform apps for enterprises and startups.';
    ?>

    @include('technology.common.learnmore')

    <!-- learn more on end-->

    <!-- how to help -->

    <?php
    $helptitle = 'How does Webito help?';
    $helpparagraph1 = 'Our mobile team builds mobile apps for every user, every platform, and every industry. No matter under which niche your project falls, with the help of our experienced mobile app developers, we can deliver you with robust mobile application solutions.';
    $helpparagraph2 = 'Webito holds the best resources with a rare combination of rich industry experience and unparalleled expertise to develop native Android, iOS, and Cross-platform mobile apps.';
    $helpappsimg = '';
    $icon1 = 'https://img.icons8.com/ios-filled/50/4a90e2/mac-os.png';
    $icon2 = 'https://img.icons8.com/metro/50/4a90e2/android-os.png';
    $icon3 = 'https://img.icons8.com/material-sharp/50/4a90e2/html-5.png';
    $icon4 = 'https://img.icons8.com/ios-filled/50/4a90e2/flutter.png';
    $icon5 = 'https://img.icons8.com/ios-filled/50/4a90e2/ionic.png';
    $icon6 = 'https://img.icons8.com/ios-filled/50/4a90e2/xamarin.png';
    $image = asset('assets/img/technologies/RosyImitation.webp');
    ?>


    @include('technology.common.howtohelp')

    <!-- how to help -->

    <!-- apps use -->

    @include('technology.common.appsuse')

    <!-- apps use end -->

    <!--***************target customer section ends****************-->

    @include('layouts.contactline')

@endsection
