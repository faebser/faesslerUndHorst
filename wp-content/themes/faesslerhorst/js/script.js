/* Author:
	fabian.frei@openinteractive.ch
 */



$(document).ready(function() {
	if( $(window).height() > 561) {
		middleTheContainer();
	}
	$(window).resize(function() {
		if( $(window).height() > 561) {
			middleTheContainer();
		}
		else if($(window).height() < 561 && $('#main').css('top') != '0px') {
			resetTheContainer();
		}
	});
});

$(window).load(function () {
	$('#slider').fadeIn(800, function() {
		$('#main').slideshow();
		$('.sliderItem').hover(function() {
			$(this).find('.imageDescription').animate({right : "10"});
		}, function() {
			$(this).find('.imageDescription').animate({right : "-250"});
		});
	});
});
