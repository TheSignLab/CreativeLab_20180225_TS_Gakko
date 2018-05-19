var currentAnimation = 1;
var nextAnimation = 2;

$("timeline-desktop bullet, timeline-desktop item").click(function (event) {
    var _k = parseInt($(this).attr("k"));
    $("timeline-desktop bullet").removeClass("no-active");
    $("timeline-desktop bullet").addClass("no-active");
    $($("timeline-desktop bullet")[_k]).addClass("active");

    $('timeline-desktop item[k="' + _k + '"]').removeClass("hidden");

    setTimeout(function () {
        $('timeline-desktop item[k="' + _k + '"] p').show();
    }, 800);
    
    var  allAnim = $('timeline-desktop anim');
    allAnim.each(function(){
        var _this = $(this);
        var _this_id = _this.attr("id");
        window[_this_id].stop();
    })
    

    var currentId = $('timeline-desktop item[k="' + _k + '"] anim').attr("id");
    var currentElement = currentId.split("w3_s1_e");
    var current_e = parseInt(currentElement[currentElement.length - 1]);
    
    var next_e = getNextKAnim(current_e);
    var nextId = "w3_s1_e" + next_e + "_obj";
    
     window[nextId].stop();
    window[nextId].play();

    console.log("Click in bullet");
});




function getTimeLineAnimOrder(k) {
    if (k == 1) {
        return 1;
    }
    if (k == 2) {
        return 3;
    }
    if (k == 3) {
        return 5;
    }
    if (k == 4) {
        return 7;
    }
    if (k == 5) {
        return 9;
    }
    if (k == 6) {
        return 11;
    }


    if (k == 7) {
        return 2;
    }
    if (k == 8) {
        return 4;
    }
    if (k == 9) {
        return 6;
    }
    if (k == 10) {
        return 8;
    }
    if (k == 11) {
        return 10;
    }

}

function getNextKAnim(K){
    var nextK = 0; 
    
    if(K>=0 && K<=6){
        nextK = K + 6;
    }else{
        nextK = K - 5;
    }
    
    return nextK;
}
