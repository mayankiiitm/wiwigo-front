<?php

require_once dirname( __FILE__ ) . '/payu.php';

/* Payments made easy. */

pay_page( array (	'key' => 'gtKFFx', 'txnid' => uniqid( 'animesh_' ), 'amount' => rand( 0, 100 ),
			'firstname' => 'Test', 'email' => 'test@payu.in', 'phone' => '1234567890',
			'productinfo' => 'Product Info', 'surl' => 'payment_success', 'furl' => 'payment_failure'), 'eCwWELxi' );

/* And we are done. */
			


function payment_success() {
	/* Payment success logic goes here. */
	echo "Payment Success" . "<pre>" . print_r( $_POST, true ) . "</pre>";
}

function payment_failure() {
	/* Payment failure logic goes here. */
	echo "Payment Failure" . "<pre>" . print_r( $_POST, true ) . "</pre>";
}
