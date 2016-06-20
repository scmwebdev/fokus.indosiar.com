var pageHeader = {
    init: function(settings) {

        pageHeader.config = {
            menuTrigger: $('#site-menu-trigger')
        };

        $.extend(pageHeader.config, settings);
        pageHeader.bindUIAction();
    },
    bindUIAction: function() {
        var trigger = pageHeader.config.menuTrigger;
        trigger.click(function(event) {
            event.stopPropagation();
            $(this).closest('body').toggleClass('active');
        })
    }
}
