$(document).ready(function(){
	//set some variables
	var images = $('.slideshow img'),
	noOfImages = $(images).length,
	currentImage = noOfImages - 1,
	timeoutID = null;
	
	//start rotating images
	rotateImages(currentImage);
	
	//function to go to next image
	$(images)
	.click(function(event){
		event.stopPropagation();
		clearTimeout(timeoutID);
		rotateImages(++currentImage);
	});
	
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
	    	timeoutID = setTimeout(function() {rotateImages(++currentImage);}, 3000);
	    });
	};
});


//function slideShow() {
//	  var current = $('.slideshow .show');
//	  var next = current.next().length ? current.next() : current.siblings().first();
//	  current.hide().removeClass('show');
//	  next.fadeIn().addClass('show');
//	  
//	  setTimeout(slideShow, 3000);
//}