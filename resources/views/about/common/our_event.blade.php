    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style>
        .image-grid {
            display: flex;
            justify-content: space-between;
            max-width: 100%;
            height: auto;
            margin: 0 auto;
            padding: 5px;
            list-style: none;
        }

        .image-grid__item {
            display: flex;
            flex-direction: column;
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 360px;
            align-items: stretch;
            justify-content: center;
            position: relative;
            width: 100%;
            height: 13rem;
            object-fit: cover;
            margin-right: 14px;
            margin-bottom: 14px;
            transition: transform 0.14s ease-in, text-shadow 0.1s ease-in;
        }

        .image-grid__item:before {
            content: "";
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: none;
            border-radius: 3px;
            box-shadow: 0 10px 24px 0px rgba(0, 0, 0, 0.06), 0 8px 20px -2px rgba(0, 0, 0, 0.1), 0 6px 10px -6px rgba(0, 0, 0, 0.2);
            transition: visibility 0.1s ease-out, opacity 0.1s ease-out;
            opacity: 0;
        }

        .image-grid__item:hover:before {
            visibility: visible;
            opacity: 1;
        }

        .grid-item {
            display: flex;
            position: relative;
            flex-direction: column;
            flex-grow: 1;
            flex-shrink: 1;
            align-items: stretch;
            justify-content: center;
            text-decoration: none;
            color: #eeeeee;
            overflow: hidden;
        }

        .grid-item:hover .grid-item__image {
            transform: scale(1.2);
        }

        .grid-item:hover .grid-item__hover {
            visibility: visible;
            opacity: 1;
        }

        .grid-item:hover .grid-item__name {
            visibility: visible;
            transform: scale(1);
            opacity: 1;
        }

        .grid-item__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            background-size: cover;
            background-position: center center;
            transform: scale(1);
            border-radius: 20px;
            will-change: transform;
            transition: transform 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 0;
        }

        .grid-item__hover {
            visibility: hidden;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(rgba(47, 48, 50, 0.2), rgba(47, 48, 50, 0.7));
            box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.15);
            border-radius: 0;
            transition: visibility 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            opacity: 0;
        }

        .grid-item__name {
            visibility: hidden;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            flex-shrink: 1;
            align-items: center;
            color: white;
            font-size: 2rem;
            font-weight: 300;
            text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.4), 2px 2px 6px rgba(0, 0, 0, 0.3);
            justify-content: center;
            letter-spacing: 1px;
            transform: scale(0.6);
            transform-origin: center center;
            transition: visibility 0.14s ease-out, opacity 0.14s ease-out, transform 0.24s ease;
            opacity: 0;
        }


        .modal {
            height: auto !important;
        }

        button.close {
            left: 14px;
            position: relative;
        }

        .modal .modal-content {

            padding: 0px 20px 20px 20px;
            -webkit-animation-name: modal-animation;
            -webkit-animation-duration: 0.5s;
            animation-name: modal-animation;
            animation-duration: 0.5s;
        }

        @-webkit-keyframes modal-animation {
            from {
                top: 0px;
                opacity: 0;
            }

            to {
                top: 0px;
                opacity: 1;
            }
        }

        @keyframes modal-animation {
            from {
                top: 0px;
                opacity: 0;
            }

            to {
                top: 0px;
                opacity: 1;
            }
        }

        .video-container {
            width: 100%;
            height: 100%;
        }

        .video-play-button {
            position: absolute;
            z-index: 10;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            box-sizing: content-box;
            display: block;
            width: 32px;
            height: 44px;
            /* background: #fa183d; */
            border-radius: 50%;
            padding: 18px 20px 18px 28px;
        }

        .video-play-button:before {
            content: "";
            position: absolute;
            z-index: 0;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 80px;
            height: 80px;
            background: #0675e8;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        .video-play-button:after {
            content: "";
            position: absolute;
            z-index: 1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 80px;
            height: 80px;
            background: #0675e8;
            border-radius: 50%;
            transition: all 200ms;
        }

        .video-play-button:hover:after {
            background-color: #0675e8;
        }

        .video-play-button img {
            position: relative;
            z-index: 3;
            max-width: 100%;
            width: auto;
            height: auto;
        }

        .video-play-button span {
            display: block;
            position: relative;
            z-index: 3;
            width: 0;
            height: 0;
            border-left: 32px solid #fff;
            border-top: 22px solid transparent;
            border-bottom: 22px solid transparent;
        }

        @-webkit-keyframes pulse-border {
            0% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }

        @keyframes pulse-border {
            0% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }

        @media only screen and (max-width: 760px) {
            .image-grid__item {
                height: 7rem;
                margin: 0 !important;
                padding: 5px;
            }

            .video-play-button {
                width: 16px;
                height: 22px;
                padding: 9px 10px 9px 14px;
            }

            .video-play-button:before {
                width: 40px;
                height: 40px;
            }

            .video-play-button:after {
                width: 40px;
                height: 40px;
            }

            .video-play-button span {
                border-left: 16px solid #fff;
                border-top: 11px solid transparent;
                border-bottom: 11px solid transparent;
            }
        }
    </style>
    <div class="work-process-services" id="our_events">
        <div class="work-services">
            <div class="container">
                <div class="work-process-block left-side">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 wow zoomIn">
                            <div class="work-process-info">
                                <div class="target-audience-box">
                                    <h5></h5>
                                    <h2><?php echo $box1title; ?></h2>
                                    <span class="separator-line"></span>
                                </div>
                                <div class="work-process-point row">
                                    <div class="image-grid col-12 show-more-item" role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/Birthday_celebration_2022.webp') }}">

                                                <div class="grid-item__hover"></div>
                                                <div class="grid-item__name"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/ceo_birthday_2021.webp') }}">
                                                <div class="grid-item__hover"></div>
                                                <div class="grid-item__name"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image"
                                                    src="{{ asset('assets/img/our_events/Birthday_celebration_boys_2022.webp') }}">

                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="image-grid col-12 show-more-item" role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/cristmas_2021.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a data-toggle="modal" class="grid-item"
                                                onclick="sendVideo('assets/img/our_events/video/journey_2022.mp4')">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/anniversary_celebration_2022.webp') }}">
                                                <div class="video-play-button">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/Award_Ceremony_2022.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;" role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a data-toggle="modal" class="grid-item"
                                                onclick="sendVideo('assets/img/our_events/video/farm_2022.mp4')">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/family_2022.webp') }}">
                                                <div class="video-play-button">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/formal_2022.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image"
                                                    src="{{ asset('assets/img/our_events/fun_2022.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;" role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/party_time_2022.webp') }}">

                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/holi_2022.webp') }}">

                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a data-toggle="modal" class="grid-item"
                                                onclick="sendVideo('assets/img/our_events/video/guru_purnima_2022.mp4')">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/Guru_purnima_2022.webp') }}">

                                                <div class="video-play-button">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;" role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/employe_one_year_2022.webp') }}">

                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/award_2022.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/farewell_2022.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;"
                                        role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/15th_augest_celebration.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/ganeshahman_celereation.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                {{-- ganesh Aagaman --}}
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/ganeshvisarjan_celereation.webp') }}">

                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;"
                                        role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/party_time_celebration.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/navratri_calebration.webp') }}">

                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/ceo_birthday_celebration.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- ----- --}}
                                    <div class="image-grid col-12 show-more-item" style="display: none;"
                                        role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/employee_birthday_celebration.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/award_ceremony_december_1.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a data-toggle="modal" class="grid-item"
                                                onclick="sendVideo('assets/img/our_events/video/journey_2022.mp4')">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/award_ceremony_december_2.webp') }}">
                                                <div class="video-play-button">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;"
                                        role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/award_ceremony_december_3.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <img class="grid-item__image ng-lazyloaded"
                                                    src="{{ asset('assets/img/our_events/birthday_celebration_female.webp') }}">
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>

                                        <div class="image-grid__item col-4">
                                            <a data-toggle="modal" class="grid-item"
                                                onclick="sendVideo('assets/img/our_events/video/work_anniverary.mp4')">
                                                <div class="grid-item__image ng-lazyloaded"
                                                    style="background-image: url(/assets/img/our_events/anniversary_2022_1.webp)">
                                                </div>
                                                <div class="video-play-button">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image-grid col-12 show-more-item" style="display: none;"
                                        role="toolbar">
                                        <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <div class="grid-item__image ng-lazyloaded"
                                                    style="background-image: url(/assets/img/our_events/anniversary_2022_2.webp)">
                                                </div>
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
                                        <!-- <div class="image-grid__item col-4">
                                            <a class="grid-item">
                                                <div class="grid-item__image ng-lazyloaded"
                                                    style="background-image: url(/assets/img/our_events/birthday_celebration_female.webp)">
                                                </div>
                                                <div class="grid-item__hover"></div>
                                            </a>
                                        </div>
    
                                        <div class="image-grid__item col-4">
                                            <a data-toggle="modal" class="grid-item"
                                                onclick="sendVideo('assets/img/our_events/video/journey_2022.mp4')">
                                                <div class="grid-item__image ng-lazyloaded"
                                                    style="background-image: url(/assets/img/our_events/anniversary_2022_1.webp)">
                                                </div>
                                                <div class="video-play-button">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div> -->
                                    </div>

                                </div>
                                <div class="show-more-btn d-grid gap-2 col-6 mx-auto"
                                    style="width: 121px;background: #4675e8;color: white;justify-content: center; padding: 19px;display: flex;border-radius:32px; margin-top: 10px;">
                                    Load More</div>
                                <div class="work-process-point">
                                    <h3></h3>
                                    <p></p>
                                    <div class="service-points">
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                                <div class="work-process-point">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-sm-12 col-md-12 order-2 order-md-1 list-mobile-padding ">
                        <div class="work-img-left">

                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal root -->
                            <div class="m-header">
                                <button class="close" data-dismiss="modal" onclick="stopVideo()">
                                    ×
                                </button>
                            </div>

                            <!-- Modal body -->
                            <div class="inputs">
                                <video class="video-container" controls id="video-id">
                                    <source src="" id="source" type="video/mp4" autoplay />
                                </video>

                            </div>

                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <div class="work-process-arrow left-arrow">
        <img src="{{ asset('assets/img/services/design/img-work-process-arrow.svg') }}"
            alt="Work Process Arrow">
    </div>
    <script>
        // $(document).ready(function() {

        //     /* Centering the modal vertically */
        //     function alignModal() {
        //         var modalDialog = $(this).find(".modal-dialog");
        //         modalDialog.css("margin-top", Math.max(0,
        //             ($(window).height() - modalDialog.height()) / 2));
        //     }
        //     $(".modal").on("shown.bs.modal", alignModal);

        //     /* Resizing the modal according the screen size */
        //     $(window).on("resize", function() {

        //         $(".modal:visible").each(alignModal);
        //     });
        // });
        function stopVideo() {
            var media = $("#video-id").get(0);
            media.pause();
            media.currentTime = 0;
        }

        function sendVideo(path) {
            var originalPath = '{{ asset('') }}';
            var newPath = originalPath + path;
            var video = document.getElementById('video-id');
            var source = document.getElementById('source');
            source.setAttribute('src', newPath);
            video.load();
            video.play();
            $('#signupModal').modal('show');
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".show-more-btn").click(function(e) {
                $(".show-more-item:hidden").slice(0, 1).fadeIn();
                if ($(".show-more-item:hidden").length < 1) $(this).fadeOut();
            })
        })
    </script>
