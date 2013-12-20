$(document).ready(function(){
	'use strict';
	var inputValue = document.getElementById('emailbox');

	inputValue.onkeydown = function(){
		try {
			validateEmail(inputValue.value);
		} catch(e) {
			  console.log(e.name); 
			  console.log(e.message);
		}
		
		console.log('Everything is ready.');	
	};
});

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(!re.test(email)){
  	throw new TypeError('That is not an email!');
  }
}
