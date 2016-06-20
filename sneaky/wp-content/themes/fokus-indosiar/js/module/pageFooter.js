var pageFooter = {
    init: function() {
    	pageFooter.extra();
    },
    extra: function() {
        var extraContent = $('.site-info-extra-content');
        var extra = $('.site-info-extra');
        extraContent.find('li:last-child').hover(function() {
            extraContent.toggleClass('lastChildHovered');
        })
    }
}
