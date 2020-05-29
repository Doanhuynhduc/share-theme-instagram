jQuery(document).ready(function($) {
	$('.bar-menu').click(function(event) {
		$(this).next('.list-child').slideToggle(300);
	});
});

$("#load-data").click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
    $("#load-data").hide();
});