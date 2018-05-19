function load_animation(w, s, t, e, loopCmd) {

    var jsObj;
    var element;
    var animation_path;
    var loop_Cmd;

    if (t == "") {

        if (loopCmd) {
            loop_Cmd = true;
        } else {
            loop_Cmd = false;
        }

        element = $("#w" + w + "_s" + s + "_e" + e + "_obj")[0];
        animation_path = "img/anim/w" + w + "_s" + s + "_e" + e + "_obj.json";
        window["w" + w + "_s" + s + "_e" + e + "_obj"] = lottie.loadAnimation({
            container: element, // the dom element that will contain the animation
            renderer: 'svg',
            loop: loop_Cmd,
            autoplay: true,
            path: animation_path // the path to the animation json
        });
    } else {

        if (loopCmd) {
            loop_Cmd = true;
        } else {
            loop_Cmd = false;
        }

        element = $("#w" + w + "_s" + s + "_t" + t + "_e" + e + "_obj")[0];
        animation_path = "img/anim/w" + w + "_s" + s + "_t" + t + "_e" + e + "_obj.json";
        window["w" + w + "_s" + s + "_t" + t + "_e" + e + "_obj"] = lottie.loadAnimation({
            container: element, // the dom element that will contain the animation
            renderer: 'svg',
            loop: loop_Cmd,
            autoplay: true,
            path: animation_path // the path to the animation json
        });
    }



}


function installAllAnimations() {
    $("anim").each(function (i, el) {
        var me = $(this);
        var meLoop = me.attr('loop');
        var meId = me.attr('id');
        var meIdByStrings = meId.split("_");

        var meW, meS, meT, meE;
        var meLength = meIdByStrings.length;

        if (window.debugAnimation) {
            console.log("Instalando animaciones ... -> La cantidad de animaciones en total son : [" + meLength + "]");
        }
        if (meLength <= 4) {
            meW = parseInt(meIdByStrings[0].replace('w', ''));
            meS = parseInt(meIdByStrings[1].replace('s', ''));
            meT = "";
            meE = parseInt(meIdByStrings[2].replace('e', ''));
        } else {
            if (window.debugAnimation) {
                console.warn("Hay pestañas")
            }
            meW = parseInt(meIdByStrings[0].replace('w', ''));
            meS = parseInt(meIdByStrings[1].replace('s', ''));
            meT = parseInt(meIdByStrings[2].replace('t', ''));
            meE = parseInt(meIdByStrings[3].replace('e', ''));
        }

        if (!meLoop) {
            load_animation(meW, meS, meT, meE, false);
        } else {
            if (window.debugAnimation) {
                console.log("Encontre que la animación id:" + meId + " esta con Loop");
            }
            load_animation(meW, meS, meT, meE, true);
        }

    });
}



function playAnimBySection(route, index) {

    if (!(route == "about" && index == 2)) {
        var w_target = "w";
        var s_target = "s";

        w_target = get_w_target_byRoute(route) + "_";
        s_target = get_s_target_byIndex(index) + "_";

        if (window.debugAnimation) {
            console.log("playAnimationBySection -> Encontre en esta ruta  : ");
            console.log($("anim[id*='" + w_target + s_target + "']"));

        }

        $("anim[id*='" + w_target + s_target + "']").each(function (i, el) {
            var me = $(this);
            var meId = me.attr('id');
            setTimeout(function () {
                window[meId].play();
            }, 500)

        });
    }else{
        $("timeline-desktop item[k='1']").trigger("click");
    }

}

function stopAnimBySection(route, index) {
    var w_target = "w";
    var s_target = "s";

    w_target = get_w_target_byRoute(route) + "_";
    s_target = get_s_target_byIndex(index) + "_";

    $("anim[id*='" + w_target + s_target + "']").each(function (i, el) {
        var me = $(this);
        var meId = me.attr('id');
        window[meId].stop();
    });
}


function get_w_target_byRoute(route) {
    if (route == "home") {
        w_target = "w0";
    }
    if (route == "admissions") {
        w_target = "w1";
    }
    if (route == "services") {
        w_target = "w2";
    }
    if (route == "about") {
        w_target = "w3";
    }
    if (route == "activities") {
        w_target = "w4";
    }
    if (route == "contact") {
        w_target = "w5";
    }
    return w_target;
}

function get_s_target_byIndex(section) {
    return "s" + section;
}



$(document).ready(function () {
    installAllAnimations();
})
