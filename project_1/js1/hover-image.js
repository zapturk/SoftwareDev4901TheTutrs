$(function(){
	// lightbox image
	$(".lightbox-video").append("<span></span>");
	
	$(".lightbox-video").hover(function(){
		$(this).find("img").stop().animate({opacity:0.5}, "normal")
	}, function(){
		$(this).find("img").stop().animate({opacity:1}, "normal")
	});
});