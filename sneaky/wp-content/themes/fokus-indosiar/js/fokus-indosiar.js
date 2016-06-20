/* Fokus Indosiar JS */

var Page = {

    init: function() {
        console.log('Spirit Dreams Inside');
        FastClick.attach(document.body); //instantiate fastclick
        MainGallery.init(); //setup the main banner on the frontpage
        Page.toggleList();
        Page.gallerySlick();
        Page.matchContentHeight();
        pageFooter.init();
    },
    toggleList: function() {
        Utility.toggleActive('menu-trigger', 'body', 'active');
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

})(jQuery);
