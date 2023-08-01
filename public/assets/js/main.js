(function ($) {
    "use strict";

    document.onreadystatechange = function () {
        if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector("#preloader").style.visibility = "visible";
        } else {
            document.querySelector("#preloader").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
        }
    };

    // Preloader (if the #preloader div exists)
    // $(window).on("load", function () {
    //     if ($("#preloader").length) {
    //         $("#preloader")
    //             .delay(100)
    //             .fadeOut("slow", function () {
    //                 $(this).remove();
    //             });
    //     }
    // });

    $(".preloader-ring").each(function () {
        let text = $(this).text(),
            textArr = text.split(""),
            a = 0;
        $(this).html("");
        for (let i = 0; i <= 30; i++) {
            if (!textArr[i] || textArr[i] == " ") {
                textArr[i] = "";
            }
            $(this).append(
                '<div class="preloader-sector" style="transform: rotateY(' +
                    a +
                    'deg) translateZ(160px)">' +
                    textArr[i] +
                    "</div>"
            );
            a = a + 12;
        }
    });

    // Add your javascript here

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Initiate the wowjs animation library
    new WOW().init();

    // Header scroll class
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#header").addClass("header-scrolled");
        } else {
            $("#header").removeClass("header-scrolled");
        }
    });

    if ($(window).scrollTop() > 100) {
        $("#header").addClass("header-scrolled");
    }

    // Smooth scroll for the navigation and links with .scrollto classes
    $(".main-nav a, .mobile-nav a, .scrollto").on("click", function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($("#header").length) {
                    top_space = $("#header").outerHeight();

                    if (!$("#header").hasClass("header-scrolled")) {
                        top_space = top_space - 20;
                    }
                }

                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - top_space,
                    },
                    1500,
                    "easeInOutExpo"
                );

                if ($(this).parents(".main-nav, .mobile-nav").length) {
                    $(".main-nav .active, .mobile-nav .active").removeClass(
                        "active"
                    );
                    $(this).closest("li").addClass("active");
                }

                if ($("body").hasClass("mobile-nav-active")) {
                    $("body").removeClass("mobile-nav-active");
                    $(".mobile-nav-toggle i").toggleClass("fa-times fa-bars");
                    $(".mobile-nav-overly").fadeOut();
                }
                return false;
            }
        }
    });

    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, "") ==
                    this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $("html").animate(
                        {
                            scrollTop: target.offset().top - 92,
                        },
                        1000,
                        function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) {
                                // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                        }
                    );
                }
            }
        });

    // Navigation active state on scroll
    var nav_sections = $("section");
    var main_nav = $(".main-nav, .mobile-nav");
    var main_nav_height = $("#header").outerHeight();

    $(window).on("scroll", function () {
        var cur_pos = $(this).scrollTop();

        nav_sections.each(function () {
            var top = $(this).offset().top - main_nav_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                main_nav.find("li").removeClass("active");
                main_nav
                    .find('a[href="#' + $(this).attr("id") + '"]')
                    .parent("li")
                    .addClass("active");
            }
        });
    });

    // jQuery counterUp (used in Whu Us section)
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000,
    });

    // Porfolio isotope and filter
    $(window).on("load", function () {
        var portfolioIsotope = $(".portfolio-container").isotope({
            itemSelector: ".portfolio-item",
        });
        $("#portfolio-flters li").on("click", function () {
            $("#portfolio-flters li").removeClass("filter-active");
            $(this).addClass("filter-active");

            portfolioIsotope.isotope({ filter: $(this).data("filter") });
        });
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        items: 1,
    });

    //CLIENTS LOGO SECTION

    $(document).ready(function () {
        $(".customer-logos").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 768,
                    setting: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3,
                    },
                },
            ],
        });
    });

    // Team Slider

    $(document).ready(function () {
        $(".team-members").slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 768,
                    setting: {
                        slidesToShow: 5,
                    },
                },
                {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3,
                    },
                },
            ],
        });
    });

    /*counter*/
    $(".counter").counterUp({
        delay: 10,
        time: 2000,
    });
    $(".counter").addClass("animated fadeInDownBig");
    $("h3").addClass("animated fadeIn");
    /*counter*/
})(jQuery);

