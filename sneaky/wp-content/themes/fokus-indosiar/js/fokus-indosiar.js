/* Fokus Indosiar JS */

var Page = {

    init: function() {
        console.log('Spirit Dreams Inside');
        FastClick.attach(document.body); //instantiate fastclick
        MainGallery.init(); //setup the main banner on the frontpage
        Page.toggleActive();
        Page.toggleList();
        Page.gallerySlick();
        Page.matchContentHeight();
        pageFooter.init();
    },
    toggleList: function() {
        Page.toggleActive('menu-trigger', 'body', 'active');
        Page.toggleActive('.site-info-extra', 'active');
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
    

    

})(jQuery);
