/* Fokus Indosiar JS */

var Page = (function() {

    var init = function() {

        console.log('Spirit Dreams Inside'); // indicate that the whole js is running
        FastClick.attach(document.body); //prevent 300ms on mobile

        /** setup the page **/
        pageHeader.init(); // call the header
        MainGallery.init(); // call the main banner for frontpage
        pageFooter.init(); // call the footer
        /** end **/

        // call the rest of the functions
        same_height();
        vidioUI();

    };

    /**
     * set all the list within the array to matchHeight()
     */
    var same_height = function() {
        var elements = [
            '.item-post',
            '.gallery-col',
            '.item-post-thumb',
            '.entry-meta > .column'
        ];
        $.each(elements, function(i, z) {
            $(elements[i]).matchHeight();
        });
    };

    /**
     * Add all vidio.com embed vidio with the class .embed-responsive-item
     * and set to preventDefault() when its clicked
     */
    var vidioUI = function() {
        var vidio = $('.vidio-embed');
        vidio.addClass('embed-responsive-item').click(function(event) {
            event.preventDefault();
        });
    };

    return {
        init: init
    };

}());


(function($) {

    Page.init(); //initiliaze the page

})(jQuery);
