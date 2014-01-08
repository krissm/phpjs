$(document).ready(function(){
	'use strict';
	
	var today = new Date();
	console.log(today.getMonth()); // Displays current month.
	today.setMonth(2);
	console.log(today.getMonth()); // Displays month 2, march that is.

	var text;
	text = document.getElementById('text');
	text.innerHTML = 'Hello World, it is ' + today + ' !';
	text.className = 'blue';
	console.log('Everything is ready.');
});