/* Author:
	fabian.frei@openinteractive.ch
 */

$(document).ready(function() {
	if( $(window).height() > 561) {
		var half = ($(window).height()*0.5)-($('#main').outerHeight(true)*0.5);
		$('#main').css({ top: half });
	}
	$(window).resize(function() {
		if( $(window).height() > 561) {
			middleTheContainer();
		}
		else if($(window).height() < 561 && $('#main').css('top') != '0px') {
			resetTheContainer();
		}
	});
	$('.imageDescription').each(function(){
		var $this = $(this);
		var height = $('.menu-mainmenu-container').outerHeight() + $('#controls').outerHeight(true) - parseInt($this.css("padding-top"));
		var imgWidth = $this.siblings('img').outerWidth();
		if(imgWidth-10 < $this.outerWidth(true) + $this.css('left')) {
			$this.css('width', imgWidth - parseInt($this.css('left'))- parseInt($this.css('paddingLeft')) -parseInt($this.css('paddingRight')) - 2);
		}
		$this.css('height', height+'px');
	});
});

$(window).load(function () {
	$('#slider').fadeIn(800, function() {
		$('#main').slideshow();
		$('.sliderItem').hover(function() {
			if(! $(this).find('.imageDescription').is(':animated')) {
				$(this).find('.imageDescription').fadeIn();
			}
		}, function() {
			if(! $(this).find('.imageDescription').is(':animated')) {
				$(this).find('.imageDescription').fadeOut();
			}
		});
	});
});
