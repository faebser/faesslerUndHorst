/* Author:
	fabian.frei@openinteractive.ch
 */
var data;
var result;
var slideshow;
var slideshowItem
$(document).ready(function() {
	
});

/**
 * Slideshow plugin
 */
(function($) {
	
	data = {
			amountShifting : 1
	};
	
	 // function has to be called on the parent
		var methods = {
				init: function() { 
					return this.each(function() {
					
					
					var $this = $(this);
					var slider = $this.find("#slider");
					var spacerSlider = $("#spacer-slider");
					data.spacerSlider = spacerSlider;
					data.slider = slider;
					var back = $("#back");
					var next = $("#next");
					
					slideshowItem = $this.find(".sliderItem");
					
					data.slideShowItemLength = (979) * data.amountShifting;
					if(data.amountShifting == 1) {
						data.maxWidth = Math.ceil(data.slideShowItemLength * slideshowItem.length);
					} else {
						data.maxWidth = Math.ceil( slideshowItem.length / data.amountShifting ) * data.slideShowItemLength;
					}

					/**
					 * Added the ability to decide how many items you want to shift
					 * and calculate the maxwidth with the width of one element
					 * 
					 * @author fabian.frei@openinteractive.ch
					 */
					
					data.items = {};
					var url = window.location.pathname.split('/');
					url = url[url.length-1];
					url = url.split('.')[0];
					
					$('.sliderItem').each(function(index) {
						var id = $(this).attr('id').split('-')[0];
						data.items[id] = {};
						data.items[id].name = id;
						data.items[id].position = index;
						if(id == url || url == 'angebote' && index == 0) {
							data.items[id].active = true;
						} else {
							data.items[id].active = false;
						}
					})
					
					$('nav ul.level1 li a').click(function(event) {
						event.preventDefault();
						var url = $(this).attr('href').split('/');
						url = url[url.length-1];
						url = url.split('.')[0];
						$(this).parent().siblings().each(function() {
							$(this).find('a').css('text-decoration','none');
						});
						$(this).css('text-decoration','underline')
						slideshow.slideshow('slideTo',url);
					});
					
					// Back
					back.click(function(event) {
						event.preventDefault();
						if (! slider.is(":animated")) {

							var left = parseInt(slider.css('margin-left')) * -1;

							if (left == 0) {
								left = - (data.maxWidth - data.slideShowItemLength); 
							}
							else {
								left = "+=" + data.slideShowItemLength; 
							}
							$('nav ul.level1 li a').each( function(index) {
								if($(this).css('text-decoration') == 'underline') {
									$(this).css('text-decoration','none');
									if($(this).parent().prev().length == 0) {
										$('nav ul.level1 li a').last().css('text-decoration','underline')
									} else {
										$(this).parent().prev().find('a').css('text-decoration','underline');
									}
									
									return false;
								}
							});
							
							
							slider.animate({
								marginLeft: left
							});
							spacerSlider.animate({
								marginLeft: left
							});
						}
					});

					// Next
					next.click(function(event) {
						event.preventDefault();
						if (! slider.is(":animated")) {
							var left = parseInt(slider.css('margin-left')) * -1;

							if (left == (data.maxWidth - data.slideShowItemLength)) {
								left = 0;
							}
							else {
								left = "-=" + data.slideShowItemLength;
							}
							
							$('nav ul.level1 li a').each( function(index) {
								if($(this).css('text-decoration') == 'underline') {
									$(this).css('text-decoration','none');
									console.log($(this).parent().next());
									if($(this).parent().next().length == 0) {
										$('nav ul.level1 li a').first().css('text-decoration','underline')
									} else {
										$(this).parent().next().find('a').css('text-decoration','underline');
									}
									
									return false;
								}
							});

							slider.animate({
								marginLeft: left
							});
							spacerSlider.animate({
								marginLeft: left
							});
						}
					});
				});
			}, 
				slideTo : function(name) {
					var prevItem, nextItem, diff;
					for ( var item in data.items) {
						if(data.items[item].active == true) {
							prevItem = data.items[item];
						}
						if(item == name) {
							nextItem = data.items[item];
						}
						if(prevItem != undefined && nextItem != undefined) {
							diff = prevItem.position - nextItem.position;
							break;
						}
					}
					prevItem.active = false;
					nextItem.active = true;
					
					var slider = data.slider;
					var spacerSlider = data.spacerSlider;
					if(diff > 0) {
						if (! slider.is(":animated")) {

							var left = parseInt(slider.css('margin-left')) * -1;

							if (left == 0) {
								left = - (data.maxWidth - data.slideShowItemLength); 
							}
							else {
								left = "+=" + diff * data.slideShowItemLength;; 
							}

							slider.animate({
								marginLeft: left
							});
							spacerSlider.animate({
								marginLeft: left
							});
						}
					} 
					else if(diff < 0) {
						if (! slider.is(":animated")) {
							var left = parseInt(slider.css('margin-left')) * -1;
							
							if (left == (data.maxWidth - data.slideShowItemLength)) {
								left = 0;
							}
							else {
								left = "-=" + (diff*-1) * data.slideShowItemLength;;
							}

							slider.animate({
								marginLeft: left
							});
							spacerSlider.animate({
								marginLeft: left
							});
						}
					}
			}
		}
		
		$.fn.slideshow = function(method) {
			 // Method calling logic
			if ( methods[method] ) {
				return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
			} else if ( typeof method === 'object' || ! method ) {
				return methods.init.apply( this, arguments );
			} else {
				$.error( 'Method ' +  method + ' does not exist on jQuery.tooltip' );
			}
		};
})(jQuery);

