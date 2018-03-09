$(document).ready(function () {
    
    $('main').fullpage({
        sectionSelector: 'section',
        anchors: ['S0_Cover'],
        navigation: true,
		navigationPosition: 'right',
        onLeave: function (index, nextIndex, direction) {

       updateNavStyle_w1(nextIndex);
            if(nextIndex == 1){
                $("#fp-nav").hide();
            }else{
                $("#fp-nav").show();
            }

        }
    });
    $("#fp-nav").hide();
});
