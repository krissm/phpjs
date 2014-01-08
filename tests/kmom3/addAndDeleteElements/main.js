$(document).ready(function(){
	$('input').click(function(){
		$("<p class='newElement'>This is a new element</p>").insertAfter('#firstP').click(function(){
			$(this).remove();
		});
	});
	//why doesn't this work?
//	$('.newElement').click(function(){
//		$(this).remove();
//	});
});