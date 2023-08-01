@extends('master')
@section('title', 'Shopify eCommerce Website Development')
@section('meta-keyword', 'Shopify eCommerce Website Development - Webito Infotech')
@section('meta-description', 'Webito Infotech is leading Shopify eCommerce development company that offers custom Shopify development services for your online business.')
@section('meta-url', 'https://webitoinfotech.com/shopify')
@section('meta-title', 'Shopify Development Company | eCommerce web development services')


@section('mobile-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Shopify Development Company | eCommerce web development services';
    $metacontent = 'Webito Infotech is a leading Shopify eCommerce development company that offers custom Shopify development services for your online business. Hire Shopify Experts!';
    $metaname = 'Shopify Development Company | eCommerce web development services';
    $metaproperty = 'Webito Infotech - Shopify Development Company ';
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/flutter.css') }}">

    {{-- Title-Section Start --}}

    <?php
    $title = 'Shopify eCommerce Website Development';
    $desc = 'Webito Infotech is a leading Shopify eCommerce website development company that offers quality Shopify development services for your online business. As a Shopify Plus partner, facilitate your eCommerce retail business to leverage all the benefits of Shopify platform at the most competitive rates.';
    $bgimage = asset('assets/img/technologies/mobile/landing-pattern3.jpg');
    $image = asset('assets/img/technologies/mobile/AaravStar.webp');
    ?>
    @include('technology.mobile.common.first-section')

    {{-- Title-section End --}}

    {{-- Hire-Section Start --}}

    <?php
    $title = 'Hire Shopify Experts';
    $subtitle = 'Create your own development team now';
    $desc = 'Everything starts with a ‘Hello’!! With ZERO upfront investment, we are committed to provide a solid foundation for your business idea. You’ll be amazed by working with our experts. <br> If not, the first 7 days are on us.';
    ?>
    @include('technology.mobile.common.hire')

    {{-- Hire-Section End --}}

    {{-- Slider-Section Start --}}
    <?php
    $title = 'APPROACH';
    $subtitle = 'Top Shopify Website Development Company';
    $slide1title = 'Shopify Web Development Expertise';
    $slide1desc = 'Webito Infotech is a leading Shopify eCommerce web development company supports you at every stage of developing an online store while offering services like customized website design and Shopify theme development. As a certified Shopify Plus Partner, we also assist our clients in switching their existing online store to Shopify through quality migration services.';
    $slide1alt = 'Magento Web Development Expertise';
    $slide1img = asset('assets/img/technologies/mobile/flutter-app-development-expertise.svg');
    
    $slide2title = 'Quality Delivered in Time';
    $slide2desc = 'Being a leading Shopify website development company, we put stringent quality checks at every level of our eCommerce web store development services. Hire Shopify experts from Webito Infotech who make sure to utilize all of Shopify leading features such as professionals themes, advanced functionality and complete CMS to deliver a highly secure and user-friendly eCommerce website.';
    $slide2alt = 'Quality Delivered in Time';
    $slide2img = asset('assets/img/technologies/mobile/uncompromised-quality-check.svg');
    
    $slide3title = 'Shopify eCommerce Solutions';
    $slide3desc = 'With our top Shopify website development services, you can scale and customize your online eCommerce business in a way that you can achieve instant ROI. We bring a pleasant shopping experience for your clients by integrating the latest and trending eCommerce plugins and features to make your eCommerce website a fully-functional online store. We provide strategic consultation and Shopify website development for businesses of all the sizes.';
    $slide3alt = 'Shopify eCommerce Solutions';
    $slide3img = asset('assets/img/technologies/mobile/flutter-app-solution.svg');
    
    $slide4title = 'Hire Shopify Experts';
    $slide4desc = 'You can hire Shopify developers from Webito Infotech through flexible engagement models deployed for working exclusively on your online eCommerce web store development. Our holistic approach and agile development method will make you aware of the latest online marketing trends and Shopify tools while creating bespoke eCommerce solutions for your business.';
    $slide4alt = 'Hire Shopify Experts';
    $slide4img = asset('assets/img/technologies/mobile/hire-flutter-developer.svg');
    ?>
    @include('technology.mobile.common.slider')
    {{-- Slider-Section End --}}

    {{-- Offer-Section Start --}}
    <?php
    $title = 'Our Shopify eCommerce App Development Services';
    $subtitle = 'WHAT WE DO';
    
    $slide1title = 'Shopify App Development';
    $slide1desc = 'Fully functional and custom mobile app development for your Shopify store to reach a wider customer base.';
    
    $slide2title = 'Shopify Plus Expertise';
    $slide2desc = 'Development of large-volume eCommerce businesses using our Shopify Plus expertise with advanced features & functionality.';
    
    $slide3title = 'Shopify Migration Services';
    $slide3desc = 'Migrate your existing eCommerce store to the Shopify platform without compromising on data and security.';
    
    $slide4title = 'Shopping Cart development';
    $slide4desc = 'Secure shopping cart integration to accept various payment methods with data encryption and security with Shopify platform.';
    
    $slide5title = 'Marketing & Customization';
    $slide5desc = 'Reach a wider audience base with our customized Shopify online store designed as per your business requirements.';
    
    $slide6title = 'Shopify Support & Maintenance';
    $slide6desc = 'We offer extended Shopify consultancy and support related to a full range of Shopify website development services.';
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
