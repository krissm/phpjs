$(document).ready(function(){
	'use strict';
	var inputValue = document.getElementById('emailbox');

	inputValue.onkeydown = function(){
		var output = document.getElementById('output');
		if (!validateEmail(inputValue.value)){
			output.innerHTML = "This is not a valid email";
			output.className = 'red';
		} else if (validateEmail(inputValue.value)) {
			output.innerHTML = "This is a valid email";
			output.className = 'green';
		}
		
		console.log('Everything is ready.');	
	};

});

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
