function afterLoadByRouteName(anchorLink, index, routeName) {

    if (index == 4) {
        stopAnimBySection(routeName, 3);
        playAnimBySection(routeName, 3);
    } else {
        playAnimBySection(routeName, index);
    }
}

function onLeaveByRouteName(index, nextIndex, direction, routeName) {
    
    updateDesktopNav(nextIndex, routeName);

    if (routeName == "admissions" && nextIndex == "4") {

    } else {
        stopAnimBySection(routeName, index);
    }

    if (routeName == "services" && nextIndex == "4") {

    } else {
        stopAnimBySection(routeName, index);
    }



}
