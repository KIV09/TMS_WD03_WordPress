jQuery(document).ready(function() {
    $('#intro-slider').flexslider({
        namespace: "flex-",
        controlsContainer: "",
        animation: 'fade',
        controlNav: false,
        directionNav: true,
        smoothHeight: true,
        slideshowSpeed: 7000,
        animationSpeed: 600,
        randomize: false,
    });
});