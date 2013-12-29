$(document).ready(function(){
	$('.bg.menu.button').click(function(){
		$('.items').clearQueue().slideToggle();
	});
	
	if($(window).width() < 1024){
		$('.bg.items .item').css({"display": "block"});
	}
});
