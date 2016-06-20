var Utility = {

    toggleActive: function(clickArea, injectedClass, targetArea) {
        // set default param: if targetArea is not defined then its the same as clickArea
        targetArea = clickArea || targetArea;
        $(clickArea).click(function() {
            $(targetArea).toggleClass(injectedClass);
        });
    }

};