// // set the starting position of the cursor outside of the screen
// let clientX = 100;
// let clientY = 100;
// const innerCursor = document.querySelector(".cursor--small");

// const initCursor = () => {
//   // add listener to track the current mouse position
//   document.addEventListener("mousemove", e => {
//     clientX = e.clientX;
//     clientY = e.clientY;
//   });

//   // transform the innerCursor to the current mouse position
//   // use requestAnimationFrame() for smooth performance
//   const render = () => {
//     innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
//     // if you are already using TweenMax in your project, you might as well
//     // use TweenMax.set() instead
//     // TweenMax.set(innerCursor, {
//     //   x: clientX,
//     //   y: clientY
//     // });

//     requestAnimationFrame(render);
//   };
//   requestAnimationFrame(render);
// };

// initCursor();

// let lastX = 0;
// let lastY = 0;
// let isStuck = false;
// let showCursor = false;
// let group, stuckX, stuckY, fillOuterCursor;

// const initCanvas = () => {
//   const canvas = document.querySelector(".cursor--canvas");
//   const shapeBounds = {
//     width: 75,
//     height: 75
//   };
//   paper.setup(canvas);
//   const strokeColor = "rgba(0, 0, 0, 0.5)";
//   const strokeWidth = 1;
//   const segments = 8;
//   const radius = 20;

//   // we'll need these later for the noisy circle
//   const noiseScale = 150; // speed
//   const noiseRange = 4; // range of distortion
//   let isNoisy = false; // state

//   // the base shape for the noisy circle
//   const polygon = new paper.Path.RegularPolygon(
//     new paper.Point(0, 0),
//     segments,
//     radius
//   );
//   polygon.strokeColor = strokeColor;
//   polygon.strokeWidth = strokeWidth;
//   polygon.smooth();
//   group = new paper.Group([polygon]);
//   group.applyMatrix = false;

//   const noiseObjects = polygon.segments.map(() => new SimplexNoise());
//   let bigCoordinates = [];

//   // function for linear interpolation of values
//   const lerp = (a, b, n) => {
//     return (1 - n) * a + n * b;
//   };

//   // function to map a value from one range to another range
//   const map = (value, in_min, in_max, out_min, out_max) => {
//     return (
//       ((value - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
//     );
//   };

//   // the draw loop of Paper.js
//   // (60fps with requestAnimationFrame under the hood)
//   paper.view.onFrame = event => {
//     // using linear interpolation, the circle will move 0.2 (20%)
//     // of the distance between its current position and the mouse
//     // coordinates per Frame
//     lastX = lerp(lastX, clientX, 0.2);
//     lastY = lerp(lastY, clientY, 0.2);
//     group.position = new paper.Point(lastX, lastY);
//   }
// }

// initCanvas();

// UPDATE: I was able to get this working again... Enjoy!

// var cursor = document.querySelector(".cursor");
// var cursorinner = document.querySelector(".cursor2");
// var a = document.querySelectorAll("a");

// document.addEventListener("mousemove", function (e) {
//     var x = e.clientX;
//     var y = e.clientY;
//     cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
// });

// document.addEventListener("mousemove", function (e) {
//     var x = e.clientX;
//     var y = e.clientY;
//     cursorinner.style.left = x + "px";
//     cursorinner.style.top = y + "px";
// });

// document.addEventListener("mousedown", function () {
//     cursor.classList.add("click");
//     cursorinner.classList.add("cursorinnerhover");
// });

// document.addEventListener("mouseup", function () {
//     cursor.classList.remove("click");
//     cursorinner.classList.remove("cursorinnerhover");
// });

// a.forEach((item) => {
//     item.addEventListener("mouseover", () => {
//         cursor.classList.add("hover");
//     });
//     item.addEventListener("mouseleave", () => {
//         cursor.classList.remove("hover");
//     });
// });
