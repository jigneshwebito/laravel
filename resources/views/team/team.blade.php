@extends('master')
@section('title', 'Team - Webito Infotech')

@section('meta-description',
    'Meet the talented and dedicated team of experts behind Webitoinfotech.com. Our team brings
    together a wealth of experience and knowledge.')
@section('meta-url', 'https://webitoinfotech.com/team')
@section('meta-keyword', 'Team - Webito Infotech')
@section('meta-title', 'Team - Webito Infotech')

@section('teampage-contain')
    <?php
    $seotitle = 'Team of Webito Infotech Software development Company';
    $metacontent = 'Top Employees who can Developed Web, Mobile App and Custom Software';
    $metaname = 'Software development Company, Application Development Company Team';
    $metaproperty = 'Webito Infotech - Transforming Ideas. Digitally.';
    ?>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/team.css') }}" />
    <script>
        !(function() {
            document.documentElement.className = "js";
            var e, t;
            ((t = document.createElement("style")).innerHTML =
                "root: { --tmp-var: bold; }"),
            document.head.appendChild(t),
                (e = !!(
                    window.CSS &&
                    window.CSS.supports &&
                    window.CSS.supports("font-weight", "var(--tmp-var)")
                )),
                t.parentNode.removeChild(t),
                e ||
                alert(
                    "Please view this demo in a modern browser that supports CSS Variables."
                );
        })();
    </script>
    {{-- </head> --}}
    {{-- <body class="loading"> --}}
    <h1 style="display:none;">Team Page</h1>
    {{-- @include('team.common.team-section')

    @include('team.common.team-section2') --}}
    {{-- <div class="cursor-team">
        <svg class="cursor__svg" width="0" height="400">
            <circle vector-effect="non-scaling-stroke" class="cursor__svg-circle" cx="40" cy="40"
                r="20" />
        </svg>
        <span class="cursor__text"></span>
    </div>
    <script src="{{ asset('assets/js/team.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/team-new.css') }}">
    <section class="position-relative team_section " style="overflow-x:clip;">
        <div class="container">
            <div class="row ">
                <div class="col-12">

                    <!-- Brand LOGO -->
                    <div class="brand_icon ">
                        <img src="{{ asset('assets/img/team/fire_gif.gif') }}"
                            class="img-fluid
                                fire_gif" alt="">
                        <img src="{{ asset('assets/img/team/logo.png') }}"
                            class="img-fluid
                                brand_logo" alt="">
                    </div>
                    <!-- End Brand LOGO -->

                    <!-- Start First Circle -->
                    <div class="">
                        <div class="company_ceo"></div>
                        <div class="ceo_Circle">
                            <div class="firstCircle">
                                <div class="shadow_effect seniorItem
                                        item_Dot itemDot_1"
                                    data_tab="1" onmouseenter="func()" onmouseleave="func2()">
                                    <img src="{{ asset('assets/img/index/team/brijesh.webp') }}"
                                        class="img-fluid avatar-xxl rounded-circle user_img_left
                                            senior_emp"
                                        alt="seniorEMP">
                                </div>

                                <div class="shadow_effect seniorItem
                                        item_Dot itemDot_2"
                                    data_tab="2" onmouseenter="func()" onmouseleave="func2()">
                                    <img src="{{ asset('assets/img/index/team/manav.jpg') }}"
                                        class="img-fluid avatar-xxl rounded-circle user_img_left
                                            senior_emp"
                                        alt="seniorEMP">
                                </div>

                                <div class="shadow_effect seniorItem
                                        item_Dot itemDot_3"
                                    data_tab="3" onmouseenter="func()" onmouseleave="func2()">
                                    <img src="{{ asset('assets/img/index/team/ravi.webp') }}"
                                        class="img-fluid avatar-xxl rounded-circle user_img_left
                                            senior_emp"
                                        alt="seniorEMP">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End First Circle -->

                    <!-- Start Second Circle -->
                    <div class="">
                        <div class="Senior_employee"></div>
                        <div class="holderCircle">
                            <div class="dotCircle">
                                @foreach ($senior as $key => $senior_images)
                                    <div class="shadow_effect seniorItem itemDot
                                itemDot1"
                                        data-tab="{{ $key + 1 }}">
                                        <img src="{{ asset('assets/img/team/' . $senior_images->image) }}"
                                            class="img-fluid avatar-xxl rounded-circle user_img
                                senior_emp"
                                            alt="{{ $senior_images->image }}">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- End Second Circle -->

                    <!-- Start Third Circle -->
                    <div>
                        <div class="junior_employee"></div>
                        <div class="juniorCircle">
                            <div class="thirdCircle">
                                @foreach ($thirdCircle as $key => $junior_images)
                                    <div class="shadow_effect seniorItem itemsEMP itemEMP1" datatab="{{ $key + 1 }}">
                                        <img src="{{ asset('assets/img/team/' . $junior_images->image) }}"
                                            class="img-fluid avatar-xxl rounded-circle user_img_left
                                            senior_emp"
                                            alt="{{ $junior_images->image }}">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- End Third Circle -->

                    <!-- Start Fourth Circle -->
                    <div>
                        <div class="office_employee"></div>
                        <div class="employeeCircle">
                            <div class="fourthCircle">
                                @foreach ($fourCircle as $key => $freshers_images)
                                    <div class="shadow_effect seniorItem itemEMP
                                        itemEMP1"
                                        datatab="{{ $key + 1 }}">
                                        <img src="{{ asset('assets/img/team/' . $freshers_images->image) }}"
                                            class="img-fluid avatar-xxl rounded-circle user_img
                                            senior_emp"
                                            alt="{{ $freshers_images->image }}">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- End Fourth Circle -->
                </div><!-- end col -->
            </div><!-- end row -->


        </div>
    </section>

    <!-- Mobile Screen Code -->
    <section class="position-relative bg-color polygon_design">
        <div class="container polygon_item">

            <!-- Start Sidebar -->
            <!-- <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#" class="click_link">Thanos Effects</a>
                            <a href="#" class="myList">Rotation Effects</a>
                            <a href="#" class="tween_max">TweenMax Effects</a>
                            <a href="#" class="tetris_effect">Tetris Effects</a>
                        </div> -->

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- <a href="#" class="click_link" >Thanos Effects</a> -->
                <div>
                    <lord-icon src="https://cdn.lordicon.com/gowvgfsi.json" trigger="click" class="click_link"
                        colors="outline:#0b0c1f,primary:#4bb3fd,secondary:#ffc738,tertiary:#ebe6ef" stroke="25"
                        style="width:80px;height:80px">
                    </lord-icon>
                </div>

                <!-- <a href="#" class="myList">Rotation Effects</a> -->
                <div>
                    <lord-icon src="https://cdn.lordicon.com/zgwtpghp.json" class="myList" trigger="click"
                        colors="primary:#ffc738,secondary:#121331,tertiary:#ebe6ef,quaternary:#92140c,quinary:#2ca58d,senary:#b26836"
                        stroke="25" style="width:80px;height:80px">
                    </lord-icon>
                </div>


                <!-- <a href="#" class="tween_max">TweenMax Effects</a> -->
                <div>
                    <lord-icon src="https://cdn.lordicon.com/pimvysaa.json" trigger="click" class="tween_max"
                        colors="outline:#121331,primary:#b26836,secondary:#ffc738" stroke="25"
                        style="width:80px;height:80px">
                    </lord-icon>
                </div>


                <!-- <a href="#" class="tetris_effect">Tetris Effects</a> -->
                <div>
                    <lord-icon src="https://cdn.lordicon.com/hoplyqtl.json" trigger="click" class="tetris_effect"
                        stroke="25" colors="outline:#121331,primary:#ffc738" style="width:80px;height:80px">
                    </lord-icon>
                </div>
            </div>

            <div class="menu_circle">
                <!-- <span class="menu_icon" onclick="openNav()">&#9776;</span> -->
                <span class="menu_icon" onclick="openNav()">

                    <svg width="30" height="65" viewBox="0 0 501 465" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M95.8987 68.3928C112.252 83.7157 126.225
                                125.939 163.921 120.267C156.624 137.751 123.98
                                179.566 110.547 166.462C104.275 160.349 100.04
                                84.5494 95.8987 68.3928ZM178.449 110.828C199.182
                                108.214 240.133 100.646 243.923 83.8488C243.928
                                83.8449 229.359 58.3605 228.64 55.4848C224.227
                                37.7822 225.776 18.064 227.717 0.0249023C213.033
                                21.2509 177.925 88.8468 178.449 110.828ZM25.2705
                                198.186C33.8996 205.564 73.5621 255.098 80.3263
                                254.05C87.1443 252.994 110.529 195.265 105.504
                                189.389C107.147 191.306 36.656 195.15 18.5542
                                189.965C19.0611 194.174 22.6658 194.555 25.2705
                                198.186ZM47.5014 333.304C85.3263 375.078 89.7646
                                305.663 74.246 287.338C60.9378 271.62 28.5777
                                310.731 0.78125 321.9C13.8233 325.407 32.5464
                                327.386 47.5014 333.304ZM500.781 334.405C465.901
                                353.825 442.818 377.564 416.956 409.258C398.118
                                432.345 381.25 457.97 350.204 462.037C318.91
                                466.142 300.027 447.565 265.11 459.044C228.582
                                471.06 191.024 463.003 159.81 442.136C69.2646
                                381.594 72.4828 257.97 131.987 178.31C182.192
                                111.113 313.295 66.6658 391.198 111.406C429.67
                                133.502 394.026 154.96 407.466 193.904C409.61
                                200.122 412.581 205.795 415.164 211.788C421.324
                                226.059 440.967 257.788 441.504 272.402C442.295
                                293.921 438.925 285.714 424.428 301.29C408.917
                                317.958 363.521 405.88 344.825 405.432C339.72
                                405.317 330.896 386.193 327.256 382.509C314.898
                                369.996 288.331 381.182 273.394 380.946C139.583
                                378.855 152.779 179.023 268.702 207.446C341.372
                                225.264 299.779 277.421 264.822 300.478C263.335
                                301.458 266.177 319.059 266.904 321.03C210.423
                                298.041 294.66 259.018 267.543 239.754C217.774
                                204.393 164.865 366.822 278.019 334.054C404.279
                                297.496 265.278 61.886 164.595 248.472C134.278
                                304.65 164.954 384.227 225.457 405.84C254.164
                                416.098 276.803 407.07 305.895 405.866C341.855
                                404.383 348.868 428.398 385.406 410.643C426.43
                                390.716 455.265 342.994 500.781 334.405ZM360.515
                                329.02C362.492 393.26 313.654 296.723 360.515
                                329.02ZM378.169 215.147C330.273 225.437 389.337
                                260.407 409.605 262.502C406.117 242.834 395.925
                                224.119 378.169 215.147ZM298.167 145.043C309.407
                                179.525 345.615 142.007 364.108 131.67C343.91
                                126.515 303.88 118.401 298.167 145.043ZM126.056
                                432.354C122.444 421.079 105.18 372.503 92.249
                                371.278C80.8331 370.195 60.609 442.603 55.202
                                456.497C55.6061 456.896 56.0102 457.305 56.4182
                                457.708C78.929 429.792 115.36 442.913 126.056
                                432.354Z" />
                    </svg></span>
            </div>
          
            <!-- end -->
            <ul class="main_container bounce_effects image-list">
                {{-- <li class="item disintegration_target border_orange
                            border_run bounce1"
                    id="animationImg" style="transform: translate(0px , 0px);">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="01"></a>
                </li> --}}
                @foreach ($mobileView as $key => $mobileViewImages)
                    <li class="item disintegration_target border_green image-item
                        bounce2" id="animationImg">
                        <a href="#"><img src="{{ asset('assets/img/team/' . $mobileViewImages->image) }}"
                                alt="{{ $mobileViewImages->image }}"></a>
                    </li>
                @endforeach


                {{-- <li class="item disintegration_target bounce3" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="03"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce4" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="04"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce5"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="05"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce6" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="06"></a>
                </li>

                <li class="item disintegration_target bounce7" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="07"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce8" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="09"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce9"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="10"></a>
                </li>

                <li class="item disintegration_target bounce10" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="11"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce11"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="12"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce12"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="13"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce13" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="14"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce14"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="15"></a>
                </li>

                <li class="item disintegration_target bounce15" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="16"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce16"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="17"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce17"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="18"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce18" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="19"></a>
                </li>

                <li class="item disintegration_target bounce19">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="20"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce20"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="21"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce21" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="22"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce22"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="23"></a>
                </li>

                <li class="item disintegration_target bounce23" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="24"></a>
                </li>

                <li class="item disintegration_target bounce24" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="08"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce25"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="25"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce26"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="26"></a>
                </li>

                <li class="item disintegration_target bounce27" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="27"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce28"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="28"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce29"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="29"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce30" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="30"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce31"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="28"></a>
                </li>

                <li class="item disintegration_target bounce32" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="29"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce33"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="30"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce34" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="28"></a>
                </li>

                <li class="item disintegration_target bounce35" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="29"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce36"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="30"></a>
                </li>

                <li class="item disintegration_target border_green
                            bounce37"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="31"></a>
                </li>

                <li class="item disintegration_target border_blue
                            bounce38" id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="32"></a>
                </li>

                <li class="item disintegration_target border_orange
                            bounce39"
                    id="animationImg">
                    <a href="#"><img src="{{ asset('assets/img/team/cv_thumb.webp') }}" alt="33"></a>
                </li> --}}
            </ul>
        </div><!-- end container -->

    </section>

    <!-- Demo 3 -->
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    <!-- lord icon -->
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <!-- cloudflare CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Canava CDN -->
    <script src="https://unpkg.com/html2canvas@1.0.0-rc.1/dist/html2canvas.js"></script>
    <!-- Gsap CDN -->
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/team-new.js') }}"></script>
    <script src="{{ asset('assets/js/thanos-new.js') }}"></script>
    <!-- thonus effect -->
    <script src="js/thanos.js"></script>

    <!-- Hexagon Dynamic -->
    <script>
        var list = document.querySelectorAll(".item a");
        for (var x = 0; x < list.length; x++) {
            var url = list[x].children[0].getAttribute("src");
            list[x].style.backgroundImage = "url('" + url + "')";
        }
    </script>
   
@endsection
{{-- <!DOCTYPE html>
<html lang="en" class="no-js">
  <head> --}}
{{-- <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>3D Grid Interaction with Content Preview | Codrops</title>
    <meta
      name="description"
      content="A grid layout with content preview and a magnetic effect."
    />
    <meta
      name="keywords"
      content="gsap, 3d, grid, thumbnails, content, preview, front end, css, javascript"
    /> --}}
{{-- <meta name="author" content="Codrops" />
    <link rel="icon shortcut" href="#" />
    <!-- <link rel="stylesheet" href="https://use.typekit.net/gyf5muf.css" /> -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/team.css?v=<?php echo time(); ?>" />

  </body>
</html> --}}
