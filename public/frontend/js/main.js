$(document).ready(function () {
    ///////////////////////////////////////////////enable sidebar
    $.sidebarMenu($('.sliderWrapper'));
///////////////////////////////////////////////enable tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
// //////////////////////////////////////////////owl carousel
    $('.mainSlider').owlCarousel({
        loop:true,
        nav:true,
        items: 1,
        autoplay: true,
        autoplayHoverPause: false,
        animateOut: 'bounceOut',
        animateIn: 'fadeIn'
        // animateOut: 'slideOutUp',
        // animateIn: 'slideInUp'
    });
    $('.aboutSlider').owlCarousel({
        navText: [ "<img src='images/leftArrow.png'>", "<img src='images/rightArrow.png'>" ],
        loop:true,
        nav:true,
        items: 1,
        // autoplay: true,
        // animateOut: 'slideOutUp',
        // animateIn: 'slideInUp'
    });
    $('.teamSlider').owlCarousel({
        navText: [ "<img src='images/leftArrow.png'>", "<img src='images/rightArrow.png'>" ],
        loop:true,
        nav:true,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInLeft',
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1300:{
                items: 3
            }
        }
        // animateOut: 'slideOutUp',
        // animateIn: 'slideInUp'
    });
//
// $('a[href*="#"]:not([href="#"])').click(function() {
//     var offset = -70; // <-- change the value here
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//         if (target.length) {
//             $('html, body').animate({
//                 scrollTop: target.offset().top + offset
//             }, 1000);
//             return false;
//         }
//     }
// });
////////////////////////////////////////////////perfect scroll bar
    window.onload = function () {
        [].forEach.call(document.querySelectorAll('.sliderWrapper, .containerWrapper'), function (el) {
            Ps.initialize(el);
        });
    };
//////////////////////////////////////////////////////
    $('.bars').on('click', function () {
        $('.sidebar-menu').toggleClass('active');
        $('.sliderWrapper').toggleClass('active');
    });
    $('.closeIcon').on('click', function () {
        $('.sidebar-menu').toggleClass('active');
        $('.sliderWrapper').toggleClass('active');
    });
    $('.searchIcon').on('click', function () {
        $('.search').toggleClass('active');
    });

    ///////////////////////////////////////////////////
});

////////////////////////////////////////////////////////////
$(window).scroll(function(){
    var sticky = $('.titleRow'),
        scroll = $(window).scrollTop();

    if (scroll >= 20) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});

