;(function($) {
    function bodyScrollAnimation() {
        var scrollAnimate = $('body').data('scroll-animation');
        if (scrollAnimate === true) {
            new WOW({}).init()
        }
    }
    bodyScrollAnimation();
})(jQuery);

