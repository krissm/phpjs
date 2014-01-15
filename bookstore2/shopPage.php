<?php
error_reporting(-1);
session_name('shoppingcart2');
session_start();

$shopPage = <<<EOD
<div id='flash'>
  <h1>The bookshop for the javascripter</h1>
  <div id='cart'>
    <h2><img src="bookstore2/img/cart.png" width="40px">Shopping cart</h2>
    <div id='content'></div>
    <p>
      Items in cart: <span id="numitems">0</span><br/>
      Total is: <span id="sum">€0</span><br/><br/>
      <input id="clear" type="button" value="Clear" />
      <input id="checkout" type="button" value="Checkout" />
      <span id="status">Nothing has happened yet. Make a purchase.</span>
    </p>
  </div>
  <table>
    <tr>
    	<th>Image</th>
    	<th>Title</th>
    	<th>Price</th>
    	<th>Buy it</th></tr>
    <tr>
    	<td><img src="bookstore2/bok/javascript-the-definitive-guide.jpg?w=200&amp;h=100&amp;crop-to-fit"></td>
    	<td>JavaScript The Definitive Guide</td>
    	<td>€17</td>
    	<td><button id='book1' class="purchase">Buy it</button></td>
    </tr>
  	<tr>
  		<td><img src="bookstore2/bok/javascript-the-good-parts.jpg?w=200&amp;h=100&amp;crop-to-fit"></td>
  		<td>JavaScript The Good Parts</td>
  		<td>€19</td>
  		<td><button id='book2' class="purchase">Buy it</button></td>
  	</tr>
  	<tr>
	  	<td><img src="bookstore2/bok/jquery-novice-to-ninja.jpg?w=200&amp;h=100&amp;crop-to-fit"></td>
	  	<td>jQuery Novice To Ninja</td>
	  	<td>€23</td>
	  	<td><button id='book3' class="purchase">Buy it</button></td>
  	</tr>
  </table>

</div>

EOD;

echo json_encode(array('html' => $shopPage));