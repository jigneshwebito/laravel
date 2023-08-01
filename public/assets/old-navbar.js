$(document).ready(function () {
    $(".mavbar-toggler").click(function () {
        $(".mavbar-collapse").slideToggle(300);
    });

    smallScreenMenu();
    let temp;
    function resizeEnd() {
        smallScreenMenu();
    }

    $(window).resize(function () {
        clearTimeout(temp);
        temp = setTimeout(resizeEnd, 100);
        resetMenu();
    });
});

const subMenus = $(".sub-menu");
const menuLinks = $(".menu-link");

function smallScreenMenu() {
    if ($(window).innerWidth() <= 1200) {
        menuLinks.each(function (item) {
            $(this).click(function () {
                $(this).next().slideToggle();
            });
        });
    } else {
        menuLinks.each(function (item) {
            $(this).off("click");
        });
    }
}

function resetMenu() {
    if ($(window).innerWidth() > 1132) {
        subMenus.each(function (item) {
            $(this).css("display", "none");
        });
    }
}



    $(document).ready(function() {
        var url = window.location;
        $('.mavbar .mavbar-nav').find('.active').removeClass('active');
        $('.mavbar .mavbar-nav li a').each(function() {
            if (this.href == url) {
                $(this).parent().addClass('active');
            }
        });
    });




    $(window).on('load', function() {
        myFunction()
    });

    var navbar = document.getElementById("mavbar");
    var sticky = mavbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            mavbar.classList.add("sticky")
        } else {
            mavbar.classList.remove("sticky");
        }
    }

