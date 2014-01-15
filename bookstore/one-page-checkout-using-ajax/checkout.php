<?php
// Start session, shopping cart is stored in session
error_reporting(-1);

// Get the action that controlls what will happen
$action = empty($_GET['action']) ? null : $_GET['action'];

if($action == 'sum') {
	session_name('shoppingcart');
	session_start();
	echo json_encode( ( isset($_SESSION['cart']) ? $_SESSION['cart'] : array('sum'=>0) ) );
	exit;
}
else if($action == 'pay') {
	//session_name('checkout-with-ajax');
	session_name('shoppingcart');
	session_start();
	$sum = isset($_POST['payment']) ? $_POST['payment']: null;
	include('cc_form.php');

	// Fix that submit button is not included in form submit from javaScript
	$_POST['doPay'] = true;
	$status = $form->Check();
	$output = 'The form was not submitted';
	$outputClass = 'error';
	$error = null;
	$payment = 0;
	if($status === true) {
		$payment = $form['payment']['value'];
		$output = "The payment transaction was successful. " . $payment . "€ has been taken from your account.";
		$outputClass = 'success';
	}
	else if($status === false){
		$output = "The form contains invalid values. Correct them and try again.";
		$error = $form->GetValidationErrors();
	}

// 	sleep(3);
// 	if(isset($_SESSION['cart'])) {
// 		$_SESSION['cart']['sum'] = round(($_SESSION['cart']['sum'] - $payment) * 1.23, 2);
// 		$sum = $_SESSION['cart']['sum'];
// 	} else {
// 		$sum = 0;
// 	}

	echo json_encode(array('status' => $status, 'output' => $output, 'outputClass' => $outputClass, 'errors' => $error, 'sum' => $sum));
	exit;
}

echo "No valid action specified.";