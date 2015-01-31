<?php
//error_reporting(0);
require_once '../app/lib/payu/payu.php';
/* Payments made easy. */
pay_page( array (	
			'key' => 'gtKFFx', 
			'txnid' => uniqid(), 
			'amount' =>$data['advance'],
			'firstname' => $data['name'], 
			'email' => $data['email'], 
			'phone' => $data['mobile'],
			'productinfo' => 'Wiwigo Booking', 
			'surl' => 'payment_success', 
			'furl' => 'payment_failure'
			), 
		'eCwWELxi' );

/* And we are done. */
			


function payment_success() {
	$model=new Model;
	/* Payment success logic goes here. */
	//echo "Payment Success" . "<pre>" . print_r( $_POST, true ) . "</pre>";
	$payment=json_decode($_SESSION['mypayment']);
	Helper::pre($payment);
	$param=array(
		'origin'=>$payment->origin,
		'destination'=>$payment->destination,
		'start'=>$payment->start,
		'end'=>$payment->end,
		'v_id'=>$payment->v_id,
		'mobile'=>$payment->mobile,
		'email'=>$payment->email,
		'pickup_time'=>$payment->pickup_time,
		'female'=>$payment->female?'1':'0',
		'price'=>$payment->price,
		'advance'=>$payment->advance,
		'state'=>$payment->state,
		'city'=>$payment->city,
		'area'=>$payment->area,
		'address'=>$payment->address,
		'u_id'=>$payment->u_id
		);
	if($id=$model->insert($param,'bookings')){
		header('location:/booking-confirm?id='.$id);
	}
}

function payment_failure() {
	/* Payment failure logic goes here. */
	echo "Payment Failure" . "<pre>" . print_r( $_POST, true ) . "</pre>";
}
