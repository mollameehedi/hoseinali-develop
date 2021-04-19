$(document).ready(function(){
    "use strict";

    //  Fixed Header & scroll top
    $(window).on('scroll',function () {
        let scrolling = $(this).scrollTop();

        if (scrolling > 200) {
            $(".header").addClass("header--fixed");
            $(".page-wrapper").addClass("header--space");
            // scroll top
            $(".scroll-top").slideDown();
        } else {
            $(".header").removeClass("header--fixed");
            $(".page-wrapper").removeClass("header--space");
            // scroll top
            $(".scroll-top").slideUp();
        }
    });
    // scroll top
    $(".scroll-top").on('click',function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 500);
    });
    // Off Canvas Menu Add & REMOVE CLASS WHEN YOU CLICK, EXCLUDE ELEMENTS
	$(function () {
        $(".navbar-toggler").on('click', function () {
            $(".page-wrapper, .off-canvas-menu").toggleClass("active");
        });
		// elements to ignore
		const ignore = Array("#navbar-toggler", "#off-canvas-menu");
		ignore.forEach(function (item) {
			// loop through ignore array
			$(item).click(function () {
				return false;
			}); // ignore item
		});
		// remove class when you click anywhere else
		$(document).on("click", function () {
            $(".page-wrapper, .off-canvas-menu").removeClass("active");
		});
	});
});