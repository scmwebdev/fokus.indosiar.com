/* Fokus Indosiar JS */

/** ********** MainGallery Controller ********** **/
var MainGallery = {

    init: function(settings) {
        MainGallery.config = {
            mainGallery: $('#main-gallery-desktop'),
            galleryThumb: $('#gallery-thumb').find('.item-post__gallery-thumb'),
            firstChild: $('.content-theatre:first-child'),
        };

        $.extend(MainGallery.config, settings);
        MainGallery.setup();

    },
    setup: function() {
        MainGallery.config.mainGallery
            .find(MainGallery.config.firstChild)
            .addClass('active');
        MainGallery.calltoAction();

    },
    removeActive: function() {
        MainGallery.config.mainGallery
            .find('.content-theatre')
            .removeClass('active');
    },
    calltoAction: function() {
        MainGallery.calculateThumb();
        MainGallery.config.galleryThumb
            .click(function() {
                var thumbID = $(this).attr('data-postid');
                MainGallery.removeActive();
                $('.content-theatre[data-postid=' + thumbID + ']').addClass('active');
            })
    },
    calculateThumb: function() {
        var totalOfThumb = MainGallery.config.galleryThumb.length;
        switch (totalOfThumb) {
            case totalOfThumb <= 2:
                MainGallery.config.galleryThumb.css('width', '50%');
                break;
            case totalOfThumb = 3:
                MainGallery.config.galleryThumb.css('width', '33.3%');
                break;
            case totalOfThumb = 4:
                MainGallery.config.galleryThumb.css('width', '25%');
                break;
            case totalOfThumb >= 5:
                MainGallery.config.galleryThumb.css('width', '20%');
                break;
            default:
                MainGallery.config.galleryThumb.css('width', '20%');
        }
    }
};
/** ********** /end ********** **/

/** ********** Page Contstructor ********** **/
var Page = {

    init: function() {
        console.log('Spirit Dreams Inside');
        FastClick.attach(document.body); //instantiate fastclick
        Page.megamenuToggle();
        Page.gallerySlick();
        Page.matchContentHeight();
    },
    megamenuToggle: function() {
        var trigger = $('.menu-trigger');
        trigger.click(function() {
            $('body').toggleClass('menu-active');
        });
    },
    gallerySlick: function() {
        $('#main-gallery-mobile').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            draggable: true
        });
    },
    matchContentHeight: function() {
        var classes = [
            '.post-list-latest > .item-post',
            '.gallery-col'
        ];
        $.each(classes, function(key, value) {
            $(value).matchHeight();
        });
    }
};


(function($) {

    Page.init(); //initiliaze the page
    MainGallery.init(); //setup the main banner on the frontpage


})(jQuery);
