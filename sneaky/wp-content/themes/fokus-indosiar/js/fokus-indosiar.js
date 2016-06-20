/* Fokus Indosiar JS */

var Page = {

    init: function() {
        console.log('Spirit Dreams Inside');
        FastClick.attach(document.body); //instantiate fastclick
        pageHeader.init();
        MainGallery.init(); //setup the main banner on the frontpage
        Page.matchContentHeight();
        pageFooter.init();
    },
    matchContentHeight: function() {
        var classes = [
            '.item-post',
            '.gallery-col'
        ];
        $.each(classes, function(i, z) {
            $(classes[i]).matchHeight();
        });
    }
};


(function($) {

    Page.init(); //initiliaze the page

})(jQuery);
