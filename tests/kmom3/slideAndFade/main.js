$(document).ready(function(){
	$('#slideIn').click(function(){
		$('img').slideUp();
	});
	
	$('#slideOut').click(function(){
		$('img').slideDown();
	});
	
	$('#slideToggle').click(function(){
		$('img').slideToggle(1000);
	});
	
	$('#fadeIn').click(function(){
		$('img').fadeIn(1000);
	});
	
	$('#fadeOut').click(function(){
		$('img').fadeOut(1000);
	});
	
	$('#fadeToggle').click(function(){
		$('img').fadeToggle(1000);
	});
	
});