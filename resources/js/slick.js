$(".nieuws__slider").slick({
    autoplay: false,
    arrows: false,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    swipeToSlide: true,
    centerMode: true,
    centerPadding: "32px",
    infinite: false,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                centerMode: false,
                slidesToShow: 2,
                centerPadding: "16px",
            },
        },
        {
            breakpoint: 1100,
            settings: "unslick",
        },
    ],
});
