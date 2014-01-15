$(document).ready(function(){
  'use strict';

  $(document).on('click', '#bookstore2', function(e) {
	  e.preventDefault();
	  document.title = "Bookstore2";
	  $('#navbar>a').removeClass();
	  $('#bookstore2').addClass('selected');
	  $.ajax({
			type: 'get',
			url: 'bookstore2/shopPage.php',
		    dataType: 'json',
		    success: function(data){
	    	  $('#main').children().remove();
	    	  $('#main').append(data.html);
	    	  console.log('Ajax request returned successfully.');
	    	  initCart();
		    }
	  });
  });

  // Init the shopping cart
  var initCart = function() {
    $.ajax({
      type: 'post',
      url: 'bookstore2/shop.php',
      dataType: 'json',
      success: function(data){
        updateCart(data);
        console.log('Ajax request returned successfully. Shopping cart initiated.');    
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      }
    });   
  };
  
  
  // Function to update shopping cart
  var updateCart = function(data) {
    $('#content')
    .html(data.content);
    $('#numitems')
    .html(data.numitems);
    $('#sum')
    .html(data.sum);
    $('#status')
    .html('Shopping cart refreshed.');

    $.each(data.items, function(){
      console.log('item.');
    });

    setTimeout(function(){
      $('#status')
      .fadeOut(function(){
        $('#status')
        .html('')
        .fadeIn();
      });
    }, 1000);
    console.log('Shopping cart updated.');
  };

  // Callback when making a purchase
  $(document).on('click', '.purchase', function() {
    var id = $(this).attr('id');
    $.ajax({
      type: 'post',
      url: 'bookstore2/shop.php?action=add',
      data: {
        itemid: id
      },
      dataType: 'json',
      success: function(data){
        updateCart(data);
        console.log('Ajax request returned successfully.');    
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      },
    });
    console.log('Clicked to buy id: ' + id);
  });

  // Callback to clear all values in shopping cart
  $(document).on('click', "#clear", function() {
    $.ajax({
      type: 'post',
      url: 'bookstore2/shop.php?action=clear',
      dataType: 'json',
      success: function(data){
        updateCart(data);
        console.log('Ajax request returned successfully.');    
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      },
    });
    console.log('Clearing shopping cart.');
  });
  
  $(document).on('click', '#checkout', function(){
	  //Get the html for the checkout page
	  var sum = $('#sum').text();
	  console.log(sum);
	  $.ajax({
		type: 'get',
		data: 'sum=' + sum,
		url: 'bookstore2/checkoutPage.php',
	    dataType: 'json',
	    success: function(data){
		  $('#main').children().remove();
		  $('#main').append(data.html);
		  console.log('Ajax request returned successfully.');
	    }
	 });
	  
	 // Get the sum from the shopping cart
	 $.ajax({
	    type: 'post',
	    url: 'bookstore2/checkout.php?action=sum',
	    dataType: 'json',
	    success: function(data){
	      $('#sum')
	      .html(data.sum);
	      console.log('Ajax request returned successfully. Sum updated.');    
	    },
	    error: function(jqXHR, textStatus, errorThrown){
	      console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
	    }
	 });
  });
  
  /**
   * Check if form is valid
   */
  $(document).on('submit', '#form1', function(event) {
	var theForm = $('#form1');
    var formData = theForm.serialize();
    //formData.push({ name: 'doPay', value: true });

    console.log("Form: " + formData);
    console.log('form submitted, preventing default event');
    event.preventDefault();

    $('#output')
    .removeClass()
    .addClass('working')
    .html('<img src="http://dbwebb.se/img/loader.gif"/> Doing payment, please wait and do NOT reload this page...');

    $.ajax({
      type: 'post',
      url: 'bookstore2/checkout.php?action=pay',
      data: formData,
      dataType: 'json',
      success: function(data){
        var errors = '';
        $.each(data.errors || [], function(index, error) {
          errors += '<p>' + error.label + ' ' + error.message + '</p>';
        });
        $('#output')
        .removeClass()
        .addClass(data.outputClass)
        .html('<p>' + data.output + '</p>' + errors);
        $('#sum')
        .html(data.sum);
        console.log('Ajax request returned successfully. ' + data);    
      },
      
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      }
    }); 
    
    console.log('Form submitted, lets wait for a response.');
  });
  
  console.log('Ready to roll.');
});
