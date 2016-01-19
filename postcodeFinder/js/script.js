$(document).ready(function(){
	$("#findMyPostcode").click(function(event) {

		var result=0;
		$(".alert").hide();
		event.preventDefault();
		$.ajax({
			type: "GET",
			url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyCGZoHaZspYc4EHALAZ-iyV53XzK-YX5Fs",
			dataType: "xml",
			success: processXML
		});

		function error() {
			$("#failure2").fadeIn();
		}

		function processXML(xml) {
			$(xml).find("address_component").each(function() {
				if ($(this).find("type").text() == "postal_code") {
					
					$("#success").html("The postcode you need is "+$(this).find("long_name").text()).fadeIn();

					result=1;
				}
			});

			if(result==0) {
				$("#failure").fadeIn();
			}
		}
	});

});