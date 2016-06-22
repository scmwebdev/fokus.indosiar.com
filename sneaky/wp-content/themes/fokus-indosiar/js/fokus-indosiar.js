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
            '.gallery-col',
            '.item-post-thumb',
            '.entry-meta > .column'
        ];
        $.each(classes, function(i, z) {
            $(classes[i]).matchHeight();
        });
    },
    vidio: function() {
        var vidio = $('.vidio-embed');
        vidio.addClass('embed-responsive-item').click(function(event) {
            event.preventDefault();
        });
    }
};


(function($) {

    Page.init(); //initiliaze the page

})(jQuery);
