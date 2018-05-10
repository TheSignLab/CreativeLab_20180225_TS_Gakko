console.log("Bienvenido a CTS...");
console.log("........................................");
console.log(" ");

$(document).ready(function () {



    if (document.documentElement.clientWidth > 800) {
        $("body").addClass("desktop");
    } else {
        updateWindowOrientationForCTS()
    }

    // Listen for orientation changes
    window.addEventListener("orientationchange", function () {
        // Announce the new orientation number
        updateWindowOrientationForCTS()
    }, false);


    function updateWindowOrientationForCTS() {
        var wo = window.orientation;
        if (wo == 90) {
            var targetRoute = $("route[name='landscapeDevice']");
            var allRoutes = $("route");
            allRoutes.removeAttr("active");
            targetRoute.attr("active", "");
            $("nav").hide();
            $("footer").hide();
        } else {
            $("nav").show();
            $("footer").show();
        }
    }

})
