$(document).ready(function(){
	$("#findMyWeather").click(function(event) {
		event.preventDefault();
		$(".alert").hide();

		if ($("#city").val()!="") {
				$.get("scraper.php?city="+$("#city").val(), function(data) {
				
				if (data=="") {
					
					$("#failure").fadeIn();
				} else {
					
					$("#success").html(data).fadeIn();
				}
			});
		} else {
			$("#noCity").fadeIn();
		}
		
	});

});