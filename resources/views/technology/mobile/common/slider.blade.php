<section _ngcontent-c3="" class="we-work-sec pad-t-b" id="capabilities">
    <div _ngcontent-c3="" class="container">
        <div _ngcontent-c3="" class="title-block">
            <p _ngcontent-c3="" class="sub-title"><?php echo $title; ?></p>
            <h2 _ngcontent-c3=""><?php echo $subtitle; ?></h2>
        </div>
    </div>

    <div class="slideshow-container">
        <div _ngcontent-c4="" class="approch-slider">
            <div class="mySlides ">
                {{-- <div class="numbertext">1 / 4</div> --}}
                <div _ngcontent-c3="" class="row">
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="img-box">
                            <img _ngcontent-c3="" srcset="<?php echo $slide1img; ?>" alt="<?php echo $slide1alt; ?>">
                        </div>
                    </div>
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="work-info">
                            <h3 _ngcontent-c3=""><?php echo $slide1title; ?></h3>
                            <p _ngcontent-c3=""> <?php echo $slide1desc; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides ">
                {{-- <div class="numbertext">2 / 4</div> --}}
                <div _ngcontent-c3="" class="row">
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="img-box">
                            <img _ngcontent-c3="" srcset="<?php echo $slide2img; ?>" alt="<?php echo $slide2alt; ?>">
                        </div>
                    </div>
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="work-info">
                            <h3 _ngcontent-c3=""><?php echo $slide2title; ?></h3>
                            <p _ngcontent-c3=""> <?php echo $slide2desc; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides ">
                {{-- <div class="numbertext">3 / 4</div> --}}
                <div _ngcontent-c3="" class="row">
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="img-box">
                            <img _ngcontent-c3="" srcset="<?php echo $slide3img; ?>" alt="<?php echo $slide3alt; ?>">
                        </div>
                    </div>
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="work-info">
                            <h3 _ngcontent-c3=""><?php echo $slide3title; ?></h3>
                            <p _ngcontent-c3=""> <?php echo $slide3desc; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides ">
                {{-- <div class="numbertext">4 / 4</div> --}}
                <div _ngcontent-c3="" class="row">
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="img-box">
                            <img _ngcontent-c3="" srcset="<?php echo $slide4img; ?>" alt="<?php echo $slide4alt; ?>">
                        </div>
                    </div>
                    <div _ngcontent-c3="" class="col-md-6 col-sm-12 flex-sec">
                        <div _ngcontent-c3="" class="work-info">
                            <h3 _ngcontent-c3=""><?php echo $slide4title; ?></h3>
                            <p _ngcontent-c3=""> <?php echo $slide4desc; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div style="text-align:center;display:none;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2500); // Change image every 2 seconds
    }
</script>
