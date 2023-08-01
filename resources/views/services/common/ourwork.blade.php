<link href="{{ asset('assets/css/design.css') }}" rel="stylesheet">
<!--Benefits  section 4 -->
<section class="our-work-listing-section">
    <div class="container">
        <div class="wwd-content-center">
            <h2 class="h-padding20"><?php echo $title; ?></h2>
            <p><?php echo $desc; ?></p>
        </div>
        <div class="row our-work-services-slider">
            <!--1-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="case-listing-col">
                    <div class="cs-listing-img">
                        <a href="<?php echo $link1; ?>" target="_blank">
                            <picture>
                                <img src="<?php echo $image1; ?>" alt="Our Work Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="cs-project-detail">
                    <p><?php echo $what1; ?></p>
                    <a href="#" aria-label="{{ $app1 }}"><?php echo $app1; ?></a>

                    <div class="cs-technology">
                        <?php if (isset($b1Span1)) { ?>
                        <span><?php echo $b1Span1; ?></span>
                        <?php } ?>
                        <?php if (isset($b1Span2)) { ?>
                        <span><?php echo $b1Span2; ?></span>
                        <?php } ?>
                        <?php if (isset($b1Span3)) { ?>
                        <span><?php echo $b1Span3; ?></span>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <!--1-->

            <!--2-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="case-listing-col">
                    <div class="cs-listing-img">
                        <a href="<?php echo $link2; ?>" target="_blank">
                            <picture>
                                <img src="<?php echo $image2; ?>" alt="Our Work Image Two">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="cs-project-detail">
                    <p><?php echo $what2; ?></p>
                    <a href="#" aria-label="{{ $app2 }}"><?php echo $app2; ?></a>

                    <div class="cs-technology">
                        <?php if (isset($b2Span1)) { ?>
                        <span><?php echo $b2Span1; ?></span>
                        <?php } ?>
                        <?php if (isset($b2Span2)) { ?>
                        <span><?php echo $b2Span2; ?></span>
                        <?php } ?>
                        <?php if (isset($b3Span3)) { ?>
                        <span><?php echo $b3Span3; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--2-->

            <!--3-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="case-listing-col">
                    <div class="cs-listing-img">
                        <a href="<?php echo $link3; ?>" target="_blank">
                            <picture>
                                <img src="<?php echo $image3; ?>" alt="Our Work Image Three">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="cs-project-detail">
                    <p><?php echo $what3; ?></p>
                    <a href="#" aria-label="{{ $app3 }}"><?php echo $app3; ?></a>

                    <div class="cs-technology">
                        <?php if (isset($b3Span1)) { ?>
                        <span><?php echo $b3Span1; ?></span>
                        <?php } ?>
                        <?php if (isset($b3Span2)) { ?>
                        <span><?php echo $b3Span2; ?></span>
                        <?php } ?>
                        <?php if (isset($b3Span3)) { ?>
                        <span><?php echo $b3Span3; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--3-->

            <!--4-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="case-listing-col">
                    <div class="cs-listing-img">
                        <a href="<?php echo $link4; ?>" target="_blank">
                            <picture>
                                <img src="<?php echo $image4; ?>" alt="Our Work Image Four">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="cs-project-detail">
                    <p><?php echo $what4; ?></p>
                    <a href="#" aria-label="{{ $app4 }}"><?php echo $app4; ?></a>

                    <div class="cs-technology">
                        <?php if (isset($b4Span1)) { ?>
                        <span><?php echo $b4Span1; ?></span>
                        <?php } ?>
                        <?php if (isset($b4Span2)) { ?>
                        <span><?php echo $b4Span2; ?></span>
                        <?php } ?>
                        <?php if (isset($b4Span3)) { ?>
                        <span><?php echo $b4Span3; ?></span>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <!--4-->

            <!--5-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="case-listing-col">
                    <div class="cs-listing-img">
                        <a href="<?php echo $link5; ?>" target="_blank">
                            <picture>
                                <img src="<?php echo $image5; ?>" alt="Our Work Image Five">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="cs-project-detail">
                    <p><?php echo $what5; ?></p>
                    <a href="#" aria-label="{{ $app5 }}"><?php echo $app5; ?></a>

                    <div class="cs-technology">
                        <?php if (isset($b5Span1)) { ?>
                        <span><?php echo $b5Span1; ?></span>
                        <?php } ?>
                        <?php if (isset($b5Span2)) { ?>
                        <span><?php echo $b5Span2; ?></span>
                        <?php } ?>
                        <?php if (isset($b5Span3)) { ?>
                        <span><?php echo $b5Span3; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--5-->

            <!--6-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="case-listing-col">
                    <div class="cs-listing-img">
                        <a href="<?php echo $link6; ?>" target="_blank">
                            <picture>
                                <img src="<?php echo $image6; ?>" alt="Our Work Image Six">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="cs-project-detail">
                    <p><?php echo $what6; ?></p>
                    <a href="#" aria-label="{{ $app6 }}"><?php echo $app6; ?></a>

                    <div class="cs-technology">
                        <?php if (isset($b6Span1)) { ?>
                        <span><?php echo $b6Span1; ?></span>
                        <?php } ?>
                        <?php if (isset($b6Span2)) { ?>
                        <span><?php echo $b6Span2; ?></span>
                        <?php } ?>
                        <?php if (isset($b6Span3)) { ?>
                        <span><?php echo $b6Span3; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--6-->

        </div>
        <!---->
        <!---->
        <!--center view all btn-->
        <!---->
        <!---->
        {{-- <div class="center-btn">
            <div class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li style="list-style-type: none">
                        <a href="index.html#contact" class="menu-c contact-us-btn">View All</a> old
                        <a href="#" class="menu-c contact-us-btn">View All</a>
                    </li>
                </ul>
            </div>
        </div> --}}
        <!---->
        <!---->
        <!--center view all btn End-->
        <!---->
        <!---->
    </div>
</section>
<!--Benefits  section 4 End-->
