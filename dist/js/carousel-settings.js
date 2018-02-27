$(document).ready(function(){
    $(".our-work__popup-slider").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        slide: ".our-work__slider-item",
        arrows: true,
        prevArrow:$(".our-work__previous-button"),
        nextArrow:$(".our-work__next-button"),
        // centerMode: true,
        //centerPadding: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        /*responsive: [
            {
                breakpoint: 477,
                settings: {
                    slidesToShow: 1
                }
            }
        ]*/
    });
});

/*carousel for flats*/

$(document).ready(function(){
    $(".our-work__slider-mobile").slick({
        dots: false,
        infinite: true,
        autoplay: false,
        slide: ".our-work__mobile-item",
        arrows: true,
        prevArrow:$(".our-work__previous-button-mobile"),
        nextArrow:$(".our-work__next-button-mobile"),
        slidesToShow: 1,
        slidesToScroll: 1,
        /*responsive: [
            {
                breakpoint: 477,
                settings: {
                    slidesToShow: 1
                }
            }
        ]*/
    });
});

/*____designers_____*/

$(document).ready(function(){
    $(".our-work__designers-slider").slick({
        dots: true,
        infinite: true,
        autoplay: false,
        slide: ".our-work__designer",
        arrows: true,
           prevArrow:$(".our-work__previous-button-designers"),
           nextArrow:$(".our-work__next-button-designers"),
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

/*____feedback_____*/

$(document).ready(function(){
    $(".footer__feedback-container").slick({
        dots: true,
        infinite: true,
        autoplay: false,
        slide: ".footer__feedback-item",
        arrows: true,
        prevArrow:$(".footer__previous-button-feedback"),
        nextArrow:$(".footer__next-button-feedback"),
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1040,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});
