<style>
    .text-center {
        background: {
            image:
                radial-gradient(rgba(red, 0.3), rgba(red, 0) 40vw),
                radial-gradient(rgba(green, 0.3), rgba(green, 0) 40vw),
                radial-gradient(rgba(blue, 0.3), rgba(blue, 0) 40vw),
                radial-gradient(rgba(yellow, 0.3), rgba(yellow, 0) 40vw),
                radial-gradient(rgba(red, 0.3), rgba(red, 0) 40vw);
            position:
                -40vw 14rem,
                50% 10rem,
                60vw 14rem,
                -10vw calc(14rem + 20vw),
                30vw calc(14rem + 20vw);
            size: 80vw 80vw;
            repeat: no-repeat;
        }
    }
</style>

<section id="portfolio" class="clearfix">
    <div class="container">
        <header class="section-header">
            <h3 class="section-title h-padding20">Our Work</h3>
        </header @include('layouts.work-slider') </div>
</section>

{{-- <section class="ftco-section bg-wht">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading-section mb-5"><b>WEB</b></h2>
            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item member">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(assets/img/Portfolio/design/Finery_Jewel/finery_dashboard.png);">
                                <div class="text2 w-100">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Finery Jewel</h4>
                                            <span class="cat">Web Designing & Development</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item member">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(assets/img/Portfolio/design/T3Developers/t3_contact.png);">
                                <div class="text2 w-100">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>T3Developers</h4>
                                            <span class="cat">Web Designing & Development</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item member">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(assets/img/Portfolio/design/Finery_Jewel/finery_users.png);">
                                <div class="text2 w-100">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Finery Jewel</h4>
                                            <span class="cat">Web Designing & Development</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item member">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(assets/img/Portfolio/design/T3Developers/t3_catagory.png);">
                                <div class="text2 w-100">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>T3Developers</h4>
                                            <span class="cat">Web Designing & Development</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item member">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(assets/img/Portfolio/design/Finery_Jewel/finery_login.png);">
                                <div class="text2 w-100">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Finery Jewel</h4>
                                            <span class="cat">Web Designing & Development</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item member">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(assets/img/Portfolio/design/T3Developers/t3_property.png);">
                                <div class="text2 w-100">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>T3Developers</h4>
                                            <span class="cat">Web Designing & Development</span>
                                            <div class="social">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
