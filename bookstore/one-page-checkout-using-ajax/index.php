<?php 
error_reporting(-1);
//session_name('checkout-with-ajax');
session_name('shoppingcart');
session_start();
$sum = isset($_GET['sum'])? $_GET['sum']: 10;
// Include the form
include('cc_form.php');

$payform = $form->GetHTML(array('id' => 'form1', 'columns' => 2));

$html = <<<EOD
<div id='flash'>
  <h1>Checkout</h1>
  <p>The following sum will be charged on your credit card: <span id='sum'></span> €.</p>

  <div id='output'></div>
  {$payform}
</div>

EOD;

$js = "<script src='bookstore/one-page-checkout-using-ajax/main.js'></script>";
$css = "<link href='bookstore/one-page-checkout-using-ajax/style.less' type='text/css' rel='stylesheet/less'>";
  
echo json_encode(array('html' => $html, 'js' => $js, 'css' => $css));
 