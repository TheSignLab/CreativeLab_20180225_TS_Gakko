$(document).ready(function () {



    // ------- Handler : Click on Hamburger ----- //
    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");
        $("mobile-nav nav-menu").toggleClass("is-active");
    });


    // ------ Handler : Click on linkTo ------- //
    $("[linkTo]").click(function () {
        var thisLink = $(this).attr("linkTo");
        window.open(thisLink, '_blank');
    });

    // ------ Handler : Click on linkTo ------- //
    $("[emailTo]").click(function () {
        var thisEmail = $(this).attr("mailTo");
        window.location.href = "mailto:" + thisEmail;
    });





});



function updateDesktopNav(nextIndex, routeName) {
    var navElement = $("desktop-nav wrapper");

    if ((routeName == "home") && (nextIndex == 1 || nextIndex == 2)) {
        navElement.hide();


    } else {
        navElement.show();
        navElement.removeClass("black")
        navElement.removeClass("white")
        navElement.removeClass("yellow")
        navElement.addClass("black")
    }



    if (routeName == "admissions") {

        if (nextIndex == 1) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("black")
        }
        if (nextIndex == 2) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("yellow")
        }
        if (nextIndex == 3) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("white")
        }

    }

    if (routeName == "services") {

        if (nextIndex == 1) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("black")
        }
        if (nextIndex == 2) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("white")
        }
        if (nextIndex == 3) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("yellow")
        }

    }
    
    
        if (routeName == "about") {

        if (nextIndex == 1) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("black")
        }
        if (nextIndex == 2) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("white")
        }
        if (nextIndex == 3) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("yellow")
        }
             if (nextIndex == 4) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("white")
        }

    }

        if (routeName == "activities") {

        if (nextIndex == 1) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("black")
        }
        if (nextIndex == 2) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("white")
        }
        if (nextIndex == 3) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("yellow")
        }
        

    }
    
            if (routeName == "activities") {

        if (nextIndex == 1) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("black")
        }
        if (nextIndex == 2) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("white")
        }
        if (nextIndex == 3) {
            navElement.show();
            navElement.removeClass("black")
            navElement.removeClass("white")
            navElement.removeClass("yellow")
            navElement.addClass("yellow")
        }
        

    }


}
