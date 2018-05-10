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



function updateDesktopNav(nextIndex,routeName){
    var navElement = $("desktop-nav wrapper");
    if( (routeName=="home") && (nextIndex == 0 || nextIndex == 1) ){
        navElement.hide();
    }else{
        navElement.show();
    }
    
}