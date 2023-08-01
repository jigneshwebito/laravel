@extends('master')
@section('title', 'Expertise in Database Design & Management')

@section('meta-description','Offering expert database design and management services for startups and enterprises with mastery in MongoDB, Firebase, MySQL, Redis, DynamoDB, etc.')
@section('meta-url', 'https://webitoinfotech.com/technology/database')
@section('meta-title', 'Technologies We Use for Database Development Services')


@section('database-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Technologies We Use for Database Development Services';
    $metacontent = 'Offering expert database design and management services for startups and enterprises with mastery in MongoDB, Firebase, MySQL, Redis, DynamoDB, etc.';
    $metaname = 'Database Development Services';
    $metaproperty = 'Webito Infotech - Database Development Services';
    ?>
    <link href="{{ asset('assets/css/mobile.css') }}" rel="stylesheet">

    <?php
    $title = 'Expertise in Database Design & Management';
    $desc = 'Offering expert database design and management services for startups and enterprises to achieve their objectives in a strategic manner. Our database solutions foster data access at all times to support business operations and decision making to save time and money.';
    ?>

    @include('technology.common.title')
    <!-- title end -->

    <!-- learn more on -->
    <?php $title = 'Database technologies we excel in'; ?>

    <?php
    $link1 = '/technology/database/mysql';
    $box1icon = '//img.icons8.com/ios-filled/60/4a90e2/mysql-logo.png';
    $box1title = 'MySQL Database Development';
    $box1paragraph = 'It’s a freeware and that really helps businesses looking to handle large data at an affordable price along with integration with other databases.';
    ?>

    <?php
    $link2 = '/technology/database/dynamodb';
    $box2icon = '//img.icons8.com/material/48/4a90e2/globe-earth--v1.png';
    $box2title = 'DynamoDB Development';
    $box2paragraph = 'We build DBMS using this service for mobile, web, gaming, IoT, and other apps that need low-latency data access for faster app functionality.';
    ?>

    <?php
    $link3 = '/technology/database/postgresql';
    $box3icon = 'https://img.icons8.com/material/50/4a90e2/postgreesql.png';
    $box3title = 'PostgreSQL Database Development';
    $box3paragraph = 'Fostering enterprise mobility with scalable ERP application and PostgreSQL DBMS to centralize, store, retrieve, and interpret data with ease.';
    ?>

    <?php
    $link4 = '/technology/database/redis';
    $box4icon = asset('assets/img/technologies/mobile/redis.png');
    $box4title = 'Redis Database Development';
    $box4paragraph = 'Using Redis design a database for an app that involves significant data manipulation, analysis, and pulling it in from another source.';
    ?>

    <?php
    $link5 = '/technology/database/oracle';
    $box5icon = 'https://img.icons8.com/ios-filled/80/4a90e2/oracle-logo.png';
    $box5title = 'Oracle Database Development';
    $box5paragraph = 'Webito Infotech helps enterprises by designing RDBMS with Oracle where access to enormous data is needed with security and a variety of features.';
    ?>

    <?php
    $link6 = '/technology/database/mongodb';
    $box6icon = 'https://img.icons8.com/material-rounded/50/4a90e2/vegan-food.png';
    $box6title = 'MongoDB Development';
    $box6paragraph = 'We use it to design a DBA that speeds up document management, modification, real time processing and analysis on a large scale.';
    ?>

    @include('technology.common.learnmore')

    <!-- learn more on end-->

    <!-- how to help -->

    <?php
    $helptitle = 'How can Webito help?';
    $helpparagraph1 = 'webito helps you find the right tool for the specific purpose based on your business requirement. Our database engineers will help you implement the latest versions while forming compliant database solutions for different departments and functional units, both independently or merged as per needed.';
    $helpparagraph2 = 'Our database solutions for businesses include end-to-end services that include strategic DB plan, design, development, management, backup and restore, migration, remote DBA services and support, and Big Data solutions.';
    $helpappsimg = '';
    $icon1 = asset('assets/img/technologies/mobile/redis.png');
    $icon2 = 'https://img.icons8.com/material/50/4a90e2/postgreesql.png';
    $icon3 = '//img.icons8.com/ios-filled/60/4a90e2/mysql-logo.png';
    $icon4 = asset('assets/img/technologies/mobile/firebase.png');
    $icon5 = '//img.icons8.com/material/48/4a90e2/globe-earth--v1.png';
    $icon6 = asset('assets/img/technologies/mobile/microsoftsql.png');
    $image = asset('assets/img/technologies/T3Developers.webp');
    ?>


    @include('technology.common.howtohelp')

    <!-- how to help -->

    <!-- apps use -->

    @include('technology.common.appsuse')

    <!-- apps use end -->



    <!--***************target customer section ends****************-->
    @include('layouts.contactline')
@endsection
