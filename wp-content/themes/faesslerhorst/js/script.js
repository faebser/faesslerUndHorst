/* Author:
	fabian.frei@openinteractive.ch
 */

$(document).ready(function() {
	
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
