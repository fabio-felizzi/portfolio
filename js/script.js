$(document).ready(function(){
	$(".page-content-wrapper").css("min-height", $(window).height());

	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

	$("#home").click(function(e) {
        e.preventDefault();
        $.scrollTo("#welcome", 1000);
    });

    $("#aboutMe").click(function(e) {
        e.preventDefault();
        $.scrollTo("#about", 1000);
    });

    $("#bbcLink").click(function(e) {
        e.preventDefault();
        $.scrollTo("#bbc", 1000);
    });

    $("#reaction").click(function(e) {
        e.preventDefault();
        $.scrollTo("#reactionGame", 1000);
    });

    $("#validator").click(function(e) {
        e.preventDefault();
        $.scrollTo("#formValidator", 1000);
    });

    $("#player").click(function(e) {
        e.preventDefault();
        $.scrollTo("#codePlayer", 1000);
    });

    $("#bootstrapLand").click(function(e) {
        e.preventDefault();
        $.scrollTo("#bootstrapLanding", 1000);
    });

    $("#weather").click(function(e) {
        e.preventDefault();
        $.scrollTo("#weatherApp", 1000);
    });

    $("#diary").click(function(e) {
        e.preventDefault();
        $.scrollTo("#diaryApp", 1000);
    });

    $("#postcode").click(function(e) {
        e.preventDefault();
        $.scrollTo("#postcodeApp", 1000);
    });
});