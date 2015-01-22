<?php
/**
* 
*/
class User
{
	
	function __construct(){
		Auth::request_token();
	}
	public function home(){
		View::make('home');
	}
	public function search(){
		$data=Input::get();
		$curl=new curl;
		$data1=$curl->get('http://10.0.0.230/term/cars');
		$data['cars']=json_decode($data1->text)->data;
		$datas=$curl->get('http://10.0.0.230/search?'.$_SERVER['QUERY_STRING'].'&request_token='.$_SESSION['request_token']);
		$data['search']=json_decode($datas->text)->data;
		View::make('search',$data);
	}
	public function booking(){
		$data=json_decode($_SESSION["'".$_GET['id']."'"]);
		View::make('booking',$data);
	}

	public function payment(){
		$data['session']=json_decode($_SESSION["'".$_GET['id']."'"]);
		$data['details']=Input::post();
		View::make('payment',$data);
	}
}
?>