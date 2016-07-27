var pageFooter = (function() {

    var init = function() {

        site_info(); //call site_info()

    };

    var site_info = function() {

        //declare the variables
        var extra = $('#extra');
        var extra_content = $('.site-info-extra-content');

        // when the site info extra is clicked add/remove class active
        extra.on('click', function(event) {
            event.stopPropagation();
            $(this).toggleClass('active');
        });

        /** 
         * when the window is clicked and if the content has the class 'active' 
         * remove it
         */
        $(window).on('click', function(event) {
            event.stopPropagation();
            if (extra.hasClass('active')) {
                extra.removeClass('active');
            }
        });

        /**
         * When the content is hovered, find the last child of the list and add
         * the class 'lastChildHovered' on the parent.
         * Output: this will highlight the triangle at the bottom
         */
        extra_content.find('li:last-child').hover(function() {
            $(this).toggleClass('lastChildHovered');
        });

    };

    return {
        init: init,
    };

}());