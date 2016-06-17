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

var Footer = {
    init: function() {
        var extraContent = $('.site-info-extra-content');
        var extra = $('.site-info-extra');
        extraContent.find('li:last-child').hover(function() {
            extraContent.toggleClass('lastChildHovered');
        })
        
    }
}
/** ********** Page Contstructor ********** **/
var Page = {

    init: function() {
        console.log('Spirit Dreams Inside');
        FastClick.attach(document.body); //instantiate fastclick
        Page.megamenuToggle();
        Page.toggleActive();
        Page.gallerySlick();
        Page.matchContentHeight();
        Footer.init();
    },
    megamenuToggle: function() {
        var trigger = $('.menu-trigger');
        trigger.click(function() {
            $('body').toggleClass('active');
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
    },
    toggleActive: function(clickArea, injectedClass, targetArea) {
        // set default param: if targetArea is not defined then its the same as clickArea
        targetArea = clickArea || targetArea;
        $(clickArea).click(function() {
            $(targetArea).toggleClass(injectedClass);
        });
    }
};


(function($) {

    Page.init(); //initiliaze the page
    MainGallery.init(); //setup the main banner on the frontpage

    Page.toggleActive('.site-info-extra', 'active');

    // $('.site-info-extra ul li:last-child').hover(
    //     function() {
    //         $('.site-info-extra-content:after').css('border-top-color', '#72be4c');
    //     },
    //     function() {
    //         $('.site-info-extra-content:after').css('border-top-color', '#fff');
    //     }
    // )

    $('.site-info-extra-content:after').css('border-top', '10px solid #72be4c');
})(jQuery);
