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
	/* Payment success logic goes here. */
	//echo "Payment Success" . "<pre>" . print_r( $_POST, true ) . "</pre>";
	$payment=json_decode($_SESSION['mypayment']);
	Helper::pre($payment);
	$model=new Model;
	$sql1="INSERT INTO users (name,email,mobile,password) VALUES (:name,:email,:mobile,:password)";
	$sql2="INSERT INTO bookings (origin,destination,start,end,v_id,u_id,mobile,email,pickup_time,female,price,advance,state,city,area,address,pin) VALUES
		   (:origin,:destination,:start,:end,:v_id,:u_id,:mobile,:email,:pickup_time,:female,:price,:advance,:state,:city,:area,:address,:pin)";
	$param1=array(
		'name'=>$payment->name,
		'email'=>$payment->email,
		'mobile'=>$payment->mobile,
		'password'=>password_hash($payment->password,PASSWORD_BCRYPT,array('cost'=>10))
		);
	$param2=array(
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
		'address'=>$payment->address
		);
	if($id=$model->insert($param1,'users')){
		$param2['u_id']=$id;
		if($model->insert($param2,'bookings')){
			echo "success";
			Helper::pre($_SESSION);
		}
		else{
			var_dump($model);
		}
	}
}

function payment_failure() {
	/* Payment failure logic goes here. */
	echo "Payment Failure" . "<pre>" . print_r( $_POST, true ) . "</pre>";
}
