/**
 * Place your JS-code here.
 * 
 * I main.js görs ett antal Ajax-frågor för att hantera när nya saker läggs till 
 * kundvagnen och när den töms. Man kan se det som ett API som erbjuds av shop.php.
 */
$(document).ready(function(){
  'use strict';

  // Init the shopping cart
  var initCart = function() {
    $.ajax({
      type: 'post',
      url: 'shop.php',
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
  initCart();
  
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
  $('.purchase').click(function() {
    var id = $(this).attr('id');
    $.ajax({
      type: 'post',
      url: 'shop.php?action=add',
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
  $("#clear").click(function() {
    $.ajax({
      type: 'post',
      url: 'shop.php?action=clear',
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
  console.log('Ready to roll.');
});