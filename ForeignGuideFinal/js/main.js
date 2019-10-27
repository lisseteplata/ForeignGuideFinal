$(document).ready(function () {
    console.log("Ready.")
});
	
		
function aboutBlock(num){
    // console.log("Called now.")
    $("#btn-about-1").removeClass("menu-active");
    $("#btn-about-2").removeClass("menu-active");
    $("#btn-about-3").removeClass("menu-active");
    $("#btn-about-4").removeClass("menu-active");

    $("#btn-about-" + num).addClass("menu-active");

    $("#text-1").addClass("text-disable");
    $("#text-2").addClass("text-disable");
    $("#text-3").addClass("text-disable");
    $("#text-4").addClass("text-disable");

    $("#text-" + num).removeClass("text-disable");
}
