/*
function updateRoutingByRouteName(routeName) {

    var targetRoute = $("route[name='" + routeName + "']");
    var allRoutes = $("route");

    allRoutes.removeAttr("active");
    targetRoute.attr("active", "");

    // Destruir Fullpage
    try {
        $.fn.fullpage.destroy("all");
    } catch (e) {
        console.log(e)
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

    lazyloadByRoute();

    // Iniciar Fullpage de Home
    $('route[name="' + routeName + '"]').fullpage(FullPageOptions);

    setCookie("cts-route", routeName, 0.05);
}

*/


function setCookie(clave, valor, diasexpiracion) {
    var d = new Date();
    d.setTime(d.getTime() + (diasexpiracion * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = clave + "=" + valor + "; " + expires;
}

function getCookie(clave) {
    var name = clave + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function routingByCookieOnLoad() {

    var thisRouteCookie = getCookie("cts-route");
    if (window.debugRouting) {
        console.log("Cookie de Ruta es " + thisRouteCookie);
    }
    
 

    if (thisRouteCookie) {
        
        if (thisRouteCookie == "home") {
            setTimeout(function () {
                $.fn.fullpage.moveSectionDown();
            }, 3500)
        }
        updateCTSByRouteName(thisRouteCookie);
        
        
    } else {
        updateCTSByRouteName("home");
        setTimeout(function () {
            $.fn.fullpage.moveSectionDown();
        }, 3500)
    }

}
