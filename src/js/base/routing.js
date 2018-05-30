
function updateMetaByRouteName(routeName){

    var metaTitle = "Colegio Tecnológico de Suba";
    if(routeName == "home"){metaTitle = "Colegio Tecnológico de Suba";}
    if(routeName == "admissions"){metaTitle = "Admisiones en Colegio Tecnológico de Suba. ¡Inscribete!";}
    if(routeName == "about"){metaTitle = "¿Quienes somos? Colegio Tecnológico de Suba";}
    if(routeName == "activities"){metaTitle = "Actividades en el Colegio Tecnológico de Suba";}
    if(routeName == "contact"){metaTitle = "¿Donde estamos? Colegio Tecnológico de Suba";}
    $("title").html(metaTitle );


}




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
            console.warn("Error Destroying FullPage ")
        }
    }

    //Rebuild Acording to RouteName
    // Objeto de Optiones de Fullpage
    var isScrollabe = false;
    if (routeName == "about" && (document.documentElement.clientWidth > 1024)) {
        isScrollabe = true;
        console.log("isScrollable")
    }
    var FullPageOptions = {
        scrollBar: false,
        sectionSelector: 'section',
        responsiveWidth: 800,
        scrollOverflow: isScrollabe,
        scrollBar: true,
        afterLoad: function (anchorLink, index) {
            afterLoadByRouteName(anchorLink, index, routeName);
        },
        onLeave: function (index, nextIndex, direction) {
            onLeaveByRouteName(index, nextIndex, direction, routeName);
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


    updateMetaByRouteName(routeName);

    gtag('config', 'UA-115127460-1', {
        'page_path': '/' + routeName
    });

}


$(document).ready(function () {

    // ------ Handler : Click on routingTo ------- //
    $("[routeTo]").click(function () {


        var _this = $(this);
        if(_this.hasClass("mob")){_this.addClass('animated pulse');}


        try {
            navigator.vibrate(1000);
        } catch (e) {
            console.error("No esta habilitado vibrate")
        }

        $("[routeTo]").removeClass("route-active");
        $(this).addClass("route-active");

        var thisRoute = $(this).attr("routeTo");

        // Ya seleccionado la ruta,... cerramos el menu.
        setTimeout(function () {
             // Updating animation, fullpage,etc
            updateCTSByRouteName(thisRoute);

            $(".hamburger").removeClass("is-active");
            $("mobile-nav nav-menu").removeClass("is-active");
            _this.removeClass('animated pulse');
        }, 850);

        if (window.debugRouting) {
            console.log("routing.js -->  Routing to ' " + thisRoute + " '");
        }

    });



    window.onpopstate = function (event) {
        var content = "";
        if (event.state) {
            content = event.state.plate;
        }
    }





})
