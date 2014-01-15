/**
 * Place your JS-code here.
 */
$(document).ready(function(){
  'use strict';

  /**
   * Function to execute after a successful ajax requests
   */
  var success = function(data) {
    $('#output')
    .removeClass()
    .addClass(data.outputClass)
    .html('<p>' + data.output + '</p>');
    console.log('Ajax request returned successfully. ' + data);    
  };

  var error = function(){
	  $('#output')
	    .removeClass()
	    .html('<p>Nothing returned</p>');
	    console.log('error in Ajax request. ');
  };
  /**
   * Eventhandler for #login
   */
  $('#login').on('click', function(event) {
    $('#output')
    .removeClass()
    .addClass('working')
    .html('<img src="http://dbwebb.se/img/loader.gif"/> Performing login...');
    $.ajax({
      type: 'post',
      url: 'login.php?do=login',
      data: $('#form1').serialize(),
      dataType: 'json',
      success: success,
      error: error
    }); 
    console.log('data sent to the server: ' + $('#form1').serialize());
    console.log('Form submitted, lets wait for a response.');
  });

  /**
   * Eventhandler for #logout
   */
  $('#logout').on('click', function(event) {
    $('#output')
    .removeClass()
    .addClass('working')
    .html('<img src="http://dbwebb.se/img/loader.gif"/> Performing logout...');
    $.ajax({
      type: 'post',
      url: 'login.php?do=logout',
      dataType: 'json',
      success: success
    }); 
    console.log('Form submitted, lets wait for a response.');
  });

  /**
   * Eventhandler for #status
   */
  $('#status').on('click', function(event) {
    $('#output')
    .removeClass()
    .addClass('working')
    .html('<img src="http://dbwebb.se/img/loader.gif"/> Checking current status...');
    $.ajax({
      type: 'post',
      url: 'login.php?do=status',
      dataType: 'json',
      success: success
    }); 
    console.log('Form submitted, lets wait for a response.');
  });
  console.log('Everything is ready.');
});