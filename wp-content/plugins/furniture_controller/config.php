<?php 

	require_once('inc/stripe/init.php');
	$stripe = array(
 		"secret_key"      => "sk_test_Grq0h2qciv06GoPjaVCb4sMt",
  		"publishable_key" => "pk_test_DHjW8QhMRsI9BEmuawWQReBj"
	);

	\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>