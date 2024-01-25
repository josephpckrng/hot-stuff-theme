$(document).ready(function () {
    $('.form-icon').click(function () {
        $('.revealed-form').toggleClass("clicked");
    });

    $('.close-search').click(function () {
        $('.revealed-form').toggleClass("clicked");
    });


});

$(document).ready(function () {
    $('.menu-left-menu > .mobile-menu').click(function (e) {
        $(this).toggleClass('active');
        return false;
    });
    $('.menu-main-menu').click(function () {
        if ($('.sub-menu').hasClass('active')) {
            $('.nav-menu').slideDown();
        } else {
            $('.nav-menu').slideUp();
        }
    });
    $('.menu-item-has-children').click(function () {
        $(this).closest('.menu-item-has-children').toggleClass('sub-menu-open');
    });

    $(".menu-item-has-children").each(function () {
        $(this).css("background-image").click(function () {
            return false;
        });
    });

    $('#myCarousel').on('slide.bs.carousel', function () {
        // do something…
    })




});


