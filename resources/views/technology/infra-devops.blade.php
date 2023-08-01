@extends('master')
@section('title', 'DevOps Infrastructure Consultation & Management')
@section('meta-keyword','DevOps Infrastructure Consultation & Management - Webito Infotech')
@section('meta-description','With Webito Infotech DevOps Platform, all key DevOps functions & processes are seamlessly integrated, manual tasks are automated or minimised')
@section('meta-url', 'https://webitoinfotech.com/technology/devops')
@section('meta-title', 'Technologies We Use for Infra and DevOps Development Services')


@section('devops-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Technologies We Use for Infra and DevOps Development Services';
    $metacontent = 'With Webito Infotech DevOps Platform, all key DevOps functions & processes are seamlessly integrated, manual tasks are automated or minimised.';
    $metaname = 'Delivering robust cloud solutions leveraging popular platforms to efficiently build and deliver software products with full reliability.';
    $metaproperty = 'Webito Infotech - DevOps Services';
    ?>

    <link href="{{ asset('assets/css/mobile.css') }}" rel="stylesheet">

    <?php
    $title = 'DevOps Infrastructure Consultation & Management';
    $desc = 'Experienced DevOps engineers at Webito Infotech help enterprises to effectively collaborate configuration management, infrastructure automation, and analytics to scale up and speed up the growth of your business. We offer DevOps as a service that will help bridge the gaps in your ongoing software development, QA process, and other IT operations.';
    ?>

    @include('technology.common.title')
    <!-- title end -->

    <!-- learn more on -->
    <?php $title = 'Platforms we excel in'; ?>

    <?php
    $link1 = '/technology/devops/aws';
    $box1icon = 'https://img.icons8.com/windows/50/4a90e2/amazon-web-services.png';
    $box1title = 'AWS';
    $box1paragraph = 'Our engineers combine DevOps practices with AWS services, to efficiently build and deliver software products with complete reliability.';
    ?>

    <?php
    $link2 = '/technology/devops/google_cloud';
    $box2icon = 'https://img.icons8.com/ios-filled/50/4a90e2/google-cloud-platform.png';
    $box2title = 'Google Cloud';
    $box2paragraph = 'Transforming global enterprises by automating business processes via robust cloud solutions leveraging Google Cloud Platform (GCP).';
    ?>

    <?php
    $link3 = '/technology/devops/azure';
    $box3icon = 'https://img.icons8.com/color/50/4a90e2/azure-1.png';
    $box3title = 'Azure';
    $box3paragraph = 'Collaborating development process through source control, work tracking, and CI and delivery using Cloud & Azure DevOps Services.';
    ?>

    <?php
    $link4 = '/technology/devops/gradle';
    $box4icon = 'https://img.icons8.com/ios/50/4a90e2/elephant.png';
    $box4title = 'Gradle';
    $box4paragraph = 'Implementing build testing automation with Gradle for faster and better software delivery with expertise in Apache Ant and Apache Maven.';
    ?>

    <?php
    $link5 = '/technology/devops/jenkins';
    $box5icon = 'https://img.icons8.com/ios-filled/50/4a90e2/jenkins.png';
    $box5title = 'Jenkins';
    $box5paragraph = 'Our dev team has proficiency with this popular CI tool to build and test your software product continuously with no margin for error.';
    ?>

    <?php
    $link6 = '/technology/devops/selenium';
    $box6icon = 'https://img.icons8.com/ios-filled/50/4a90e2/selenium-test-automation.png';
    $box6title = 'Selenium';
    $box6paragraph = 'We automate web applications testing using any web browser via this Selenium API to ensure the highest quality product delivery.';
    ?>

    @include('technology.common.learnmore')

    <!-- learn more on end-->

    <!-- how to help -->

    <?php
    $helptitle = 'How does Webito Infotech help?';
    $helpparagraph1 = 'Your network architecture is the most crucial aspect of any infrastructure you build. It is always good to identify mistakes earlier before your end-users see them, by imposing automated quality checks and reducing defects across the entire development journey.';
    $helpparagraph2 = 'Our efficient and well planned DevOps orchestration strategy makes it possible by combining business goals, toolchains, software development process and operation teams together with automated and streamlined IT processes with expert DevOps consultation.';
    $helpappsimg = '';
    $icon1 = 'https://img.icons8.com/windows/50/4a90e2/amazon-web-services.png';
    $icon2 = 'https://img.icons8.com/ios-filled/50/4a90e2/google-cloud-platform.png';
    $icon3 = 'https://img.icons8.com/color/50/4a90e2/azure-1.png';
    $icon4 = 'https://img.icons8.com/ios/50/4a90e2/elephant.png';
    $icon5 = 'https://img.icons8.com/ios-filled/50/4a90e2/jenkins.png';
    $icon6 = 'https://img.icons8.com/ios-filled/50/4a90e2/selenium-test-automation.png';
    $image = asset('assets/img/technologies/Aaravstarexport.webp');
    ?>


    @include('technology.common.howtohelp')

    <!-- how to help -->

    <!-- apps use -->

    @include('technology.common.appsuse')

    <!-- apps use end -->



    <!--***************target customer section ends****************-->
    @include('layouts.contactline')
@endsection
