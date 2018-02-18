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