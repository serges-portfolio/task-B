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
        /*   prevArrow:$(".our-work__previous-button-mobile"),
           nextArrow:$(".our-work__next-button-mobile"),*/
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
