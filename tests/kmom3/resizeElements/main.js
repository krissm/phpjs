$(document).ready(function(){
	$('#moreHeight').click(function(){
		$('img').height('+=20');
	});
	
	$('#lessHeight').click(function(){
		$('img').height('-=20');
	});
	
	$('#moreWidth').click(function(){
		$('img').width('+=20');
	});
	
	$('#lessWidth').click(function(){
		$('img').width('-=20');
	});
});