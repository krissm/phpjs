$(document).ready(function(){
	$('#box1 img, #box1 p, #box1 h1').click(function(){
		$(this).toggleClass('greenBackground');
		//$(this).css('background-color', 'green');
	});
});