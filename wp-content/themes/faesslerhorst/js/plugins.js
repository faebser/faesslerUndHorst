
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


// place any jQuery/helper plugins in here, instead of separate, slower script files.
/**
 * Slideshow plugin
 * @author fabian.frei@openinteractive.ch
 * @version 1
 * 
 * Added hook to the plugin via functions.
 * Use either hookBefore() or hookNextBefore()/hookPreviousBefore() and viceversa.
 * The plugin first checks for the next/previous hooks before switching back to the general hooks.
 * use the data object to store data which has to be accessed from everywhere in the plugin
 * 
 * Try using the same ids and classes => #slider for the container, .sliderItem for the items
 * and #previous/#next for the buttons
 * if needed you can modify these in the init method of the plugin. 
 */
(function($) {

	data = {
			amountShifting : 1,
			pointer : 0,
			elements : {},
			speed: 1000
	};

	/*function hookBefore() {
		;
	}

	function hookAfter() {
		;
	}

	function hookNextBefore() {
		;
	}*/

	function hookNextAfter() { 
		if(data.pointerIndex < data.elementsAmount-1) {
			data.pointerIndex++;
		}
		else {
			data.pointerIndex = 0;
		}
		console.log(data.pointer);
		console.log(data.elementsAmount);
		console.log(data.pointerIndex);
		data.pointer = data.elements[data.pointerIndex];
	}

	function hookPreviousBefore() {
		if(data.pointerIndex > 0) {
			data.pointerIndex--;
		}
		else {
			data.pointerIndex = data.elementsAmount-1;
		}
		console.log(data.elementsAmount);
		console.log(data.pointer);
		console.log(data.pointerIndex);
		data.pointer = data.elements[data.pointerIndex];
	}

	/*function hookPreviousAfter() {
		
	}*/

	// function has to be called on the parent
	var methods = {
			init: function() { 
				return this.each(function() {

					var $this = $(this);
					var slider = $this.find("#slider");
					/*var spacerSlider = $("#spacer-slider");
					data.spacerSlider = spacerSlider;*/
					data.slider = slider;
					var previous = $("#previous");
					var next = $("#next");
					data.maxWidth = 0;
					data.elementsAmount = 0;
					data.pointerIndex = 0;

					$('.sliderItem').each(function(index, element) {
						data.elements[index] = { element : $(element),  width: $(element).width() };
						data.maxWidth += $(element).width();
						data.elementsAmount++;
					});
					data.pointer = data.elements[data.pointerIndex];
					console.log(data.elements);
					console.log(data.pointer);
					console.log({'width': data.maxWidth});

					/*data.slideShowItemLength = (979) * data.amountShifting;
					if(data.amountShifting == 1) {
						data.maxWidth = Math.ceil(data.slideShowItemLength * slideshowItem.length);
					} else {
						data.maxWidth = Math.ceil( slideshowItem.length / data.amountShifting ) * data.slideShowItemLength;
					}*/

					/**
					 * Added the ability to decide how many items you want to shift
					 * and calculate the maxwidth with the width of one element
					 * 
					 * @author fabian.frei@openinteractive.ch
					 */

					/*data.items = {};
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
					});*/

					// previous
					previous.click(function(event) {
						event.preventDefault(); // prevent firing of default event
						
						resetAllDescriptions();

						if (! slider.is(":animated")) {
							// here are the hook-functions called
							if(typeof hookPreviousBefore == 'function') {
								hookPreviousBefore();
							} 
							else if(typeof hookBefore == 'function') {
								hookBefore();
							}
							var left = parseInt(slider.css('margin-left')) * -1;
							if (left == 0) {
								left = - (data.maxWidth - data.pointer.width); 
							}
							else {
								left = "+=" + data.pointer.width; 
							}							
							slider.animate({
								marginLeft: left
							}, data.speed);
							// here are the hook-functions called
							if(typeof hookPreviousAfter == 'function') {
								hookPreviousAfter();
							} 
							else if(typeof hookAfter == 'function') {
								hookAfter();
							}
						}
					});

					// Next
					next.click(function(event) {
						event.preventDefault();
						
						resetAllDescriptions();
						
						if (! slider.is(":animated")) {
							// here are the before hook-functions called
							if(typeof hookNextBefore == 'function') {
								hookNextBefore();
							} 
							else if(typeof hookNext == 'function') {
								hookNext();
							}
							var left = parseInt(slider.css('margin-left')) * -1;

							if (left == (data.maxWidth - data.pointer.width)) {
								left = 0;
							}
							else {
								left = "-=" + data.pointer.width;
							}

							slider.animate({
								marginLeft: left
							}, data.speed);
							
							// here are the hook-functions called
							if(typeof hookNextAfter == 'function') {
								hookNextAfter();
							} 
							else if(typeof hookAfter == 'function') {
								hookAfter();
							}
						}
					});
				});
			}/*, 
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
					}
				}
			}*/
	}

	$.fn.slideshow = function(method) {
		// Method calling logic
		if ( methods[method] ) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.slideshow' );
		}
	};
})(jQuery);

function middleTheContainer() {
	var half = ($(window).height()*0.5)-($('#main').outerHeight(true)*0.5);
	$('#main').animate({ top: half });
}

function resetTheContainer() {
	$('#main').animate({ top: 0 });
}
function resetAllDescriptions() {
	$('.imageDescription').filter(':visible').each(function(){
		$(this).fadeOut();
	});
}
