$(document).ready(function(){
	$(".contentContainer").css("min-height", $(window).height());
	$("textarea").css("height", $(window).height()-110);
	$("textarea").keyup(function() {
		$.post("updateDiary.php", {diary:$("textarea").val()});
	});

});