$(document).ready(function() {

	"use strict";


    initAddClass();
    // Add Class  init
    function initAddClass() {
        "use strict";

        jQuery('.nav-opener').on( "click", function(e){
            e.preventDefault();
            jQuery("body").toggleClass("nav-active");
        });
    }
	
    initSlickSlider();
    // Slick Slider init
    function initSlickSlider() {
        "use strict";

        jQuery('.testimonail-slider').slick({
            dots: true,
            speed: 800,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 4000
        });
        
    }

    initTabs();
    // content tabs init
    function initTabs() {
        jQuery('.tabset').tabset({
            tabLinks: 'a',
            addToParent: true,
            defaultTab: true
        });
    }

});


