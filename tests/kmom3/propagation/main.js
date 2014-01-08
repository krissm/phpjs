$(document).ready(function(){
	$('#box1, #box1 img').click(function(event){
		event.stopPropagation();
		$(this).toggleClass('greenBackground');
		//$(this).css('background-color', 'green');
	});
});