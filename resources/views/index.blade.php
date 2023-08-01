@extends('master')
@section('title', 'Webito Infotech - The Best IT Company in Surat')

@section('meta-description',
    'Webitoinfotech.com is a leading web development and app development that offers innovative
    solutions for businesses of all sizes.')
@section('meta-keyword',
    'Webito Infotech | Best it company in surat | The Best IT Company in surat |webito |
    webitoinfotech Pvt Ltd | software development company | webito infotech - application, website and software development
    company|it company website| web development company | surat it company | software company in surat |software company
    website | surat it companies | surat software company | top 10 web development company | top it companies surat | top 10
    web development company in surat | It Company in surat| flutter development Company in surat | it company in mota
    varachha | Best It Company In India | Best Software Company in India | Webito Infotech - The Best It Company | Webito
    Infotech - The Best It Company In surat | it company near me"')
@section('meta-url', 'https://staging.webitoinfotech.com/')
@section('meta-title', 'Webito Infotech - The Best IT Company in Surat')


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
    {{-- start book Metting --}}
    {{-- <button class="book_meeting">Book A Meeting</button> --}}
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="bookMeetingModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content book_a_meeting">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:#0675e8;">Book A Meeting
                    </h5>
                    <button type="button" class="close bg_close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container1 calendarContainer">
                        <div class="card shadow border-0">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-6 p-5 text-white calendar-main">
                                        <div class="text-center calendar-wrap">
                                            <img src="https://en.gravatar.com/userimage/6173818/6755225af9bdc5d8880d3006067494b9.jpg?size=60"
                                                class="mx-auto rounded img-fluid"
                                                style="border-radius:50px !important;border:3px solid #fff;">
                                            <h5 class="mt-3 mb-3">Webito Infotech</h5>
                                            <div class="calendar">
                                                <div class="d-flex justify-content-between text-center header">
                                                    <p class="pointer minusmonth">
                                                        < </p>
                                                            <p class="monthname"></p>
                                                            <p class="pointer addmonth"> > </p>
                                                </div>
                                                <ul class="group">
                                                    <li class="daysName">Mo</li>
                                                    <li class="daysName">Tu</li>
                                                    <li class="daysName">We</li>
                                                    <li class="daysName">Th</li>
                                                    <li class="daysName">Fr</li>
                                                    <li class="daysName">Sa</li>
                                                    <li class="daysName">Su</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="fullDate" id="fullDate">
                                    <div class="col-md-6 p-5" style="    background: white;">
                                        <h5 class="card-title titleText">Meeting Duration <span style="font-size: 14px;">(Minutes)</span></h5>
                                        <input type="text" class="col-12 meetingDuration" id="meetingDuration"
                                            value="30" oninput="timeDuration()">
                                        <br><br>
                                        @php
                                            $meeting_slot_array = ['9:00:00 AM', '9:30:00 AM', '10:00:00 AM', '10:30:00 AM', '11:00:00 AM', '11:30:00 AM', '12:00:00 AM', '12:30:00 PM', '1:00:00 PM', '1:30:00 PM', '2:00:00 PM', '2:30:00 PM', '3:00:00 PM', '3:30:00 PM', '4:00:00 PM', '4:30:00 PM', '5:00:00 PM', '5:30:00 PM', '6:00:00 PM', '6:30:00 PM'];
                                        @endphp
                                        <div id="work_time">
                                            <h5 class="card-title titleText">What time works best?</h5>
                                            <div class="d-grid gap-2" style="overflow:scroll;max-height:475px;">
                                                @foreach ($meeting_slot_array as $meeting_slot)
                                                    <button type="button" class="col-12 meetingTime"
                                                        data-id="{{ $meeting_slot }}">{{ $meeting_slot }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container informationContainer hidden">
                        <div style="margin-bottom: 10px; color:black;">
                            <span id="selectedDate" class="bg_dark"></span>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="bg_dark">First Name <span style="color:red;">*</span></label>
                                <input type="text" class="form-control mb-1" name="firstName" id="firstName"
                                    placeholder="Enter First Name" onblur="form_validation()">
                                <span class="error_msg" id="fnameErr"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="bg_dark">Last Name<span style="color:red;">*</span></label>
                                <input type="text" class="form-control mb-1" name="lastName" id="lastName"
                                    placeholder="Enter Last Name" onblur="form_validation()">
                                <span class="error_msg" id="lnameErr"></span>
                            </div>
                            <div class="col-md-12">
                                <label for="userEmail" class="bg_dark">Email<span style="color:red;">*</span></label>
                                <input type="email" class="form-control mb-1" name="userEmail" id="userEmail"
                                    placeholder="Enter Your Email" oninput="form_validation()">
                                <span class="error_msg" id="mailErr"></span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            {{-- <div class="col-md-6"> --}}
                                <button type="button" class="textButton backBtn" type="button">Back</button>
                            {{-- </div> --}}
                            {{-- <div class="col-md-6 d-flex justify-content-end"> --}}
                                <button type="button" class="textButton confirmMeeting" disabled
                                    style="opacity:0.5">Confirm</button>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="confirmMeetingContainer hidden">
                        <div class="container">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="../assets/img/confirmMeeting.png" width="50%" alt="">
                            </div>
                            <div>
                                <h3 class="d-flex justify-content-center" style="color:#0675e8;">Book A
                                   <span>(Meeting)</span> 
                                </h3>
                                <p class="confirmText bg_dark">
                                    Thank you for request us for meeting appointment. Your appointment request
                                    is
                                    waiting for approval. We will be notify you as soon as possible.</p>
                                <div class="d-flex justify-content-center mb-4">
                                    <button id="okBtn">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end book Metting --}}

    <section id="intro" class="clearfix">
        <div class="container">
            <div class="main-page-header" style="height:37rem;width:80rem;overflow: hidden;position:absolute;z-index:-1;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M271.16,-0.48 C196.66,34.03 272.85,107.06 77.59,151.47 L500.00,150.00 L500.00,0.00 Z"
                        style="stroke: none; fill: #f9fafe;"></path>
                </svg>
            </div>
            <div class="intro-content right">
                <img src="{{ asset('assets/img/index/illustration/Team work-amico.svg') }}" alt="Webito Infotech"
                    class="img-fluid wow zoomIn">
            </div>
            <div class="intro-content left">
                <h2>We are here to grow your business</h2>
                <p class="p-margin20">We deliver web and mobile app development services to global businesses since 2020,
                    with 100% project
                    delivery success. Hire the best programmers at affordable prices. Our design-focused approach and
                    project execution processes help you
                    to deliver the right solutions.</p>
                <a href="{{ url('contact') }}"><div class="btn">Let's Start</div></a>   
                <a href="#"><div class="btn book_meeting">Book A Meeting</div></a>   
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
                            <h4 class="title">
                                <a>Mobile Apps</a>
                            </h4>
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
                            <h4 class="title">
                                <a>AI/ML</a>
                            </h4>
                            <p class="description">We infuse AI elements to existing business processes to boost
                                productivity. Our AI engineers are experts to deliver next-gen AI apps &amp; solutions to
                                diverse industries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s"
                        data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h4 class="title">
                                <a>Web Development</a>
                            </h4>
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
                            <h4 class="title">
                                <a>UI/UX Design</a>
                            </h4>
                            <p class="description">Starting from concept, information architecture, visual identity and
                                UI/UX design, our team delivers dazzling experiences for maximum user engagement</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s"
                        data-wow-duration="1.4s"
                        style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h4 class="title">
                                <a>DevOps</a>
                            </h4>
                            <p class="description">Our DevOps experts help you with secured &amp; stable infrastructure
                                management for Continuous Integration &amp; Continuous Delivery for faster release.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s"
                        style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.2s; animation-name: none;">
                        <div class="box">
                            <div class="icon"><i class="fa fa-gamepad" style="color: #4680ff; font-size: 50px;"></i>
                            </div>
                            <h4 class="title">
                                <a>Gaming</a>
                            </h4>
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
                        <h1><span class="counter">{{ $clients }}</span></h1>
                        <p>Clients</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">{{ $projects }}</span></h1>
                        <p>Projects</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">{{ $hours }}</span></h1>
                        <p>Hours Of Support</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center media-query-by-p">
                        <h1><span class="counter">{{ $employees }}</span></h1>
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
                </header>
                @include('layouts.work-slider')
            </div>
        </section>
        <section id="team">
            <div class="container">
                <div class="section-header">
                    <h3 class="h-paddingbottom30">Team</h3>
                </div>
                <div class="row">
                    <section class="customer-logos mb-0 slider slik-container ">
                        {{-- krishna --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/kp_img.webp') }}"
                                class="grid__item-img remove" alt="Image 3">
                        </div>
                        {{-- chelsi --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/cv_img.webp') }}"
                                class="grid__item-img remove" alt="Image 4">
                        </div>
                        {{-- rushikesh --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/ra_img.webp') }}"
                                class="grid__item-img remove" alt="Image 5">
                        </div>
                        {{-- shivani --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/ss_img.webp') }}"
                                class="grid__item-img remove" alt="Image 6">
                        </div>
                        {{-- shruti --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/sm_img.webp') }}"
                                class="grid__item-img remove" alt="Image 1">
                        </div>
                        {{-- prachi --}}
                        <div class="slide  side-img-p"><img src="{{ asset('assets/img/team/pd_img.webp') }}"
                                class="grid__item-img remove" alt="Image 7">
                        </div>
                        {{-- juli --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/dj_img.webp') }}"
                                class="grid__item-img remove" alt="Image 8">
                        </div>
                        {{-- rutvik --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/rk_img.webp') }}"
                                class="grid__item-img remove" alt="Image 10">
                        </div>
                        {{-- atul --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/am_img.webp') }}"
                                class="grid__item-img remove" alt="Image 11">
                        </div>
                        {{-- princi --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/pm_img.webp') }}"
                                class="grid__item-img remove" alt="Image 13">
                        </div>
                        {{-- nishtha --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/nb_img.webp') }}"
                                class="grid__item-img remove" alt="Image 14">
                        </div>
                        {{-- harmi --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/hv_img.webp') }}"
                                class="grid__item-img remove" alt="Image 16">
                        </div>
                        {{-- dipesh --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/db_img.webp') }}"
                                class="grid__item-img remove" alt="Image 17">
                        </div>
                        {{-- divya --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/dt_img.webp') }}"
                                class="grid__item-img remove" alt="Image 18">
                        </div>
                        {{-- chirag --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/cs_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- parth --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/pak_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- harshit --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/hm_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- dhruv --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/dk_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- ankita --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/ag_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- janvi --}}
                        {{-- mansi --}}
                        {{-- jenil --}}
                        {{-- darshna --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/td_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- vishal --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/vk_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- shreya --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/srs_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- meet --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/md_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- dhruvi --}}
                        {{-- mukund --}}
                        {{-- archit --}}
                        <div class="slide side-img-p"><img src="{{ asset('assets/img/team/ma_img.webp') }}"
                                class="grid__item-img remove" alt="Image 19">
                        </div>
                        {{-- keval --}}
                        {{-- zeel --}}
                    </section>
                </div>
            </div>
            </div>
            <style>
                .card_images {
                    display: flex !important;
                    justify-content: center !important;
                    align-items: center !important;
                }

                .slick-track {
                    display: flex !important;
                    justify-content: center !important;
                    align-items: center !important;
                    margin: 1rem 0px 45px 0px;
                }

                .card_images {
                    width: 230px !important;
                }

                @media screen and (min-width: 320px) {
                    .card_images {
                        width: 540px !important;
                    }
                }

                @media screen and (min-width: 768px) {
                    .card_images {
                        width: 264px !important;
                    }
                }

                .team_sec2 img {
                    height: 180px !important;
                    width: 180px !important;
                }

                @media screen and (min-width: 280px) {
                    .team_sec2 img {
                        height: 100% !important;
                        width: 100% !important;
                    }
                }

                @media screen and (min-width: 569px) {
                    .team_sec2 img {
                        height: 180px !important;
                        width: 180px !important;
                    }
                }

                @media screen and (min-width: 320px) {
                    .draggable {
                        height: 173px !important;
                    }
                }

                @media screen and (min-width: 568px) {
                    .draggable {
                        height: auto !important;
                    }
                }
            </style>
           
            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="items">
                            <div class="card_images" id="image__width">
                                <div class="slide side-img-p team_sec2"><img
                                        src="{{ asset('assets/img/team/bg_img.webp') }}" class="grid__item-img remove"
                                        alt="Image 19" id="grid_item_image">
                                </div>

                            </div>
                            <div class="card_images">
                                <div class="slide side-img-p team_sec2"><img
                                        src="{{ asset('assets/img/team/mk_img.webp') }}" class="grid__item-img remove"
                                        alt="Image 19" id="grid_item_image">
                                </div>

                            </div>
                            <div class="card_images" id="image__width">
                                <div class="slide side-img-p team_sec2"><img
                                        src="{{ asset('assets/img/team/rs_img.webp') }}" class="grid__item-img remove"
                                        alt="Image 19" id="grid_item_image">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
        </section>


        <!-- #team -->
        <!--==========================Clients Section============================-->
        @if (isset($our_client))
            <section id="clients" class="section-bg">

                <div class="container">

                    <div class="section-header">
                        <h3 class="h-paddingbottom30">Our Clients</h3>
                    </div>
                    <div class="customer-logos slider">
                        @foreach ($our_client as $client)
                            <a href="{{ $client->link ? $client->link : '#' }}">
                                <div class="slide"><img src="{{ asset('assets/img/index/clients/' . $client->image) }}"
                                        alt="{{ $client->alt ? $client->alt : ' ' }}">
                                </div>
                            </a>
                        @endforeach

                    </div>

                </div>

            </section>
        @endif
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
                <a class="carousel-control-prev" href="#testimonial" data-slide="prev" aria-label="Previous Button"> <i
                        class='fa fa-arrow-left'></i>
                </a>
                <a class="carousel-control-next" href="#testimonial" data-slide="next" aria-label="Next Button"> <i
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
        <script>
            $(document).ready(function() {
                $('.items').slick({
                    dots: true,
                    infinite: true,
                    speed: 800,
                    autoplaySpeed: 1500,
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    autoplay: true,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 568,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }

                    ]
                });
            });
        </script>
        <script>
            function timeDuration() {
                var input = document.getElementById('meetingDuration').value;
                if (input < 30 || input > 60) {
                    $("#work_time").css("display", "none");
                    return false;
                } else {
                    $("#work_time").css("display", "block");
                }
            }
        </script>
        @include('layouts.contact')
    @endsection