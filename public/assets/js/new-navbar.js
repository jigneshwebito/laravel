jQuery(document).ready(function (a) {

    var s, e;
    !(function (U) {
        "use strict";
        var s = (n = U(".off-canvas-nav")).find(".sub-menu"),
            e = n.find(".sub-menu1");
        s
            .parent()
            .prepend(
                '<span class="menu-expand"><i class="fa fa-plus plusIcon"></i></span>'
            ),
            e
                .parent()
                .prepend(
                    '<span class="menu-expand"><i class="fa fa-chevron-down downIcon Paddding-14"</i></span>'
                ),
            s.slideUp(),
            e.slideUp(),
            n.on("click", "li a, li .menu-expand", function (s) {
                var e = U(this);
                e
                    .parent()
                    .attr("class")
                    .match(
                        /\b(menu-item-has-children|has-children|has-sub-menu | has-sub-menu1)\b/
                    ) &&
                    ("#" === e.attr("href") || e.hasClass("menu-expand")) &&
                    (s.preventDefault(),
                    e.siblings("ul:visible").length
                        ? (e.parent("li").removeClass("active"),
                          e.siblings("ul").slideUp())
                        : (e.parent("li").addClass("active"),
                          e
                              .closest("li")
                              .siblings("li")
                              .find("ul:visible")
                              .slideUp(),
                          e.siblings("ul").slideDown()));
            }),
            U(".off-canvas-btn").on("click", function () {
                U(".off-canvas-wrapper").addClass("open");
            }),
            U(".btn-close-off-canvas").on("click", function () {
                U(".off-canvas-wrapper").removeClass("open");
            }),
            U(".hidden-menu-item").css("display", "none"),
            U(window).on({
                load: function () {
                    U(window).width() <= 1200 &&
                        U(".hidden-lg-menu-item").css("display", "none");
                },
                resize: function () {
                    U(window).width() <= 1200 &&
                        U(".hidden-lg-menu-item").css("display", "none");
                },
            }),
            U(".js-expand-hidden-menu").on("click", function (s) {
                s.preventDefault(),
                    U(".hidden-menu-item").toggle(500),
                    U(window).width() <= 1200 &&
                        U(".hidden-lg-menu-item").toggle(500),
                    (s = "Close Categories"),
                    U(this).html(U(this).text() == s ? "More Categories" : s),
                    U(this).toggleClass("menu-close");
            }),
            U(".category-menu .has-children > a").on("click", function (s) {
                s.preventDefault(),
                    U(this).siblings(".sub-menu").slideToggle("500");
            }),
            U(".search-trigger").on("click", function () {
                U(".search-wrapper").addClass("open");
            }),
            U(".search-dismiss,body").on("click", function (s) {
                U(".search-wrapper").removeClass("open");
            }),
            U(".search-box,.search-trigger").on("click", function (s) {
                s.stopPropagation();
            }),
            U(".category-trigger").on("click", function (s) {
                U(".category-nav").toggleClass("show"), s.stopPropagation();
            });
        var i,
            I = U("html"),
            P = U("body"),
            n = U(".sb-slick-slider");
        ("rtl" != I.attr("dir") && "rtl" != P.attr("dir")) ||
            n.attr("dir", "rtl"),
            n.each(function () {
                for (
                    var s = U(this),
                        e =
                            (S = s.data("slick-setting")
                                ? s.data("slick-setting")
                                : "").autoplay || !1,
                        i = parseInt(S.autoplaySpeed, 10) || 2e3,
                        n = S.asNavFor || null,
                        t = S.appendArrows || s,
                        a = S.appendDots || s,
                        o = S.arrows || !1,
                        l = S.prevArrow
                            ? '<button class="' +
                              (S.prevArrow.buttonClass || "slick-prev") +
                              '"><i class="' +
                              S.prevArrow.iconClass +
                              '"></i></button>'
                            : '<button class="slick-prev">previous</button>',
                        d = S.nextArrow
                            ? '<button class="' +
                              (S.nextArrow.buttonClass || "slick-next") +
                              '"><i class="' +
                              S.nextArrow.iconClass +
                              '"></i></button>'
                            : '<button class="slick-next">next</button>',
                        c = S.centerMode || !1,
                        r = S.centerPadding || "50px",
                        p = S.dots || !1,
                        u = S.fade || !1,
                        h = S.focusOnSelect || !1,
                        g = S.infinite || !1,
                        v = S.pauseOnHover || !1,
                        m = parseInt(S.rows, 10) || 1,
                        w = parseInt(S.slidesToShow, 10) || 1,
                        f = parseInt(S.slidesToScroll, 10) || 1,
                        C = S.swipe || !0,
                        k = S.swipeToSlide || !1,
                        b = S.variableWidth || !1,
                        y = S.vertical || !1,
                        x = S.verticalSwiping || !1,
                        S = !!(
                            S.rtl ||
                            I.attr('dir="rtl"') ||
                            P.attr('dir="rtl"')
                        ),
                        _ =
                            void 0 !== s.data("slick-responsive")
                                ? s.data("slick-responsive")
                                : "",
                        D = _.length,
                        A = [],
                        T = 0;
                    T < D;
                    T++
                )
                    A[T] = _[T];
                s.slick({
                    autoplay: e,
                    autoplaySpeed: i,
                    asNavFor: n,
                    appendArrows: t,
                    appendDots: a,
                    arrows: o,
                    dots: p,
                    centerMode: c,
                    centerPadding: r,
                    fade: u,
                    focusOnSelect: h,
                    infinite: g,
                    pauseOnHover: v,
                    rows: m,
                    slidesToShow: w,
                    slidesToScroll: f,
                    swipe: C,
                    swipeToSlide: k,
                    variableWidth: b,
                    vertical: y,
                    verticalSwiping: x,
                    rtl: S,
                    prevArrow: l,
                    nextArrow: d,
                    responsive: A,
                });
            }),
            U(".slide-down--btn").on("click", function (s) {
                s.stopPropagation(),
                    U(this).siblings(".slide-down--item").slideToggle("400"),
                    U(this).siblings(".slide-down--item").toggleClass("show"),
                    U(this)
                        .parents(".slide-wrapper")
                        .siblings()
                        .children(".slide-down--item"),
                    U(this)
                        .parents(".slide-wrapper")
                        .siblings()
                        .children(".slide-down--item")
                        .slideUp("400");
            }),
            U("body").on("click", function (s) {
                U(".slide-down--item").slideUp("500");
            }),
            U(".slide-down--item").on("click", function (s) {
                s.stopPropagation();
            }),
            (i = U(".site-header")[0].getBoundingClientRect().height),
            U(window).on({
                resize: function () {
                    U(window).width() <= 991
                        ? (U(".sticky-init").removeClass("fixed-header"),
                          U(".sticky-init").hasClass("sticky-header") &&
                              U(".sticky-init").removeClass("sticky-header"))
                        : U(".sticky-init").addClass("fixed-header");
                },
                load: function () {
                    U(window).width() <= 991
                        ? (U(".sticky-init").removeClass("fixed-header"),
                          U(".sticky-init").hasClass("sticky-header") &&
                              U(".sticky-init").removeClass("sticky-header"))
                        : U(".sticky-init").addClass("fixed-header");
                },
            }),
            U(window).on("scroll", function () {
                U(window).scrollTop() >= i
                    ? U(".fixed-header").addClass("sticky-header")
                    : U(".fixed-header").removeClass("sticky-header");
            }),
            U(".product-view-mode a").on("click", function (s) {
                s.preventDefault();
                var e = U(".shop-product-wrap"),
                    s = U(this).data("target");
                U(".product-view-mode a").removeClass("active"),
                    U(this).addClass("active"),
                    e.removeClass("grid list").addClass(s),
                    e.hasClass("grid")
                        ? U(".pm-product").removeClass("product-type-list")
                        : U(".pm-product").addClass("product-type-list");
            }),
            U(".count-btn").on("click", function () {
                var s = U(this),
                    e = s
                        .parent(".count-input-btns")
                        .parent()
                        .find("input")
                        .val(),
                    e = s.hasClass("inc-ammount")
                        ? parseFloat(e) + 1
                        : 0 < e
                        ? parseFloat(e) - 1
                        : 0;
                s.parent(".count-input-btns").parent().find("input").val(e);
            }),
            U("[data-shipping]").on("click", function () {
                0 < U("[data-shipping]:checked").length
                    ? U("#shipping-form").slideDown()
                    : U("#shipping-form").slideUp();
            }),
            U(".add-to-cart").on("click", function (s) {
                s.preventDefault(),
                    U(this).hasClass("added")
                        ? U(this)
                              .removeClass("added")
                              .find("i")
                              .removeClass("ti-check")
                              .addClass("ti-shopping-cart")
                              .siblings("span")
                              .text("add to cart")
                        : U(this)
                              .addClass("added")
                              .find("i")
                              .addClass("ti-check")
                              .removeClass("ti-shopping-cart")
                              .siblings("span")
                              .text("added");
            }),
            U(".bg-image").each(function () {
                var s = U(this),
                    e = s.data("bg");
                s.css({ "background-image": "url(" + e + ")" });
            }),
            U(".product-view-mode a").on("click", function (s) {
                s.preventDefault();
                var e = U(".shop-product-wrap"),
                    s = U(this).data("target");
                U(".product-view-mode a").removeClass("active"),
                    U(this).addClass("active"),
                    e.removeClass("grid list grid-four").addClass(s),
                    e.hasClass("grid") || e.hasClass("grid-four")
                        ? U(".product-card").removeClass("card-style-list")
                        : U(".product-card").addClass("card-style-list");
            }),
            U('[name="payment-method"]').on("click", function () {
                var s = U(this).attr("value");
                U(".single-method p").slideUp(),
                    U('[data-method="' + s + '"]').slideDown();
            }),
            U(".slide-trigger").on("click", function () {
                var s = U(this).data("target");
                U(s).slideToggle();
            }),
            U.scrollUp({
                scrollText:
                    '<i class="ion-chevron-right"></i><i class="ion-chevron-right"></i>',
                easingType: "linear",
                scrollSpeed: 900,
            });
    })(jQuery),
        a("[data-countdown]").each(function () {
            var e = a(this),
                s = a(this).data("countdown");
            e.countdown(s, function (s) {
                e.html(
                    s.strftime(
                        '<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">mins</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Secs</span></div>'
                    )
                );
            });
        }),
        a(".color-list a").on("click", function (s) {
            s.preventDefault(),
                (s = a(this)).addClass("active"),
                s.siblings().removeClass("active");
            for (
                var e = document.querySelectorAll("#product-nav .single-slide"),
                    i = document.querySelectorAll(
                        "#products-details .single-slide"
                    ),
                    n = s.data("swatch-color"),
                    t = 0;
                t < e.length;
                t++
            )
                e[t].classList.remove("slick-current"),
                    e[t].classList.contains(n) &&
                        e[t].classList.add("slick-current");
            for (t = 0; t < i.length; t++)
                i[t].classList.remove("slick-current"),
                    (i[t].style.opacity = 0),
                    i[t].classList.contains(n) &&
                        (i[t].classList.add("slick-current"),
                        (i[t].style.opacity = 1));
        }),
        a("#google-map").length &&
            ((s = { lat: 21.0277214, lng: 105.8342015 }),
            (e = new google.maps.Map(document.getElementById("google-map"), {
                zoom: 12,
                center: s,
            })),
            new google.maps.Marker({ position: s, map: e }));
}),
    $(document).ready(function () {
        var s = window.location;
        $(".main-navigation .main-menu").find(".active").removeClass("active"),
            $(".main-navigation .main-menu li a").each(function () {
                this.href == s && $(this).parent().addClass("activeJs");
            });
    });
