(function($) {
	$.fn.switchSlide = function(options) {
		options = $.extend({}, $.fn.switchSlide.defaults, options);
		return this.each(function() {
			// Do something to each item
			var images = $('img'),
			noOfImages = $(images).length,
			currentImage = noOfImages - 1;
			
			//start rotating images
			rotateImages(currentImage);
			
			// Function to rotate images
			function rotateImages(currentImg){
				currentImage = currentImg % noOfImages;
				// Fade out current image
				$(images)
				.eq(currentImage)
			    .fadeOut('slow', function() {
			    	// re-order the z-index to rotate images	
			    	$(images).each(function(i){
			    		$(this).css('zIndex', ((noOfImages - i) + currentImage) % noOfImages);
			    	});
			    	//show the image we just faded out so that it is visible next time around
			    	$(this).show(); 
			    	//pause and then run the function recursively after having incremented the currentImage variable
				    setTimeout(function() {rotateImages(++currentImage);}, options.duration);
				});
			};		
		});
	};
	  
	$.fn.switchSlide.defaults = {
		  'duration': 3000
	};
	
})(jQuery);