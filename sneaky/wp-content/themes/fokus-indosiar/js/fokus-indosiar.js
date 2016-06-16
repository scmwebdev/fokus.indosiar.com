/* Fokus Indosiar JS */

(function($) {

    FastClick.attach(document.body); //instantiate fastclick

    /** ********** MainBanner Controller ********** **/
    var MainBanner = {

        init: function(settings) {
            MainBanner.config = {
            	mainGallery 	: $('#main-gallery-desktop'),
                galleryThumb 	: $('#gallery-thumb').find('.item-post__gallery-thumb'),
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
            MainBanner.calculateThumb();
            MainBanner.config.galleryThumb
                .click(function() {
                    var thumbID = $(this).attr('data-postid');
                    MainBanner.removeActive();
                    $('.content-theatre[data-postid=' + thumbID + ']').addClass('active');
                })
        },
        calculateThumb: function() {
            var totalOfThumb = MainBanner.config.galleryThumb.length;
            console.log(totalOfThumb);
            switch(totalOfThumb) {
                case totalOfThumb <= 2:
                    MainBanner.config.galleryThumb.css('width', '50%');
                    break;
                case totalOfThumb = 3:
                    MainBanner.config.galleryThumb.css('width', '33.3%');
                    break;
                case totalOfThumb = 4:
                    MainBanner.config.galleryThumb.css('width', '25%');
                    break;
                case totalOfThumb >= 5:
                    MainBanner.config.galleryThumb.css('width', '20%');
                    break;
                default:
                    MainBanner.config.galleryThumb.css('width', '20%');
            }
            // if(totalOfThumb < 2) {
            //     MainBanner.config.galleryThumb.css('width', '50%');
            // }
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

        $('.post-list-latest > .item-post').matchHeight();
        $('.gallery-col').matchHeight();

    });

})(jQuery);
