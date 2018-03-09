function updateNavStyle(k) {
    if (k == 3) {
        $("nav").removeClass("hide");
    } else {
        $("nav").addClass("hide");
    }

}


function updateNavStyle_w1(k) {


    if (k == 3) {
        $("nav").addClass("light");
    } else {
        $("nav").removeClass("light");
    }

    if (k == 1) {
        $("nav").removeClass("dark");
    } else {
        $("nav").addClass("dark");
    }
}
