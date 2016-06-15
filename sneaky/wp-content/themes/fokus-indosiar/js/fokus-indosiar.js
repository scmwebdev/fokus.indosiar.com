/* Fokus Indosiar JS */

(function($) {

    FastClick.attach(document.body); //instantiate fastclick

    /** ********** MainBanner Controller ********** **/
    var MainBanner = {

        init: function(settings) {
            MainBanner.config = {
            	mainGallery 	: $('#main-gallery-desktop'),
                galleryThumb 	: $('#gallery-thumb'),
                firstChild 		: $('.content-theatre:first-child'),
            };

            $.extend(MainBanner.config, settings);
            MainBanner.setup();
            
        },
        setup: function() {
            MainBanner.config.mainGallery
            	.find(MainBanner.config.firstChild)
            	.addClass('active');
            MainBanner.calltoAction();
            
        },
        removeActive: function() {
            MainBanner.config.mainGallery
            	.find('.content-theatre')
            	.removeClass('active');
        },
        calltoAction: function() {
   
            MainBanner.config.galleryThumb
                .find('.item-post__gallery-thumb')
                .click(function() {
                    var thumbID = $(this).attr('data-postid');
                    MainBanner.removeActive();
                    $('.content-theatre[data-postid=' + thumbID + ']').addClass('active');
                })
        }
    };
    $(document).ready(MainBanner.init);

    $(document).ready(function() {
        console.log('Spirit Dreams Inside');

        $('.menu-trigger').click(function() {
            $('body').toggleClass('menu-active');
        });

        $('#main-gallery-mobile').slick({
        	autoplay: true,
        	autoplaySpeed: 4000,
        	draggable: true
        });

    });

})(jQuery);
