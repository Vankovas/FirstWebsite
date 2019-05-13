var MIN_SLIDES = 1;
var ACTIVE_CLASS = 'active-slide';

$(document).ready(function() {
    var currentSlide = 1;
    var slidesCount = $('.slideshow-slide').length;

    function setSlideCount() {
        $('.slideshow-count').text(currentSlide + ' / ' + slidesCount);
    }

    function showSlide() {
        $('.slideshow-slide').removeClass(ACTIVE_CLASS);
        $('.slideshow-slide:eq(' + (currentSlide - 1) + ')').addClass(ACTIVE_CLASS);
    }

    setSlideCount();

    $('.slideshow-control').click(function() {
        var isNext = $(this).hasClass('slideshow-next');

        if (isNext) {
            if (currentSlide === slidesCount) return false;

            currentSlide += 1;
        } else {
            if (currentSlide === MIN_SLIDES) return false;

            currentSlide -= 1;
        }

        setSlideCount();
        showSlide();
    });
});

function setSlideCount() {
    $('.slideshow-count').text(currentSlide + ' / ' + slidesCount);
}