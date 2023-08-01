@extends('master')
@section('title', 'Expertise in CMS Frameworks')

@section('meta-keyword','Expertise in CMS Frameworks - Webito Infotech')
@section('meta-description','With Webito Infotech DevOps Platform, all key DevOps functions & processes are seamlessly integrated, manual tasks are automated or minimised.')
@section('meta-url', 'https://webitoinfotech.com/technology/cms')
@section('meta-title', 'Technologies We Use for Infra and DevOps Development Services')


@section('cms-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Technologies We Use for Infra and DevOps Development Services';
    $metacontent = 'With Webito Infotech DevOps Platform, all key DevOps functions & processes are seamlessly integrated, manual tasks are automated or minimised.';
    $metaname = 'Delivering robust cloud solutions leveraging popular platforms to efficiently build and deliver software products with full reliability.';
    $metaproperty = 'Webito Infotech - DevOps Services';
    ?>

    <link href="{{ asset('assets/css/mobile.css') }}" rel="stylesheet">

    <?php
    $title = 'Expertise in CMS Frameworks';
    $desc = 'Webito Infotech has experience in developing dynamic and scalable web CMS for large scale apps since 2020 for global businesses. Our CMS experts build and implement user profiles, custom modules, themes and campaigns ensuring smooth functioning with automation, collaboration, tools integration, and workflow processes.';
    ?>

    @include('technology.common.title')
    <!-- title end -->

    <!-- learn more on -->
    <?php $title = 'Best Ecommerce platforms we use'; ?>

    <?php
    $link1 = '/technology/cms/magento';
    $box1icon = 'https://img.icons8.com/ios-filled/50/4a90e2/magento.png';
    $box1title = 'Magento Development';
    $box1paragraph = 'Delivering complete control to content and functionality of your large scale Ecommerce business with marketing, SEO, Catalog management tools.';
    ?>

    <?php
    $link2 = '/technology/cms/wordpress';
    $box2icon = 'https://img.icons8.com/windows/50/4a90e2/wordpress.png';
    $box2title = 'WordPress Development';
    $box2paragraph = 'Its simplicity, flexibility, and various plugins offer a platform to build everything from simple websites like a blog site to complex enterprise web apps.';
    ?>

    <?php
    $link3 = '/technology/cms/shopify';
    $box3icon = 'https://img.icons8.com/ios-filled/50/4a90e2/shopify.png';
    $box3title = 'Shopify Development';
    $box3paragraph = 'Shopify experts help you to build your desired online store with features that empower you to manage your inventory, marketing, and transactions.';
    ?>

    <?php
    $link4 = '/technology/cms/umbraco';
    $box4icon = 'https://img.icons8.com/windows/50/4a90e2/umbraco.png';
    $box4title = 'Umbraco Development';
    $box4paragraph = 'With expertise in .NET, MySQL, #C, XML, etc., our Umbraco coders build powerful, secure, scalable, and feature-rich Content Management Systems.';
    ?>

    <?php
    $link5 = '/technology/cms/drupal';
    $box5icon = 'https://img.icons8.com/ios-filled/50/4a90e2/drupal.png';
    $box5title = 'Drupal Development';
    $box5paragraph = 'Webito Infotech helps you benefit from this enterprise-ready content management framework with extensive API support to incorporate the latest features.';
    ?>

    <?php
    $link6 = '/technology/cms/joomla';
    $box6icon = 'https://img.icons8.com/ios-filled/50/4a90e2/joomla.png';
    $box6title = 'Joomla Development';
    $box6paragraph = 'Get connected to your large customer base efficiently with CMS solutions built with Joomla for user friendly features and modern extensions.';
    ?>

    @include('technology.common.learnmore')

    <!-- learn more on end-->

    <!-- how to help -->

    <?php
    $helptitle = 'How does Webito Infotech help?';
    $helpparagraph1 = 'Webito Infotech is an award winning CMS development company in India helping startups, enterprises and all other global businesses with bespoke CMS solutions based on their project needs.';
    $helpparagraph2 = 'Our wide spectrum of technology expertise and decades of industry experience will save your precious time in finding a perfect CMS solution. Whether you want a custom CMS website or a website migration, you are just in the right place for all your queries.';
    $helpappsimg = '';
    $icon1 = 'https://img.icons8.com/ios-filled/50/4a90e2/magento.png';
    $icon2 = 'https://img.icons8.com/windows/50/4a90e2/wordpress.png';
    $icon3 = 'https://img.icons8.com/ios-filled/50/4a90e2/shopify.png';
    $icon4 = 'https://img.icons8.com/windows/50/4a90e2/umbraco.png';
    $icon5 = 'https://img.icons8.com/ios-filled/50/4a90e2/drupal.png';
    $icon6 = 'https://img.icons8.com/ios-filled/50/4a90e2/joomla.png';
    $image = asset('assets/img/technologies/Jewellery.webp');
    ?>


    @include('technology.common.howtohelp')

    <!-- how to help -->

    <!-- apps use -->

    @include('technology.common.appsuse')

    <!-- apps use end -->



    <!--***************target customer section ends****************-->
    @include('layouts.contactline')
@endsection
