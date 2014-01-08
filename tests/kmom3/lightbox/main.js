$(document).ready(function(){
	$('.lightbox').click(function(){
		// make it worjk on ipad & android
		var windowHeigth = window.innerHeight || $(window).height(), 
	    	windowWidth  = window.innerWidth  || $(window).width();
		
		// Display the overlay
	    $('<div id="overlay"></div>')
	      .css('opacity', '0')
	      .animate({'opacity' : '0.7'}, 'slow')
	      .appendTo('body');
	    
	    // Create the lightbox container
	    $('<div id="lightbox"></div>')
	      .hide() 
	      .appendTo('body');
	    
	    // Display the image on load
	    $('<img>')
	      .attr('src', $(this).attr('src'))
	      .css({
	    	'height':'400',
	    	'width':'300',
	        'max-height': windowHeigth, 
	        'max-width': windowWidth
	      })
	      .load(function() {
	        $('#lightbox')
	          .css({
	            'top':  (windowHeigth - $('#lightbox').height()) / 2,
	            'left': (windowWidth  - $('#lightbox').width())  / 2
	          })
	          .fadeIn();
	      })
	      .appendTo('#lightbox');
	      
	      // Remove it all on click
	      $('#overlay, #lightbox').click(function() {
	        $('#overlay, #lightbox').remove();
	      });
	      
	      //close with esc button
	      $(document).keyup(function(e) {

	    	  if (e.keyCode == 27) { 
	    		  $('#overlay, #lightbox').remove(); 
	    	  }
	    	});
	    
	    console.log("Display image in colorbox.");
	});
	
});
