$(document).ready(function () {
    $('main').fullpage({
        sectionSelector: 'section',
        anchors: ['S0_hands', 'S1_Logo', 'S2_CTS'],
        onLeave: function (index, nextIndex, direction) {

            updateNavStyle(nextIndex);
            updateAutoScrollingTimming(nextIndex);

    
        }
    });
});
