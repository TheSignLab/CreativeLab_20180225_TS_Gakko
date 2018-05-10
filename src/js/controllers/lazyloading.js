function lazyloadByRoute() {
    
    $("route[active] img[lazy-load-src]").each(function(){
        var me = $(this);
        var meLazySrc = me.attr("lazy-load-src");
        
        $(this).attr("src",meLazySrc);
        
    });
    
}
