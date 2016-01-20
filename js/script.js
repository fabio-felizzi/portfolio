$(document).ready(function(){
	$(".page-content-wrapper").css("min-height", $(window).height());

	$(".scrollTo").click(function(e) {
        e.preventDefault();
        $.scrollTo($(this).attr('href'), 1000);
    });

});