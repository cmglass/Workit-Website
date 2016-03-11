
//attempt to animate the appearance of a scrollbar as you scroll past logo currently unsucessful
$(window).scroll(function(){
	if($(".navbar").offset().top>200)
	{
		//$(".navbar-fixed-top").addClass("navbar_state_2");
		$('.navbar-fixed-top').animate({'display':'initial'}, 200, 'easeInOutExpo');
	}else{
		//$(".navbar-fixed-top").removeClass("navbar_state_2");
		$('.navbar-fixed-top').animate({'display':'none'}, 200, 'easeInOutExpo');
	}
});

/*$(function(){
	$("a.page-scroll").bind(click,function(event){
		vart $anchor= $(this);
		$('html, body').stop().animate('.navbar_state_2', 200, 'easeInOutExpo')
	});
});*/