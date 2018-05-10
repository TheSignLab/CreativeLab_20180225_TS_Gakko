function updateCTSByRouteName(routeName) {
    var targetRoute = $("route[name='" + routeName + "']");
    var allRoutes = $("route");

    allRoutes.removeAttr("active");
    targetRoute.attr("active", "");

    // Destruir Fullpage
    try {
        $.fn.fullpage.destroy("all");
    } catch (e) {
        if (window.debugRouting) {

            console.warn("Hey, tenemos un error en routing.js Linea 12")
        }
    }

    //Rebuild Acording to RouteName
    // Objeto de Optiones de Fullpage
    var FullPageOptions = {
        scrollBar: false,
        sectionSelector: 'section',
        responsiveWidth: 800,
        scrollOverflow: false,

        afterLoad: function (anchorLink, index) {

            afterLoadByRouteName(anchorLink, index, routeName);

        },
        onLeave: function (index, nextIndex, direction) {
            onLeaveByRouteName(index, nextIndex, direction, routeName);
        }
    }
if(routeName == "about" && $("body").hasClass("desktop")){
      var FullPageOptions = {
        scrollBar: false,
        sectionSelector: 'section',
        responsiveWidth: 800,
        scrollOverflow: true,

        afterLoad: function (anchorLink, index) {

            afterLoadByRouteName(anchorLink, index, routeName);

        },
        onLeave: function (index, nextIndex, direction) {
            onLeaveByRouteName(index, nextIndex, direction, routeName);
        }
    }
}
    lazyloadByRoute();

    // Iniciar Fullpage de Home
    $('route[name="' + routeName + '"]').fullpage(FullPageOptions);

    setCookie("cts-route", routeName, 0.05);

    $("[swiper-name]").each(function () {
        var meId = $(this).attr("swiper-name");
        window["swiper_" + meId].update();
    })
}


$(document).ready(function () {

            // ------ Handler : Click on routingTo ------- //
            $("[routeTo]").click(function () {

                    var thisRoute = $(this).attr("routeTo");

                    // Updating animation, fullpage,etc
                    updateCTSByRouteName(thisRoute);


                    // Ya seleccionado la ruta,... cerramos el menu.
                    setTimeout(function () {
                        $(".hamburger").removeClass("is-active");
                        $("mobile-nav nav-menu").removeClass("is-active");
                    }, 850);

                    if (window.debugRouting) {

                        console.log("routing.js -->  Routing to ' " + thisRoute + " '");
                    }
                   

                    });

            })
