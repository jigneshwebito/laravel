@extends('master')
@section('homepage-contain')
    <style>
        .remove {
            filter: none !important;
        }
    </style>
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Webito Infotech Software development Company';
    $metacontent = 'Top Web, Mobile App and Custom Software Development Company';
    $metaname = 'Software development Company, Application Development Company';
    $metaproperty = 'Webito Infotech - Transforming Ideas Digitally.';
    ?>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <section id="intro" class="clearfix">
        <div class="container">
            <div class="main-page-header" style="height:37rem;width:80rem;overflow: hidden;position:absolute;z-index:-1;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M271.16,-0.48 C196.66,34.03 272.85,107.06 77.59,151.47 L500.00,150.00 L500.00,0.00 Z"
                        style="stroke: none; fill: #f9fafe;"></path>
                </svg>
            </div>
            <div class="intro-content right">
                <img src="/assets/img/index/illustration/Team work-amico.svg" alt="Webito Infotech"
                    class="img-fluid wow zoomIn">
            </div>
            <div class="intro-content left">
                <h2>We are here to grow your business</h2>
                <p class="p-margin20">We deliver web and mobile app development services to global businesses since 2020,
                    with 100% project
                    delivery success. Hire the best programmers at affordable prices. Our design-focused approach and
                    project execution processes help you
                    to deliver the right solutions.</p>
                <div class="btn">Let's Start</div>
            </div>
        </div>
    </section>
    <!--==========================/Intro Section============================-->
    <main id="main">
        <!--==========================About Us Section============================-->
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>About Us</h3>
                    <p class="p-padding20"> We believe that every part of web pages or app UI can be a special experience
                        and
                        has the power
                        to turn your business into a great one. That’s why our mission is to bring you all the business
                        props with unique looks of your brand and create goodwill of business through user experience,
                        so the user can enjoy your brand every single time, with every single part.</p>
                </header>
            </div>
        </section>
        <!--==========================/About Us Section============================-->
        <!--==========================Services Section============================-->
        <section id="services" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3 class="h-padding30">Our Core Services</h3>
                </header>
                <div class="row">
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i>
                            </div>
                            <h4 class="title"><a href="">Mobile Apps</a></h4>
                            <p class="description">We build intuitive and engaging Android, iOS and cross-platform apps
                                for businesses, consumers and enterprises that end users love and adapt to them very
                                quickly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i>
                            </div>
                            <h4 class="title"><a href="">AI/ML</a></h4>
                            <p class="description">We infuse AI elements to existing business processes to boost
                                productivity. Our AI engineers are experts to deliver next-gen AI apps &amp; solutions to
                                diverse industries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Web Development</a></h4>
                            <p class="description">Our web developers create custom web and web application solutions.
                                We deliver web presence to help you grow your business using the best web technologies.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i>
                            </div>
                            <h4 class="title"><a href="">UI/UX Design</a></h4>
                            <p class="description">Starting from concept, information architecture, visual identity and
                                UI/UX design, our team delivers dazzling experiences for maximum user engagement</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s"
                        style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="">DevOps</a></h4>
                            <p class="description">Our DevOps experts help you with secured &amp; stable infrastructure
                                management for Continuous Integration &amp; Continuous Delivery for faster release.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s"
                        style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
                        <div class="box">
                            <div class="icon"><i class="fa fa-gamepad" style="color: #4680ff; font-size: 50px;"></i>
                            </div>
                            <h4 class="title"><a href="">Gaming</a></h4>
                            <p class="description">We've been reowned for delivering interactive, visually appealing and
                                exciting gaming experience on Mobile, Console, and Virtual Reality platforms. </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- #services -->
        <!--==========================Why Us Section============================-->
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3 class="h-padding20">Why choose us?</h3>
                    <p>Have an idea? Work with us and see how it goes. We promise to go the extra mile for every project
                        that we take onboard.</p>
                </header>
                <div class="row row-eq-height justify-content-center">
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                            <i class="card-wow" aria-hidden="true"><img
                                    src="https://img.icons8.com/carbon-copy/65/4a90e2/good-quality.png" /></i>
                            <div class="card-body">
                                <h5 class="card-title">Quality</h5>
                                <p class="card-text">We know that what is value of quality.We never compromise with
                                    quality of our work and design.</p>
                                <!-- <a href="#" class="readmore">Read more </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="card-wow"><img
                                    src="https://img.icons8.com/carbon-copy/60/4a90e2/innovation.png" /></i>
                            <div class="card-body">
                                <h5 class="card-title">Innovation</h5>
                                <p class="card-text">Our team always trying to innovate something new and make your
                                    project great.</p>
                                <!-- <a href="#" class="readmore">Read more </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="card-wow"><img src="https://img.icons8.com/wired/60/4a90e2/satisfaction.png"
                                    alt="icon" /></i>
                            <div class="card-body">
                                <h5 class="card-title">100% Satisfaction</h5>
                                <p class="card-text">Your Satisfaction is our first Priority.We always ready to satisfy
                                    you with our great work. </p>
                                <!-- <a href="#" class="readmore">Read more </a> -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="container-fluid">
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">102</span></h1>
                        <p>Clients</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">207</span></h1>
                        <p>Projects</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">1,37,760</span></h1>
                        <p>Hours Of Support</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">36</span></h1>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================/Why Us Section============================-->
        <!--==========================Portfolio Section============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title h-padding20">Our Work</h3>
                </header @include('layouts.work-slider') </div>
        </section>
        <section id="team">
            <div class="container">
                <div class="section-header">
                    <h3 class="h-paddingbottom30">Team</h3>
                </div>
                <div class="row">
                    <section class="customer-logos slider slik-container ">
                        <div class="slide side-img-p"><img src="assets/img/team/sm_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/av_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/kp_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/cv_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/ra_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/ss_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide  side-img-p"><img src="assets/img/team/pd_img.webp"
                                class="grid__item-img remove">
                        </div>
                        {{-- <div class="slide  side-img-p"><img src="assets/img/team/dr_img.webp" class="grid__item-img remove">
                    </div> --}}
                        <div class="slide side-img-p"><img src="assets/img/team/dj_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/jd_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/rk_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/am_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/lm_img.webp"
                                class="grid__item-img remove">
                        </div>
                        {{-- <div class="slide side-img-p"><img src="assets/img/team/sk_img.webp" class="grid__item-img remove">
                    </div> --}}
                        <div class="slide side-img-p"><img src="assets/img/team/pm_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/nb_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/vp_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/hv_img.webp"
                                class="grid__item-img remove">
                        </div>
                        {{-- <div class="slide side-img-p"><img src="assets/img/team/rc_img.webp" class="grid__item-img remove">
                    </div> --}}
                        <div class="slide side-img-p"><img src="assets/img/team/db_img.webp"
                                class="grid__item-img remove">
                        </div>
                        {{-- <div class="slide side-img-p"><img src="assets/img/team/cm_img.webp" class="grid__item-img remove">
                    </div> --}}
                        <div class="slide side-img-p"><img src="assets/img/team/dt_img.webp"
                                class="grid__item-img remove">
                        </div>
                        <div class="slide side-img-p"><img src="assets/img/team/cs_img.webp"
                                class="grid__item-img remove">
                        </div>
                    </section>
                    <div class="col-lg-3 col-md-6 wow fadeInUp data" data-wow-delay="0.1s">
                        <div class="member">
                        </div>
                    </div>
                    <!--<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp">-->
                    <!--    <div class="member">-->
                    <!--        <img src="assets/img/index/team/manav.jpg" class="img-fluid remove" alt="manav-kanpariya">-->
                    <!--        <div class="member-info">-->
                    <!--            <div class="member-info-content">-->
                    <!--                <h4>Manav Kanpariya</h4>-->
                    <!--                <span>Director</span>-->
                    <!--                <div class="social">-->
                    <!--                    <a href="https://mobile.twitter.com/manav_kanpariya"><i-->
                    <!--                            class="fa fa-twitter"></i></a>-->
                    <!--                    <a href="https://m.facebook.com/profile.php?id=100005575876256"><i-->
                    <!--                            class="fa fa-facebook"></i></a>-->
                    <!--                    <a href="https://instagram.com/mr_kanpariya?igshid=YmMyMTA2M2Y="><i-->
                    <!--                            class="fa fa-instagram"></i></a>-->
                    <!--                    <a-->
                    <!--                        href="https://www.linkedin.com/in/manav-kanpariya-8488a4193/?originalSubdomain=in"><i-->
                    <!--                            class="fa fa-linkedin"></i></a>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">-->
                    <!--    <div class="member">-->
                    <!--        <img src="assets/img/index/team/brijesh.jpg" class="img-fluid remove" alt="brijesh-goyani">-->
                    <!--        <div class="member-info">-->
                    <!--            <div class="member-info-content">-->
                    <!--                <h4>Brijesh Goyani</h4>-->
                    <!--                <span>Director</span>-->
                    <!--                <div class="social">-->
                    <!--                    <a href="https://twitter.com/goyani_brijesh"><i class="fa fa-twitter"></i></a>-->
                    <!--                    <a href="https://www.facebook.com/brijesh.goyani.24"><i-->
                    <!--                            class="fa fa-facebook"></i></a>-->
                    <!--                    <a href="https://instagram.com/brijesh_goyani?igshid=gpyxfim09pem"><i-->
                    <!--                            class="fa fa-instagram"></i></a>-->
                    <!--                    <a href="https://www.linkedin.com/in/brijesh-goyani-497969189/"><i-->
                    <!--                            class="fa fa-linkedin"></i></a>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp data" data-wow-delay="0.3s">
                        <div class="member">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #team -->
        <!--==========================Clients Section============================-->
        <section id="clients" class="section-bg">

            <div class="container">

                <div class="section-header">
                    <h3 class="h-paddingbottom30">Our Clients</h3>
                </div>
                <div class="customer-logos slider">
                    <a href="http://tiifafilmcity.in/">
                        <div class="slide"><img src="assets/img/index/clients/Tiifa.png" alt="Tiifa Filmcity">
                        </div>
                    </a>
                    <a href="https://aaravstarexports.com/">
                        <div class="slide"><img src="assets/img/index/clients/Aaravstar-exports.png"
                                alt="Aaravstar Exports"></div>
                    </a>
                    <a href="https://rosyimitation.com/">
                        <div class="slide"><img src="assets/img/index/clients/Rosy.png" alt="Rosy Imitation">
                        </div>
                    </a>
                    <a href="http://vmjewel.com/">
                        <div class="slide"><img src="assets/img/index/clients/Vm-jewels.png" alt="Vm Jewels">
                        </div>
                    </a>
                    <a href="https://xsourceinterio.com/">
                        <div class="slide"><img src="assets/img/index/clients/Xsource.png" alt="Xsource Interio">
                        </div>
                    </a>
                    <a href="https://www.livecake.in/">
                        <div class="slide"><img src="assets/img/index/clients/Cake-factory.png" alt="Cake Factory">
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.webitoinfotech.jkr">
                        <div class="slide"><img src="assets/img/index/clients/JKR.png" alt="JKR">
                        </div>
                    </a>
                    <a href="https://www.ldrp.ac.in/">
                        <div class="slide"><img src="assets/img/index/clients/LDRP.png" alt="LDRP">
                        </div>
                    </a>
                    <a href="">
                        <div class="slide"><img src="assets/img/index/clients/Leafberry-herbal.png"
                                alt="Leafberry Herbal">
                        </div>
                    </a>
                    <a href="https://heavendesigns.in/">
                        <div class="slide"><img src="assets/img/index/clients/Solar-heaven.png" alt="Solar Heaven">
                        </div>
                    </a>
                    <a href="https://www.goinfa.com/">
                        <div class="slide"><img src="assets/img/index/clients/Go-infa.png" alt="Go infa"></div>
                    </a>
                    <a href="https://banweryfashion.com/">
                        <div class="slide"><img src="assets/img/index/clients/Banwery.png" alt="Banwery"></div>
                    </a>
                    <a href="http://t3developers.com/">
                        <div class="slide"><img src="assets/img/index/clients/T3.png" alt="T3 Developers"></div>
                    </a>
                    <a href="https://princejewellery.in/">
                        <div class="slide"><img src="assets/img/index/clients/Prince-jewellery.png"
                                alt="Prince Jewellery">
                        </div>
                    </a>
                    <a href="https://www.copticmeet.com/">
                        <div class="slide"><img src="assets/img/index/clients/Coptic-meet.png" alt="Coptic Meet">
                        </div>
                    </a>

                </div>

            </div>

        </section>
        <!--========================== Testimonials============================-->

        <div id="testimonials">
            <div id="testimonial" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $index = 1; ?>

                    @foreach ($tm as $tm)
                        {{-- @if ($tm->id == 1)
                            @continue
                        @endif --}}

                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="carousel-caption">
                                <img src="{{ asset('backend/images/testimonials/' . $tm->images_path) }}"
                                    class="img-fluid" alt="testimonials">
                                <div id="image-caption">{{ $tm->name }}</div>
                                <p>{{ $tm->description }}
                                </p>
                            </div>

                            {{-- {{ $index }} --}}
                        </div>
                        <?php $index++; ?>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#testimonial" data-slide="prev"> <i class='fa fa-arrow-left'></i>
                </a>
                <a class="carousel-control-next" href="#testimonial" data-slide="next"> <i
                        class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,

                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 5
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 4
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3
                            }
                        }
                    ]
                });
            });
        </script>
        @include('layouts.contact')
    @endsection
