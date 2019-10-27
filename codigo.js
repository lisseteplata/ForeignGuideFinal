$(document).ready(function () {
	
	$("#carta2").hide();
	$("#carta3").hide();
	$("#carta4").hide();


	$("#acerca").on("click",function(){
		if( $("#carta1").show() ) {

			$("#acerca").addClass("active");
			$("#mision").removeClass("active");
			$("#vision").removeClass("active");
			$("#objetivo").removeClass("active");

			$("#carta2").hide();
			$("#carta3").hide();
			$("#carta4").hide();
		}	
	});

	$("#mision").on("click",function(){
		if( $("#carta2").show() ) {

			$("#mision").addClass("active");
			$("#acerca").removeClass("active");
			$("#vision").removeClass("active");
			$("#objetivo").removeClass("active");

			$("#carta1").hide();
			$("#carta3").hide();
			$("#carta4").hide();
		}
	});
	
	$("#vision").on("click",function(){
		if( $("#carta3").show() ) {

			$("#vision").addClass("active");
			$("#acerca").removeClass("active");
			$("#mision").removeClass("active");
			$("#objetivo").removeClass("active");

			$("#carta1").hide();
			$("#carta2").hide();
			$("#carta4").hide();
		}
	});
	
	$("#objetivo").on("click",function(){
		if( $("#carta4").show() ) {

			$("#objetivo").addClass("active");
			$("#acerca").removeClass("active");
			$("#mision").removeClass("active");
			$("#vision").removeClass("active");

			$("#carta1").hide();
			$("#carta2").hide();
			$("#carta3").hide();
		}
	});

	

});
	
		
	
