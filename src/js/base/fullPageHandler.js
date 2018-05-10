function afterLoadByRouteName(anchorLink, index,routeName){
    
    playAnimBySection(routeName, index);
    
    
}

function   onLeaveByRouteName(index, nextIndex, direction,routeName){
    updateDesktopNav(nextIndex,routeName);
    
 if(routeName == "services" && nextIndex=="4"){
     
 }else{
     stopAnimBySection(routeName, index); 
 }
       
    
    
}