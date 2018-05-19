function lazyloadByRoute() {

    $("route[active] img[lazy-load-src]").each(function () {
        var me = $(this);
        var meLazySrc = me.attr("lazy-load-src");

        $(this).attr("src", meLazySrc);

    });

}

    function uploadFullHD() {
        $('img').each(function () {
            var me = $(this);
            var meLazySrc = "";
            if (me.attr("lazy-src")) {
                setTimeout(function () {
                    me.attr("src", me.attr("lazy-src"));
                }, 0)

            }

        });
    }


 window.onload = function() {
     uploadFullHD() 
     
 };
