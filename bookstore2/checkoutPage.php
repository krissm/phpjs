<?php
error_reporting(-1);
session_name('shoppingcart2');
session_start();
$sum = $_GET['sum'];
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

echo json_encode(array('html' => $html));