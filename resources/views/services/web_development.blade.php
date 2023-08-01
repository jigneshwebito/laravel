@extends('master')
@section('title', 'Web Development Company')
@section('meta-keyword','Web Development Company - Webito Infotech')
@section('meta-description','It’s our mission to not only build high-quality websites for our clients, but to create an incredible experience in all that we do.')
@section('meta-url', 'https://webitoinfotech.com/services/web-development')
@section('meta-title', 'Best Website Development Company | Website Designing Company')

@section('web-devolopment-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Best Website Development Company | Website Designing Company';
    $metacontent = 'It’s our mission to not only build high-quality websites for our clients, but to create an incredible experience in all that we do.';
    $metaname = 'Website development Company, Website Designing Services';
    $metaproperty = 'Webito Infotech - Website Development Company';
    ?>
    <link href="{{ asset('assets/css/design.css') }}" rel="stylesheet">
    <?php
    $title = 'Web Development Company';
    $desc = 'Webito is a top website design and web development company in India & USA delivering the best web
                                                                        development services to craft bespoke websites, web applications, web-tools, etc. to global businesses and startups
                                                                        with 100% project delivery.';
    ?>

    @include('services.common.title')

    <!-- introduction end -->



    <!-- Enterprise Solutions start -->

    <div class="color">

        <?php
        $id_pass = 'enterprise-solutions';
        $box1title = 'Enterprise Solutions';
        $desc1 = 'Webito is a top enterprise web development company having specialized in creating multi-level
                                                                                                enterprise-grade web solutions to meet various corporate needs. We develop bespoke enterprise web portals,
                                                                                                eCommerce solutions, B2B and B2C applications, ERP and CRM software apps, Reporting, Billing &amp; Secure
                                                                                                Financial Transaction Processing Systems, etc. Our enterprise IT and web solutions are built using the latest
                                                                                                web technologies and they are secure, robust and scalable which help businesses to reduce overall operational
                                                                                                cost and enhance operational efficiency.';
        $image = asset('assets/img/services/web/img-web-app-development-enterprise-solutions.webp');
        $icon1 = 'https://img.icons8.com/ios-glyphs/40/4a90e2/b2b.png';
        $icon2 = 'https://img.icons8.com/fluent-systems-regular/40/4a90e2/erp-system.png';
        $icon3 = 'https://img.icons8.com/material-sharp/40/4a90e2/private-cloud-storage.png';
        $icon4 = '';
        $detail1 = 'Custom Enterprise Web Development';
        $detail2 = 'Enterprise System Integration';
        $detail3 = 'CRM Software Development';
        $detail4 = 'Custom ERP Software Development';
        $detail5 = 'Enterprise Mobility Solutions';
        $detail6 = 'End-to-end IT Consultation';
        ?>

        @include('services.common.leftimgsection')

        <!-- Enterprise Solutions end -->

        <!-- E-Commerce start -->

        <?php
        $id_pass = 'ecommerce';
        $box1title = 'E-Commerce';
        $desc1 = 'We are a leading eCommerce web development company crafting beautiful web-based eCommerce solutions
                                                                                                for ultimate online shopping experiences. Our eCommerce website development services include full-fledged online
                                                                                                eCommerce store web design and custom eCommerce web development for small, medium and large-scale retail
                                                                                                businesses. Our expertise in popular eCommerce platforms like Magento based eCommerce website development,
                                                                                                WooCommerce, OsCommerce, Zen Cart, OpenCart, Shopify, etc. has helped us to deliver world-class eCommerce web
                                                                                                solutions with robust online content management system.';
        $image = asset('assets/img/services/web/img-web-app-development-ecommerce.webp');
        $icon1 = 'https://img.icons8.com/ios-glyphs/40/4a90e2/shopify.png';
        $icon2 = '//img.icons8.com/metro/40/4a90e2/wordpress.png';
        $icon3 = 'https://img.icons8.com/material-outlined/40/4a90e2/woocommerce.png';
        $icon4 = '//img.icons8.com/ios-glyphs/40/4a90e2/magento.png';
        $detail1 = 'Fraud Proof eCommerce Website Development';
        $detail2 = 'Responsive eCommerce Websites/ Web Apps';
        $detail3 = 'Multi-vendor Store Development';
        $detail4 = 'Online eCommerce Website Design';
        $detail5 = 'SaaS based eCommerce Set up';
        $detail6 = 'Shopping Cart Development';
        ?>

        @include('services.common.rightimgsection')

        <!-- E-Commerce end -->

        <!-- Mobile Backend & APIs start -->

        <?php
        $id_pass = 'backend';
        $box1title = 'Mobile Backend & APIs';
        $desc1 = 'Being a leading website development company since 1997, we offer top backend development services for
                                                                                                web applications and mobile applications. Our master-coders provide custom REST API services and solutions to
                                                                                                make the web and mobile apps interactive and user-friendly. We hold years of expertise in building on-site as
                                                                                                well as cloud-based backend app solutions for mobile, desktop, web and IoT applications. Our API driven
                                                                                                architecture fuels front-end of web apps and mobile apps. Whereas the powerful backend we develop will scale up
                                                                                                your app when needed, performs faster and offers seamless 3rd party integration with optimum data storage
                                                                                                security.';
        $image = asset('assets/img/services/web/img-web-app-development-mobile-backend-api.webp');
        $icon1 = 'https://img.icons8.com/windows/40/4a90e2/php-logo.png';
        $icon2 = 'https://img.icons8.com/material/40/4a90e2/drupal.png';
        $icon3 = 'https://img.icons8.com/windows/50/4a90e2/php-logo.png';
        $icon4 = 'https://img.icons8.com/ios/40/4a90e2/laravel.png';
        $detail1 = 'Mobile CMS';
        $detail2 = 'Social Integration';
        $detail3 = 'API/Webservices';
        $detail4 = 'App Engagement with Push';
        $detail5 = 'Authentication Services';
        $detail6 = 'Content Distribution';
        ?>

        @include('services.common.leftimgsection')

        <!-- Mobile Backend & APIs end -->

        <!-- Content Management System start -->

        <?php
        $id_pass = 'cms';
        $box1title = 'Content Management System';
        $desc1 = 'Webito is a top CMS development company offering a complete range of content management system (CMS)
                                                                                                development services and solutions for websites, B2C & B2B portals, enterprise applications and eCommerce
                                                                                                solutions. Our success ratio of 100% project delivery for CMS development projects shows the expertise of
                                                                                                talented CMS developers at Webito. Hire CMS developers and CMS designers from Webito, who are masters in working
                                                                                                with open-source CMS platforms like WordPress, Drupal, Umbraco, Kentico, Moodle, Joomla, TYPO3, Mambo,
                                                                                                DotNetNuke, etc.';
        $image = asset('assets/img/services/web/img-web-app-development-content-management-system.webp');
        $icon1 = 'https://img.icons8.com/metro/40/4a90e2/joomla.png';
        $icon2 = 'https://img.icons8.com/material/40/4a90e2/drupal.png';
        $icon3 = 'https://img.icons8.com/ios-filled/40/4a90e2/moodle.png';
        $icon4 = 'https://img.icons8.com/windows/40/4a90e2/umbraco.png';
        $detail1 = 'Custom CMS Web Development';
        $detail2 = 'CMS for eCommerce Solutions';
        $detail3 = 'CMS for B2C & B2B Apps';
        $detail4 = 'Enterprise CMS Development';
        $detail5 = 'CMS Migration & Update';
        $detail6 = 'Digital Asset Management System (DAM)';
        ?>

        @include('services.common.rightimgsection')

        <!-- Content Management System end -->

        <!-- Custom Web Development start -->

        <?php
        $id_pass = 'custom-development';
        $box1title = 'Custom Web Development';
        $desc1 = 'We are a leading website design and web development company helping some of the most recognized brands
                                                                                                with digital landscape presence through custom web development services. The web solutions we develop are
                                                                                                feature-rich, highly functional, robust, secure and scalable with engaging UI/UX design that enhances the brand.
                                                                                                Hire PHP website developers from Webito, who have years of experience in developing custom websites, web apps,
                                                                                                web portals, online eCommerce stores, etc. We have a perfect full-stack development team with experience in
                                                                                                Microsoft technologies, PHP core and open-source platforms, UI/UX design, scripting languages, DevOps services
                                                                                                to offer affordable solutions for your business.';
        $image = asset('assets/img/services/web/img-web-app-development-custom-web-development.webp');
        $icon1 = 'https://img.icons8.com/windows/40/4a90e2/npm.png';
        $icon2 = 'https://img.icons8.com/ios-filled/40/4a90e2/jquery.png';
        $icon3 = 'https://img.icons8.com/material-rounded/40/4a90e2/typescript.png';
        $icon4 = 'https://img.icons8.com/ios-filled/35/4a90e2/microsoft.png';
        $detail1 = 'Custom Website Design';
        $detail2 = 'Web CMS Development';
        $detail3 = 'Web Portal Development';
        $detail4 = 'eCommerce Website Development';
        $detail5 = 'Enterprise Web App Development';
        $detail6 = 'Ecommerce / Online Store';
        ?>
        @include('services.common.leftimgsection')

        <!-- Custom Web Development end -->
    </div>

    <!--  end -->
    <!--  end -->
    <!--  end -->
    <!--  end -->


    <!-- enterprise solution end -->

    <!-- e commerce start -->



    <!-- e commerce end -->

    <!-- Mobile backend &API'S start -->

    <!-- Mobile backend &API'S end -->

    <!-- Content Management system start -->






    <!-- apps use -->



    <!-- apps use end -->





    <!-- Content Management system end -->

    <!-- Custom Web Development start -->







    <!-- Custom Web Development end -->

    <!-- web technologies we work with start -->


    <?php
    $title = 'Web Technologies We Work With';
    $desc = 'In-house specialists of contemporary web technologies that encapsulate server-side and front-end stacks.';
    $icon1 = 'fab fa-php';
    $icon2 = 'fab fa-java';
    $icon3 = 'fa fa-html5';
    $icon4 = 'fa fa-drupal';
    $icon5 = 'fa fa-joomla';
    $icon6 = 'fa fa-wordpress';
    $icon7 = 'fab fa-magento';
    $icon8 = 'fab fa-shopify';
    $icon9 = 'fab fa-node-js';
    $icon10 = 'fab fa-angular';
    $icon11 = 'fa fa-envira';
    $icon12 = 'fa fa-database';
    $detail1 = 'PHP';
    $detail2 = 'Java';
    $detail3 = 'HTML5';
    $detail4 = 'Drupal';
    $detail5 = 'Joomla';
    $detail6 = 'Wordpress';
    $detail7 = 'Magento';
    $detail8 = 'Shopify';
    $detail9 = 'Node.JS';
    $detail10 = 'Angular';
    $detail11 = 'MongoDB';
    $detail12 = 'MYSQL';
    ?>

    @include('services.common.workedwith')





    <!-- web technologies we work with end -->

    @include('services.common.appsmade')

    <!--Workshop  section 3 -->
    <!--workshop  section 3 -->

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



    <!--Workshop  section 3 End-->

    <!-- our work section start -->
    <!-- our work section end -->

    <!-- #contact -->
    @include('layouts.contactline')

    <!-- #contact -->




@endsection
