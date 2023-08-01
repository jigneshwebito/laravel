@extends('master')
@section('title', 'About Us - Webito Infotech')

@section('meta-description', 'Webitoinfotech.com is a trusted web development and app development company dedicated to delivering exceptional services.')
@section('meta-keyword', 'About US - Webito Infotech')
@section('meta-url', 'https://webitoinfotech.com/about')
@section('meta-title', 'About Us - Webito Infotech')

@section('aboutcontent')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Webito Infotech Software Development Company Since 2020 | Web | Mobile | IoT Solutions';
    $metacontent = 'Webito Infotech is the best IT company since 2020 that offers software development services for web and mobile apps using trending technologies.';
    $metaname = 'Software Development Company Since 2020 | Web | Mobile | IoT Solutions';
    $metaproperty = 'Webito Infotech - Transforming Ideas. Digitally.';
    ?>
    <!-- introduction  -->
    <link href="{{ asset('assets/css/design.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
    <?php
    $title = 'Our Treasure Comprises Our People, Vision & Values';
    $desc = 'Webito is not only a globally recognized IT company but also a family filled with talented experts that help global brands, enterprises, mid-size businesses or even startups with innovative solutions.';
    ?>

    @include('about.common.title')

    <!-- introduction end -->

    <section class="aboutus-des-sec sec-pad-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 mar-top-40">
                    <h2>Who We Are</h2>
                    <div>
                        <p>Webito is not an entity, it’s a family that represents togetherness for over one year of a
                            successful journey. For Webitoians, the definition of success is to transcend innovative ideas
                            of people to reality with the help of our tech expertise, this is what we, as a Team, want to be
                            remembered for!</p>
                        <p>Our vision Will led Webito to become a top IT company in India & USA for delivering various
                            industry-led mobility solutions. The goal is to empower clients and businesses by creating new
                            possibilities leveraging the technologies of today and tomorrow with the utmost quality,
                            satisfaction, and transparency.</p>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mar-top-40">
                    <h2>What We Do</h2>
                    <div>
                        <p>Our enthusiasm will led us to become a top IT company in India & USA for delivering various
                            industry-led mobility solutions in web and mobile application development domains leveraging
                            futuristic technologies like Internet of Things (IoT), AI-ML, AR-VR, Voice assistants and Voice
                            Skills, DevOps & Cloud computing, etc.</p>
                        <p>We feel empowered with our certified tech experts and our R&D team who have always challenged
                            themselves to help global clientele with a plethora of IT services and solutions. Engagement
                            with our team guarantees our clients to save huge money on project development with faster
                            delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile Apps Driven by Cloud start -->


    <section>
        <div class="container space">
            <h2 class="text-center why_do mb-3">WHY DO PEOPLE CHOOSE US?</h2>
            <h5 class="text-center">Delivering Trusted and Best Product Solution to the widest audience possible.</h5>
        </div>
    </section>
    <?php
    $box1title = 'How We Started';
    $desc1 = 'Webito Infotech Pvt. Ltd. is one of the most trusted Software development companies today. With a futuristic vision, few people had begun the company quite humbly in 2020 with a little capital and a couple of employees for web designing as primary service. What they all had was untiring energy and allegiance towards the work. In a year, the company witnessed a roaring success and growth in both the workforce of over 15 employees and a wide range of services such as Mobile Application Development, Desktop application development, Cloud Solution , Game Development, ERP applications and almost everything under the hood of computing and communication technology.';
    $image = asset('assets/img/about/how-we-start.webp');
    // $image = "asset('assets/img/about/how-we-start.webp') "; d-grid gap-2 col-6 mx-auto
    ?>

    @include('about.common.leftimgsection')

    <!-- Mobile Apps Driven by Cloud end -->

    <!-- Hybrid App Development start -->

    <?php
    $box1title = 'How We Grew';
    $desc1 = 'The company grew leaps and bounds with over 30 (and counting…) successful customized web applications and solutions empowering businesses around the world to harness the force of technology to enrich human lives and increase business efficiency. We take immense pleasure to say that 70% of our business comes from existing clients. Our clients choose us time and time again as they trust us to deliver effective solutions that meet their specific business requirements. Needless to say, transparency in our business deal has been our greatest strength.';
    $image = asset('assets/img/about/how-we-grow.webp');
    
    ?>


    @include('about.common.rightimgsection')

    <!-- Hybrid App Development end -->
    {{-- <section>
    <div class="container space">
        <h2 class="text-center">Our Mission</h2>
        <h5 class="text-center">Delivering Trusted and Best Product Solution to the widest audience possible.</h5>
    </div>
</section> --}}

    <section class="discovery-process-section" style="margin: 80px 0 15px 0">
        <div class="container">
            <h2 class="mrg-b">We Simplify Software Development Process</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 process-block">
                    <div class="process-box">
                        <div class="icon-box"><img src="{{ asset('assets/img/about/discover.png') }}" alt="Discover"></div>
                        <h3>Discover</h3>
                        <p>We shape brands through exploration, applying in-depth research to challenge assumptions at every
                            turn.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 process-block">
                    <div class="process-box">
                        <div class="icon-box"><img src="{{ asset('assets/img/about/design.png') }}" alt="Design"></div>
                        <h3>Design</h3>
                        <p>Our design approach is to simplify. We embrace the joy in creating something unique that is easy
                            for end users.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 process-block">
                    <div class="process-box">
                        <div class="icon-box"><img src="{{ asset('assets/img/about/build.png') }}" alt="Build"></div>
                        <h3>Build</h3>
                        <p>Using modern technologies, we build with efficiency and skill, creating flexible and scalable
                            business-driven solutions.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 process-block">
                    <div class="process-box">
                        <div class="icon-box"><img src="{{ asset('assets/img/about/deliver.png') }}" alt="Deliver"></div>
                        <h3>Deliver</h3>
                        <p>We take an iterative approach to both our work and our practice, always looking for ways to
                            improve what we do.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission start -->

    <?php
    $box1title = 'Our Mission';
    $desc1 = 'We commit to make the term ‘offshore’ synonymous with ‘quality’. We are constantly refining our outsourcing model to offer better deals to our clients. Our expanding portfolio of services enables us to deliver end-to-end solutions, while our growing technical expertise makes it possible for us to tackle even highly complex projects.
                                                                                                                                                                                                                                                                                                                                            By building our presence in different parts of the world, nurturing talent, streamlining our management processes, and staying committed to continuous improvement, we find ways in which to deliver quality solutions at affordable rates.
                                                                                                                                                                                                                                                                                                                                            The open-minded professionals working with us match and exceed the clients’ expectations. We are known for delivering high quality, cost effective and productive solutions to help our clients’ business grow. We understand that our success depends on our customers’ success.';
    $image = asset('assets/img/about/our-mission.webp');
    ?>

    @include('about.common.leftimgsection')

    <!-- Our Mission end -->

    <!-- Our Vision start -->

    <?php
    $box1title = 'Our Vision';
    $desc1 = 'For any business, customers are always at the center. Being a leading web and mobile app development company, our definition goes beyond our direct customers. We always start from where you are with your ideas and we think from YOUR end customers perspectives, their pain areas and devise a solution that solves core problems to benefit your business.
                                                                                                                                                                                                                                                                                                                                              Communication is the Key. We tend to over-communicate at times. Although sounds overwhelming, but eventually it works wonders for our client business. When our development team collaborates with our clients sitting a thousand miles away, its apparent that we stay in touch with platforms and mediums that allow effectiveness, transparency, and accuracy.
                                                                                                                                                                                                                                                                                                                                              With over two decades of experience in the offshore IT software development industry, we have a great set of internal frameworks with best-in-class infrastructure that enables us to deliver solutions with superior quality, at all times. All these years, we have learned how to prevent failures and replicate success. We dont just brag about quality. We define and deliver it in time.';
    $image = asset('assets/img/about/vision2.webp');
    ?>

    @include('about.common.rightimgsection')

    <!-- Our Vision end -->


    <!-- Our Events start -->

    <?php
    $box1title = 'Our Events';
    ?>
    @include('about.common.our_event')

    <!-- Our Vision end -->

    <section class="home-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-7">
                    <div class="contact-section-box">
                        <p>COVID-19 Update</p>
                        <h2><span>#WeAreReady</span></h2>
                        <p>
                        <p>Amid the stress around pandemic of COVID-19, the team Webito Infotech is committed to providing
                            <strong>uninterrupted services</strong>
                            to all of our clients as well as ready to take up new assignments. All of our team members,
                            including engineers, project managers, and business consulting teams are available during
                            business hours and are safe working from home.
                        </p>
                        </p>
                        <div class="button-box"><a href="/contact" class="link-button"> Get A Quote </a></div>
                        {{-- <div class="button-box"><a class="link-button"> Our CEO's Message in Full </a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('layouts.contactline')
@endsection
