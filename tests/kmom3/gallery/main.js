$(document).ready(function(){
	$('img').click(function(){
		// make it worjk on ipad & android
//		var windowHeigth = window.innerHeight || $(window).height(), 
//	    	windowWidth  = window.innerWidth  || $(window).width();
		
		$('.current').remove();
	    // Display the image on load
	    $('<img/>')
	      .attr('src', $(this).attr('src'))
	      .addClass('current')
	      .css({
	    	'height':'400',
	    	'width':'300',
//	        'max-height': windowHeigth, 
//	        'max-width': windowWidth
	      })
	      .appendTo('.gallery-current');
	    
	    console.log("Display image in colorbox.");
	});
	
});
