@extends('master')
@section('title', 'Become a Part of Webito Infotech Family')
@section('meta-keyword', 'XBecome a Part of Webito Infotech Family - Webito Infotech')
@section('meta-description',
    'At Webito Infotech, work is more than a job — it’s a calling. To build. To design. To
    code. To consult. To invent and collaborate. Join us today.')
@section('meta-url', 'https://webitoinfotech.com/career')
@section('meta-title', 'Webito Infotech Careers - India')



@section('career-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Webito Infotech Careers - India';
    $metacontent = 'At Webito Infotech, work is more than a job — it’s a calling. To build. To design. To code. To consult. To invent and collaborate. Join us today.';
    $metaname = 'Webito Infotech, Webito, jobs, careers, carreers, carrer, carrers, career, carreer, employment employement, employemnt, emolyment, job opportunity/opportunities,  entry-level, experienced professional, seekers, job seekers, students, university, college, value, purpose, innovation, Webito Infotech jobs blog, Webito Infotech Jobs Global, cognitive, Watson, explore jobs, new collar, skills, talent, programs, programme, partner, partnership, work, diverse, diversity, inclusive, inclusivity, inclusion, benefits, corporate citizen, future, STEM, Lime, GEM, engineers, MBAs, transform, transformation, P-Tech, veteran/s, veteran 2K, hiring initiative, potential, science';
    $metaproperty = 'Webito Infotech - Career Development Company';
    ?>

    <link href="{{ asset('assets/css/career.css') }}" rel="stylesheet">

    <section class="main-page-header">
        <div class="container">
            <div class="page-header-content careers-content-block">
                <h1>Become a Part of Webito Infotech Family</h1>
                <p>Joining Webito Infotech could be your life changing decision in doing so with endless goodies
                    on the way. It is a home away from home, where we work as a team for a common goal - to evolve
                    constantly with the latest technologies while taking utmost care of our most valuable assets, our
                    employees. Experience the ‘Feel Good factor’ and the value of ‘Work-life balance’ by working with us.
                </p>
                <h3>We hire character. Train skill.</h3><span>– Hiring team</span>
                <!---->
            </div>
        </div>
    </section>


    <section class="we-offer-section" id="about">
        <div class="container">
            <div class="we-offer-content">
                <h2>We offer careers, not jobs</h2>
                <p>This is exactly where Webito Infotech stands apart from the others. To evolve with innovations,
                    we always welcome and recognise Webito Infotechians who come up with great ideas. Voice of employees
                    matters to
                    us. Webito Infotech has the global presence, so grab the opportunity to work with top MNCs of the world.
                    Join
                    us and give yourself an opportunity to take your career to the newest heights.</p>
            </div>

            <div class="position-listing">
                <!---->
                <div class="listing-block">
                    <h3>Job openings</h3>
                    {{-- <div class="listing">

                        <div class="listing-box"><a href="/hiring?id=2">
                                <div class="position-name">
                                    <h4>Business Analyst</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                    </div> --}}
                    <div id="jobData" class="d-flex flex-wrap"></div>
                    <a href="https://webito.keka.com/careers" target="_blank">
                    <button class="ml-2 mt-4 pt-2" id="desc-contact-btn1">View All Job Details</button>
                    </a>
                </div>
                <div class="listing-block">
                    <h3>Open Positions in Engineering</h3>
                    <div class="listing-row">
                        <!---->
                        <div class="listing-box"><a href="/hiring?id=8">
                                <div class="position-name">
                                    <h4>Mern Stack Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>4 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=4">
                                <div class="position-name">
                                    <h4>Full Stack Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>6 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=3">
                                <div class="position-name">
                                    <h4>DotNet MVC Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=11">
                                <div class="position-name">
                                    <h4>Sr. Laravel Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=9">
                                <div class="position-name">
                                    <h4>React Native Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>3 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=12">
                                <div class="position-name">
                                    <h4>Sr. QA Engineer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=5">
                                <div class="position-name">
                                    <h4>iOS with Flutter Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>7 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=1">
                                <div class="position-name">
                                    <h4>Android with Flutter Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>7 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=13">
                                <div class="position-name">
                                    <h4>WordPress Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=10">
                                <div class="position-name">
                                    <h4>ReactJs Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>7 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=7">
                                <div class="position-name">
                                    <h4>Magento Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>0 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=6">
                                <div class="position-name">
                                    <h4>Laravel Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>5 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=14">
                                <div class="position-name">
                                    <h4>Sr. UI/UX Designer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=15">
                                <div class="position-name">
                                    <h4>Project Manager</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=16">
                                <div class="position-name">
                                    <h4>Mean Stack Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=17">
                                <div class="position-name">
                                    <h4>Sr. Mean Stack Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=18">
                                <div class="position-name">
                                    <h4>Sr. Mern Stack Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=19">
                                <div class="position-name">
                                    <h4>Sr. ReactJs Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=20">
                                <div class="position-name">
                                    <h4>AngularJS Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>3 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=21">
                                <div class="position-name">
                                    <h4>Sr. React Native Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=22">
                                <div class="position-name">
                                    <h4>QA Automation (Appium + Selenium)</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=23">
                                <div class="position-name">
                                    <h4>DotNET Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=24">
                                <div class="position-name">
                                    <h4>Drupal Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>0 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=25">
                                <div class="position-name">
                                    <h4>DevOps</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=26">
                                <div class="position-name">
                                    <h4>Python Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=27">
                                <div class="position-name">
                                    <h4>Sr. Python Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=28">
                                <div class="position-name">
                                    <h4>Tech Lead (Python)</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=29">
                                <div class="position-name">
                                    <h4>React Native (Tech Lead)</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=30">
                                <div class="position-name">
                                    <h4>JavaScript Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>4 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=31">
                                <div class="position-name">
                                    <h4>Sr. JavaScript Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=32">
                                <div class="position-name">
                                    <h4>JavaScript (Tech Lead)</h4>
                                </div>
                                <div class="position-number">
                                    <p>1 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=33">
                                <div class="position-name">
                                    <h4>VueJS Developer</h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>
                        <div class="listing-box"><a href="/hiring?id=34">
                                <div class="position-name">
                                    <h4>Shopify (Backend)

                                    </h4>
                                </div>
                                <div class="position-number">
                                    <p>2 Positions</p><span class="fa fa-long-arrow-right"></span>
                                </div>
                            </a></div>


                    </div>
                </div>
            </div>
            <div class="find-job-section">
                <div class="bg-color-box">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="img-box">
                                <picture>
                                    {{-- <source type="image/webp"
                                    srcset="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/career-block-employee.svg">
                                <source
                                    srcset="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/career-block-employee.svg"
                                    type="image/svg"><img alt=""
                                    srcset="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/career-block-employee.svg"> --}}
                                </picture>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-box" style="margin-bottom: -19px;">
                                <h2>Couldn’t find the job you are looking for?</h2>
                                <p style="color: #0b6bd3;">Send your resume on <a
                                        href="mailto:{{ env('HR_EMAIL') }}">{{ env('HR_EMAIL') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brave-thinker-section">
        <div class="brave-thinker-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Door is Open for Big Thinkers</h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p>The credit for success we have achieved goes to our people, who think
                            out-of-the-box. And this is why we give a lot of value to our recruitment process. The
                            state-of-the-art infrastructure, tools, systems, and the positive mindset of the other team
                            members help you grow further and nurture your skills. </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p>Get yourself heard if you believe that you can add value with your passion,
                            creativity, and enthusiasm. The team of mentors working at Webito Infotechis always there for
                            you when
                            needed. Learn from some of the very best in the business. This is for all the innovators and
                            storytellers out there.</p>
                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="image-gallery">

            <div class="image-row">
                <div class="grid-sm">
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-v1.jpg"
                            class=" ng-lazyloaded"></div>
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-2.jpg"
                            class=" ng-lazyloaded"></div>
                </div>
                <div class="grid-lg">
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-3.jpg"
                            class=" ng-lazyloaded"></div>
                </div>
                <div class="grid-sm">
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-4.jpg"
                            class=" ng-lazyloaded"></div>
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-7v.jpg"
                            class=" ng-lazyloaded"></div>
                </div>
                <div class="grid-sm">
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-6.jpg"
                            class=" ng-lazyloaded"></div>
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-5.jpg"
                            class=" ng-lazyloaded"></div>
                </div>
                <div class="grid-sm">
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-v8.jpg"
                            class=" ng-lazyloaded"></div>
                    <div class="img-box"><img alt=""
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2021/03/career-img-v9.jpg"
                            class=" ng-lazyloaded"></div>
                </div>
            </div>

        </div> --}}
    </section>

    <section class="our-perks-sec">
        <div class="container">
            <!---->
            <h2>Perks of Joining Webito Infotech</h2>
            <div class="row">
                <!---->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-five-days-week"
                                srcset="{{ asset('assets/img/career/icon-six-days-week1.svg') }}">
                        </picture>
                        <!---->
                        <h3>6 Days a Week</h3>
                        <!---->
                        <p>Sunday off to promote work-life balance and mental peace.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-flexible-hours"
                                srcset="{{ asset('assets/img/career/icon-flexible-hours1.svg') }}">
                        </picture>
                        <!---->
                        <h3>Flexible Timings</h3>
                        <!---->
                        <p>To empower employees to manage things in a fast-paced life.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-wfh" srcset="{{ asset('/assets/img/career/icon-wfh.svg') }}">
                        </picture>
                        <!---->
                        <h3>Work From Home</h3>
                        <!---->
                        <p>Flexibility to allow employees to take personal time with work.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-onsite-opportunities"
                                srcset="{{ asset('assets/img/career/icon-onsite-opportunities1.svg') }}">
                        </picture>
                        <!---->
                        <h3>Training</h3>
                        <!---->
                        <p>Practical training &amp; learning from the experts and mentors.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-rewards" srcset="{{ asset('assets/img/career/icon-rewards1.svg') }}">
                        </picture>
                        <!---->
                        <h3>Rewards</h3>
                        <!---->
                        <p>To value and appreciate the performance on a regular basis.
                        </p>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-gym-membership" srcset="/assets/img/career/icon-gym-membership1.svg">
                        </picture>
                        <!---->
                        <h3>Gym Membership</h3>
                        <!---->
                        <p>Free yearly membership at a gym to promote health &amp; fitness
                        </p>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-tour-and-picnics"
                                srcset="{{ asset('assets/img/career/icon-tour-and-picnics1.svg') }}">
                        </picture>
                        <!---->
                        <h3>Team Building</h3>
                        <!---->
                        <p>Indoor &amp; outdoor team building workshops and activities.
                        </p>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="icon-parental-leave" srcset="/assets/img/career/icon-parental-leave.svg">
                        </picture>
                        <!---->
                        <h3>Parental Leaves</h3>
                        <!---->
                        <p>Get a time-off, welcome your angel &amp; spend quality time before you return.
                        </p>
                    </div>
                </div> --}}
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-perks-box">
                        <picture>
                            <img alt="/assets/img/career/icon-recreational-activities"
                                srcset="/assets/img/career/icon-recreational-activities1.svg">
                        </picture>
                        <!---->
                        <h3>Recreation Ground</h3>
                        <!---->
                        <p>Pool table, table tennis. Cricket, or anything you may ask for.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    @php
        $test = DB::table('testimonials')->get();
    @endphp
    {{-- @foreach ($test as $test) --}}
    <section class="team-testimonial" id="about">

        <div class="container">

            <h2> What our team says?</h2>
            <div class=" team-testimonial-slider show-more-item" role="toolbar">
                {{-- krishna --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide00" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Krishna" src="{{ asset('assets/img/team/kp_img.webp') }}">
                        </div>
                        <p>"For me, it's been almost more than a year in Webito. I am proud to say Webito and I had started
                            our journey together. I have seen Webito growing wonderfully into an amazing workplace. Here
                            every employee is always given a chance to share his/her problems which helps to establish a
                            healthy relationship. I look forward to being a part of this organization for a long time to
                            come.
                            "</p>
                    </div>
                </div>
                {{-- chelsi --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Chelsi" src="{{ asset('assets/img/team/cv_img.webp') }}">
                        </div>
                        <p>"As a curious employee, I got the right exposure as I had the opportunity to connect with learned
                            colleagues, enthusiastic clients, and start-up founders. The learning is great through practical
                            experiences and the growth opportunities are good. I have been with the organization for more
                            than six months now and have seen myself transform as a professional in more than one way.
                            "</p>
                    </div>
                </div>
                {{-- Rushikesh --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide02" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Rushikesh" src="{{ asset('assets/img/team/ra_img.webp') }}">
                        </div>
                        <p>"I have been one of the first five members who joined the team on the very first day, I have seen
                            this technology tree grow in India from the very root, from the 5 members it is now 30 members
                            team, this itself speaks a lot. The firm gave me some technical challenges which helped me grow
                            logically and technically, there are also ample opportunities to develop technical and software
                            development skills.
                            "</p>
                    </div>
                </div>
                {{-- Shruti --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Shruti" src="{{ asset('assets/img/team/sm_img.webp') }}">
                        </div>
                        <p>"Webito has provided me with a platform to learn, evolve, and constantly evaluate my progress.
                            The opportunities presented are great for me in the longer scheme of my career growth too. They
                            not only enabled me to implement new ideas but also gave me the platform to learn from my
                            mistakes. In the past 1 year, continuous feedback and conversation with my manager have groomed
                            my HR skills and have helped me build a vision of what I would like to achieve in the coming few
                            years.
                            "</p>
                    </div>
                </div>
                {{-- keval --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Keval" src="">
                        </div>
                        <p>As a senior React Native developer, I have been able to work on a variety of projects across
                            different industries, from e-commerce to healthcare.has allowed me to build responsive and
                            dynamic applications that meet the unique needs of businesses and consumers. I certainly look
                            forward to continuing to grow my skills and contribute to the development of innovative mobile
                            applications.
                        </p>
                    </div>
                </div>
                {{-- Prachi --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Prachi" src="{{ asset('assets/img/team/pd_img.webp') }}">
                        </div>
                        <p>"Throughout my tenure at Webito Infotech, I have so many opportunities to learn and grow.
                            Generally, Company focuses on employees to grow continuously in their career as well as the
                            working environment is superb! Moreover, the energy of this place is contagious and keeps me
                            moving. So grateful to be a part of the Webito team. I take immense pride in being associated
                            with Webito!"</p>
                    </div>
                </div>

            </div>

            <div class=" team-testimonial-slider show-more-item" style="display: none;" role=" toolbar">
                {{-- parth --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        {{-- { asset('assets/img/team/jd_img.webp') }} --}}
                        <div class="img-box"><img alt="Parth" src="{{ asset('assets/img/team/pak_img.webp') }}">
                        </div>
                        <p>"I just love working for this company due to its values and that these are demonstrated each and
                            every day by everyone who works here. I especially love the adult-to-adult culture, the trust,
                            and the respect shown towards our experience.
                            "</p>
                    </div>
                </div>
                {{-- Zeel --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Zeel" src="{{ asset('assets/img/team/js_img.webp') }}">
                        </div>
                        <p>"I am really grateful to work at Webito. I find it a place where I can grow together with the
                            organization. It has helped me reach great heights by offering me new learning opportunities and
                            strengthening my inherent skills in recruiting and organizing with its rich and diverse
                            organizational culture. I would say Webito is a place to work where we can 'accomplish more
                            together
                            ."</p>
                    </div>
                </div>
                {{-- shivani --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide02" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Shivani" src="{{ asset('assets/img/team/ss_img.webp') }}">
                        </div>
                        <p>"I have been working with Webito for the past 1 years. It is the best job that I had so far.
                            Working on super complex problems that have not been explored before, makes the whole experience
                            more like discovery rather than engineering. I think Webito’s best assets are its people. I have
                            worked with a group of great people who make coming to work a great pleasure."</p>
                        {{-- <div class="team-profile">
                            <h6>Shivani Savliya</h6>
                            </div> --}}
                    </div>
                </div>
                {{-- rutvik --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Rutvik" src="{{ asset('assets/img/team/rk_img.webp') }}">
                        </div>
                        <p>"Webito has a real family atmosphere. There is a culture that belongs to the whole company. It
                            motivates everyone to do the right thing. It is configured to be attached, which has a really
                            positive effect on our client-candidate relationship. The thing I love the most about this
                            company is that the doors are always open here, ensuring an honest and transparent workplace."
                        </p>
                    </div>
                </div>
                {{-- dipesh --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="{{ asset('assets/img/team/db_img.webp') }}">
                        </div>
                        <p>As a Jr. Flutter developer, I've had the opportunity to learn and grow in an exciting field
                            that's constantly evolving. I've been able to develop mobile applications using the Flutter
                            framework, which allows me to build cross-platform applications that offer a seamless user
                            experience. One of the things I appreciate most about working with Flutter is the flexibility
                            and ease of use it offers. I've been able to build high-quality mobile applications quickly and
                            efficiently. I am grateful for the opportunities and experiences that Webito has provided me.
                        </p>
                    </div>
                </div>

                {{-- chirag --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="{{ asset('assets/img/team/cs_img.webp') }}">
                        </div>
                        <p>"I just love working for this company due to its values and that these are demonstrated each and
                            every day by everyone who works here. I especially love the adult-to-adult culture, the trust,
                            and the respect shown towards our experience.
                            "</p>
                    </div>
                </div>
            </div>

            <div class=" team-testimonial-slider show-more-item" style="display: none;" role=" toolbar">
                {{-- Juli --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Juli" src="{{ asset('assets/img/team/dj_img.webp') }}">
                        </div>
                        <p>"When I joined Webito I didn't fully believe in the statement that people in the organization
                            could work together or be collaborative as colleagues, regardless of role or rank. However, as a
                            member of the organization now for a while, I'm always amazed at the intelligence and the
                            generosity that people support each other every day."</p>
                    </div>
                </div>
                {{-- princi laravel --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide00" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Princi" src="{{ asset('assets/img/team/pm_img.webp') }}">
                        </div>
                        <p>"My colleagues are consistently the best experts in their respective fields and are ready to
                            support, challenge and collaborate to ensure that Webito Infotech remains a leader in their
                            field.
                            "</p>
                    </div>
                </div>
                {{-- dhruvi --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        {{-- {{ asset('assets/img/team/sk_img.webp') }} --}}
                        <div class="img-box"><img alt="dhruvi" src="{{ asset('assets/img/team/ds_img.webp') }}">
                        </div>
                        <p>"I love working with Webito. At the start, everything was new to me. There were many things that
                            I did not know but here I got a chance to learn them. Within a few months, I started working on
                            live products, that was the best thing I could ever ask for as a fresher. I got to learn product
                            life cycles in the production environment very closely. The thing I love about Webito is
                            everyone here is very approachable. Everyone is friendly and the work environment is very
                            comfortable here. I truly feel blessed that I started my career at such a great workplace as
                            Webito.
                            "</p>
                    </div>
                </div>
                {{-- Atul --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Atul" src="{{ asset('assets/img/team/am_img.webp') }}">
                        </div>
                        <p>"I am proud to be associated with Webito Infotech for so long. The extraordinary growth-inducing
                            environment has benefitted a lot of employees. The easy-to-reach leadership creates a positive
                            environment all around. Webito provides a good platform for career growth where talent and hard
                            work are recognized and appreciated. I am grateful to be part of the Webito team and look
                            forward to being associated for many more years to come."</p>
                    </div>
                </div>
                {{-- harmi --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide00" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Harmi" src="{{ asset('assets/img/team/hv_img.webp') }}">
                        </div>
                        <p>"It is small pieces of the mosaic that bonds together to make one great piece of art. It's the
                            same for Webito Infotech and also for every single employee here. Every day, you learn something
                            new - making collective goals ahead of individual achievement.
                            "</p>
                    </div>
                </div>
                {{-- Mukund --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide00" style="">
                    <div class="team-testimonial-content">
                        {{-- {{ asset('assets/img/team/hv_img.webp') }} --}}
                        <div class="img-box"><img alt="Mukund" src="{{ asset('assets/img/team/pak_img.webp') }}">
                        </div>
                        <p>I have enjoyed working with Node JS because of its versatility and the ability to use it across
                            different platforms.This has opened up new possibilities for me as a developer and has enabled
                            me to create applications that are more engaging and interactive.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" team-testimonial-slider show-more-item" style="display: none;" role=" toolbar">
                {{-- priyanka kapadiya --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide05" style="">
                    <div class="team-testimonial-content">
                        {{--  --}}
                        <div class="img-box"><img alt="priyanka" src="{{ asset('assets/img/team/pk_img.webp') }}">
                        </div>
                        <p>"Working with Webito has been a wonderful experience. I had been entrusted with opportunities and
                            responsibilities early on, helping me accelerate my growth. The work culture of Webito is
                            nurturing. I wish I could have joined Webito earlier.
                            "</p>
                    </div>
                </div>
                {{-- shreya --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide05" style="">
                    <div class="team-testimonial-content">
                        {{--  --}}
                        <div class="img-box"><img alt="sherya" src="{{ asset('assets/img/team/srs_img.webp') }}">
                        </div>
                        <p>"Webito Infotech provides me with a vision that helped me broaden my horizon. Here, I always feel
                            connected with everyone like a family. This organization creates an amazing ambiance that
                            instills enthusiasm & motivation to achieve goals
                            "</p>
                    </div>
                </div>
                {{-- Archit --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="{{ asset('assets/img/team/ma_img.webp') }}">
                        </div>
                        <p>As a graphic designer, I always have the opportunity to be creative and solve visual problems in
                            a way that communicates ideas and messages through a variety of mediums. Working in this field
                            has been incredibly rewarding, as I am able to use my skills to bring brands and ideas to life.
                            I appreciate the dynamic nature of the graphic design industry, which constantly presents new
                            challenges and opportunities for growth. I have been able to stay on the cutting edge of new
                            technologies and trends through continuous learning and professional development. This has
                            allowed me to expand my knowledge and contribute innovative ideas to my team.This all happened
                            because of remarkable support of Webito and my team.
                        </p>
                    </div>
                </div>
                {{-- Purvisha --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide00" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Purvisha" src="{{ asset('assets/img/team/pv_img.webp') }}">
                        </div>
                        <p>"Since my early days, I always thought of starting my career with an organization that is in a
                            growing phase as I wanted to grow with the company. I think joining Webito as a content writer
                            has been one of the best decisions of my life as it gives me an immense opportunity to exercise
                            my writing skills with new and challenging tasks every day. I'm proud to be a part of Webito."
                        </p>
                    </div>
                </div>
                {{-- priyanka flutter --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="{{ asset('assets/img/team/prk_img.webp') }}">
                        </div>
                        <p>I enjoy collaborating with clients and cross-functional teams to develop visual concepts that
                            effectively communicate the intended message as a graphic designer. I also appreciate the
                            supportive and inclusive culture within the design community. The atmosphere is one of
                            collaboration, where everyone's ideas and opinions are valued in Webito. Which has created a
                            positive work environment where I feel comfortable expressing my thoughts and suggestions. As a
                            graphic designer, I am able to use my creativity and design skills to make a positive impact on
                            the world. From creating impactful social media campaigns to designing visually stunning
                            branding and packaging, I am proud to be a part of a field that helps make the world a more
                            beautiful and engaging place.Thank you Webito!!!
                        </p>
                    </div>
                </div>
                {{-- nishtha --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Nishtha" src="{{ asset('assets/img/team/nb_img.webp') }}">
                        </div>
                        <p>"Complete 360-degree belief in the company. Everyone I meet has an equally wonderful and positive
                            attitude towards the work they do personally and the way the company works. To be honest I
                            should have joined early.
                            "</p>
                    </div>
                </div>
            </div>

            <div class=" team-testimonial-slider show-more-item" style="display: none;" role=" toolbar">
                {{-- janvi --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        {{-- {{ asset('assets/img/team/nb_img.webp') }} --}}
                        <div class="img-box"><img alt="Janvi" src="{{ asset('assets/img/team/jd_img.webp') }}">
                        </div>
                        <p>Working as a frontend developer has allowed me to collaborate with designers and other developers
                            to create stunning and functional websites. Being able to work in a team and bring different
                            perspectives to the table has been one of the most rewarding aspects of my job.
                        </p>
                    </div>
                </div>
                {{-- Meet --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide05" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Meet" src="{{ asset('assets/img/team/md_img.webp') }}">
                        </div>
                        <p>"Working with Webito has been a wonderful experience. I had been entrusted with opportunities and
                            responsibilities early on, helping me accelerate my growth. The work culture of Webito is
                            nurturing. I wish I could have joined Webito earlier.
                            "</p>
                    </div>
                </div>
                {{-- ankita --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide05" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="{{ asset('assets/img/team/ag_img.webp') }}">
                        </div>
                        <p>As an SEO specialist, I have learned the importance of conducting thorough keyword research and
                            optimising website content to improve search engine rankings. This has allowed me to drive
                            targeted traffic to websites and increase online visibility for clients. This has enabled me to
                            provide effective SEO strategies that deliver measurable results for clients.

                        </p>
                    </div>
                </div>
                {{-- vishal --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="vishal" src="{{ asset('assets/img/team/vk_img.webp') }}">
                        </div>
                        <p>"I just love working for this company due to its values and that these are demonstrated each and
                            every day by everyone who works here. I especially love the adult-to-adult culture, the trust,
                            and the respect shown towards our experience.
                            "</p>
                    </div>
                </div>
                {{-- Mansi --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        {{-- assets/img/team/td_img.webp --}}
                        <div class="img-box"><img alt="Mansi" src="{{ asset('assets/img/team/mb_img.webp') }}">
                        </div>
                        <p>"I love working with Webito. At the start, everything was new to me. There were many things that
                            I did not know but here I got a chance to learn them. Within a few months, I started working on
                            live products, that was the best thing I could ever ask for as a fresher. I got to learn product
                            life cycles in the production environment very closely. The thing I love about Webito is
                            everyone here is very approachable. Everyone is friendly and the work environment is very
                            comfortable here. I truly feel blessed that I started my career at such a great workplace as
                            Webito.
                            "</p>
                    </div>
                </div>

                {{-- Darshna --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="{{ asset('assets/img/team/td_img.webp') }}">
                        </div>
                        <p>"I love working with Webito. At the start, everything was new to me. There were many things that
                            I did not know but here I got a chance to learn them. Within a few months, I started working on
                            live products, that was the best thing I could ever ask for as a fresher. I got to learn product
                            life cycles in the production environment very closely. The thing I love about Webito is
                            everyone here is very approachable. Everyone is friendly and the work environment is very
                            comfortable here. I truly feel blessed that I started my career at such a great workplace as
                            Webito.
                            "</p>
                    </div>
                </div>
            </div>

            <div class=" team-testimonial-slider show-more-item" style="display: none;" role=" toolbar">
                {{-- harshit --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        {{-- assets/img/team/td_img.webp --}}
                        <div class="img-box"><img alt="harshit" src="{{ asset('assets/img/team/hm_img.webp') }}">
                        </div>
                        <p>"I love working with Webito. At the start, everything was new to me. There were many things that
                            I did not know but here I got a chance to learn them. Within a few months, I started working on
                            live products, that was the best thing I could ever ask for as a fresher. I got to learn product
                            life cycles in the production environment very closely. The thing I love about Webito is
                            everyone here is very approachable. Everyone is friendly and the work environment is very
                            comfortable here. I truly feel blessed that I started my career at such a great workplace as
                            Webito.
                            "</p>
                    </div>
                </div>
                {{-- Dhruv --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="Dhruv" src="{{ asset('assets/img/team/dk_img.webp') }}">
                        </div>
                        <p>I have incredible experience working at this company. I have grown personally and professionally
                            and I owe much of that growth to the wonderful team and supportive environment that has been
                            created. One of the things I appreciate most about this company is the culture of teamwork and
                            collaboration. I want to thank you for giving me this incredible experience.
                        </p>
                    </div>
                </div>
                {{-- jenil --}}
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide05" style="">
                    <div class="team-testimonial-content">
                        {{-- assets/img/team/ag_img.webp --}}
                        <div class="img-box"><img alt="jenil" src="{{ asset('assets/img/team/jr_img.webp') }}">
                        </div>
                        <p>As a React JS developer, I build web applications that are easy to use and adapt to different
                            devices. This experience exposed me to various business models, technologies, and practices that
                            helped me become a better developer. I also have access to numerous online resources and forums
                            that allow me to troubleshoot issues and expand my knowledge continuously.

                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="show-more-btn d-grid gap-2 col-6 mx-auto"
                style="width: 121px;background: #4675e8;color: white; padding: 19px;display: flex;justify-content: center;border-radius:32px;">
                Load More</div>

        </div>

    </section>
    {{-- @endforeach --}}

    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/img/career/icon-rewards1.svg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/img/career/icon-tour-and-picnics1.svg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/img/career/icon-flexible-hours1.svg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}
    {{-- <section class="team-testimonial" id="about">
        <div class="container">
            <h2> What our team says?</h2>
            <div class="team-testimonial-slider" role="toolbar">
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide00" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="assets/img/team/chelsi.webp">
                        </div>
                        <p>"Webito Infotech offers wonderful working environment that enables me to
                            understand the
                            perspectives of global clients. I can keep pace with an IT ecosystem and become a presenter in
                            international market with the help of a team of supportive mentors here."</p>

                    </div>
                </div>
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide01" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="assets/img/team/rushikesh.webp">
                        </div>
                        <p>"Time flies so fast! Almost over a decade later, I have developed a lot during
                            my time here that has challenged me in numerous ways. It is a company where you always have a
                            voice in your team no matter who you are, I am glad to be part of it!"</p>
                        <div class="team-profile">
                            <!---->

                            <!----><span>Tech Lead, Mobile App</span>
                        </div>
                    </div>
                </div>
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide02" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="assets/img/team/Krishna.webp">
                        </div>
                        <p>"It is small pieces of the mosaic that bonds together to make one great piece of
                            art. It's the same for Webito Infotech and also for every single employee here. Everyday, you
                            learn
                            something new - making collective goals ahead of individual achievements."</p>
                        <div class="team-profile">
                            <!---->

                            <!----><span>Program Manager, Full Stack Developer</span>
                        </div>
                    </div>
                </div>
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide03" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="assets/img/team/divya.webp">
                        </div>
                        <p>"Webito Infotech has a human touch and you can readily coordinate with the top
                            management. The organization focuses on bringing out the hidden talent by creating a healthy
                            competition fuelled by the willingness to contribute and getting reward."</p>
                        <div class="team-profile">
                            <!---->

                            <!----><span>UI/UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide04" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="assets/img/team/Purvisha.webp">
                        </div>
                        <p>"Individual ambitions serve the common goal - this is exactly what I believed
                            when I joined Webito Infotech with a vision and ambition. I firmly believe that Webito Infotech
                            is
                            the right
                            place to learn and to execute my thoughts and ideas on any platform."</p>
                        <div class="team-profile">
                            <!---->

                            <!----><span>Technology Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="team-col" tabindex="-1" role="option" aria-describedby="slick-slide05" style="">
                    <div class="team-testimonial-content">
                        <div class="img-box"><img alt="" src="assets/img/team/shivani.webp">
                        </div>
                        <p>"Webito Infotech provides me a vision that helped me broaden my horizon. Here, I
                            always
                            feel connected with everyone like a family. This organisation creates an amazing ambience which
                            instills enthusiasm &amp; motivation to achieve goals."</p>
                        <div class="team-profile">
                            <!---->

                            <!----><span>Wordpress Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="dedicated-faqs pad-t-b">

        <div class="container">
            <div class="title-block">
                <!---->
                <h2>FAQs</h2>
            </div>

            <ul class="collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header card-title"><i class="fa fa-angle-right" aria-hidden="true"></i><a>How
                            much
                            experience do I need to apply for a specific position?</a>
                    </div>
                    <div class="collapsible-body">
                        <p>Please click on the opening positions (on this page) based upon your area of interest. You will
                            land on a page where you can view the minimum experience and qualification requirements. We hire
                            people with a wide range of professional experience and educational background.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header card-title"><i class="fa fa-angle-right" aria-hidden="true"></i>What
                        documents
                        do I need
                        to submit for applying online?</div>
                    <div class="collapsible-body">
                        <p>You only have to upload an up-to-date copy of your CV/resume along with filling up the details
                            asked in the online form.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header card-title"><i class="fa fa-angle-right" aria-hidden="true"></i>How
                        do I get
                        notified that
                        my job application has been received by you?</div>
                    <div class="collapsible-body">
                        <p>You will receive a “Thank You” message confirming that your application is received for a review.
                            If your candidate profile and application meet the qualifications for a selected position, a
                            recruiter will be in contact with you at the earliest.
                    </div>
                </li>
                <li>
                    <div class="collapsible-header card-title"><i class="fa fa-angle-right"
                            aria-hidden="true"></i><a>What
                            is
                            the size limit of the document to upload while applying online?</a>
                    </div>
                    <div class="collapsible-body">
                        <p>A single document with a size not bigger than 5 MB can be uploaded.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header card-title"><i class="fa fa-angle-right" aria-hidden="true"></i>What
                        if I get
                        an error
                        while applying online or uploading a document?</div>
                    <div class="collapsible-body">
                        <p>We advise you check your internet connection and give it another try. However, if you get the
                            same result after trying again, kindly contact the recruitment team to explain the reason and
                            apply at <a href="mailto:hrwebitoinfotech@gmail.com">hrwebitoinfotech@gmail.com</a>.</p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header card-title"><i class="fa fa-angle-right" aria-hidden="true"></i>How
                        does the
                        recruitment
                        process at Webito Infotech work?</div>
                    <div class="collapsible-body">
                        <p>The length and nature of the recruitment process at Webito Infotech depends on a case-to-case
                            basis and
                            your location. However, generally your application once received, is reviewed by the recruitment
                            team to ensure if the requirements are met. If they do meet, you will be contacted by them to
                            schedule an interview.
                            <br>
                            The interview process, as said earlier, may include multiple interviews by the right Webito
                            Infotech
                            representatives. At times, the CEO can also call you for a session. You can be asked to perform
                            tasks given prior or during the interview sessions. There is also a possibility that you can be
                            invited for an assessment day or to perform practical tests.
                    </div>
                </li>
            </ul>

        </div>
    </section>
@endsection


{{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".show-more-btn").click(function(e) {
            $(".show-more-item:hidden").slice(0, 1).fadeIn();
            if ($(".show-more-item:hidden").length < 1) $(this).fadeOut();
        })
    })
</script>
<script>
    function expandAll() {
        $(".collapsible-header").addClass("active");
        $(".collapsible").collapsible({
            accordion: false
        });
    }

    function collapseAll() {
        $(".collapsible-header").removeClass(function() {
            return "active";
        });
        $(".collapsible").collapsible({
            accordion: true
        });
        $(".collapsible").collapsible({
            accordion: false
        });
    }
</script>
<script>
    // const apiUrl = 'https://webito.keka.com/careers/api/embedjobs/active/fb55fee4-313c-40c0-b587-28269479f28a?'; // Replace this with the actual API URL

    // fetch(apiUrl)
    //     .then(response => response.json())
    //     .then(data => {
    //         // Handle the data
    //         console.log(data);
    //         var data = data; 
    //     })
    //     .catch(error => {
    //         // Handle any errors that occurred during the API call
    //         console.error('Error:', error);
    //     });
    // Define the API URL
    const apiUrl = 'https://webito.keka.com/careers/api/embedjobs/active/fb55fee4-313c-40c0-b587-28269479f28a';
    console.log(apiUrl);
    // Function to fetch and display data
    function fetchAndDisplayData() {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the data and create the HTML content
                let htmlContent = '';
                console.log(data);
                data.forEach(job => {
                    let jobLocationsString = '';
                    job.jobLocations.forEach(location => {
                        jobLocationsString += `${location.name}, `;
                    });
                    jobLocationsString = jobLocationsString.slice(0, -2);

                    htmlContent += `
            <div class="col-sm-6 col-12">
                <div class="listing">

<div class="listing-box"><a href="https://webito.keka.com/careers/jobdetails/${job.id}" target="_blank">
        <div class="position-name">
            <h4>${job.title}</h4>
        </div>
        <div class="position-number">
            <p>${jobLocationsString}</p><span class="fa fa-long-arrow-right"></span>
        </div>
    </a></div>
                </div>
                </div>
                
         
        `;
                });

                // Update the jobData div with the HTML content
                const jobDataDiv = document.getElementById('jobData');
                jobDataDiv.innerHTML = htmlContent;
            })
            .catch(error => {
                // Handle any errors that occurred during the API call
                console.error('Error:', error);
            });
    }

    // Call the function to fetch and display data when the page loads
    window.onload = fetchAndDisplayData;
</script>
<script src="https://code.jquery.com/jquery-2.0.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
