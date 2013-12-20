//onload event
$(document).ready(function(){
	'use strict';
	var values, target;

	target = document.getElementById('flash');
	values = document.getElementById('size');
	values['width'].value = target.clientWidth;
	values['height'].value = target.clientHeight;

//onclick event
	values['resize'].onclick = (function(){
		var width, height; 
		width = values['width'].value;
		height = values['height'].value;
		console.log('Resized it to: \t\t' + width + ' x ' + height + 
				' (without counting padding, border or margin). \nPrevious size was: \t' + 
				target.clientWidth + ' x ' + target.clientHeight + ' (counting padding)');
		target.style.width = width + 'px';
		target.style.height = height + 'px';
	});

	console.log('Current size is ' + target.clientWidth + ' x ' + target.clientHeight);
	console.log('Element now has listener on event onclick attacked: ' + values['resize'].onclick);
});