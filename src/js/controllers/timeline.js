$("timeline-desktop bullet").click(function(event){
    var _k = parseInt( $( this ).attr("k") );
    $("timeline-desktop bullet").removeClass("no-active");
    $("timeline-desktop bullet").addClass("no-active");
    $($("timeline-desktop bullet")[_k]).addClass("active");
    
    $('timeline-desktop item[k="'+_k+'"]').removeClass("hidden");
    setTimeout(function(){
         $('timeline-desktop item[k="'+_k+'"] p').show();
    },800);
   

   
    console.log("Click in bullet");
})