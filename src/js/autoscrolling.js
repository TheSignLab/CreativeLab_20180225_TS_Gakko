var vAutoScrollingTimmer;
var vScrollingTime = 8000;


function updateAutoScrollingTimming(k) {

    vAutoScrollingTimmer = setTimeout(function () {
      
    }, vScrollingTime);
}


function autoScrollNext() {
     clearTimeout(vAutoScrollingTimmer);
    $.fn.fullpage.moveSectionDown();
   
}
