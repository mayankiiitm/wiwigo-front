<?php
/**
* 
*/
class Agencyaccount
{	protected $data;
	function __construct(){
		$this->data=Auth::agency();
		if (!$this->data) {
			header('Location:/agency/login');
			die;
		}
	}
	
	public function account(){
		$curl=new curl;
		$data=$curl->get(API_URL.'/agency/current?access_token='.$_SESSION['a_token']);
		$this->data->data->current_order=json_decode($data->text)->data;
		$data1=$curl->get(API_URL.'/agency/history?access_token='.$_SESSION['a_token']);
		$this->data->data->order_history=json_decode($data1->text)->data;
		View::make('agency-account',$this->data);
	}
	public function adddriver(){
		View::make('add-driver',$this->data);
	}
	public function addvehicle(){
		$curl=new curl;
		$data=$curl->get(API_URL.'/term/cars');
		$this->data->data->cars=json_decode($data->text)->data;
		View::make('add-vehicle',$this->data);
	}
	public function vehicles(){
		$curl=new curl;
		$data=$curl->get(API_URL.'/agency/vehicle?access_token='.$_SESSION['a_token']);
		$this->data->data->vehicles=json_decode($data->text)->data;
		$data1=$curl->get(API_URL.'/agency/driver?access_token='.$_SESSION['a_token']);
		$this->data->data->drivers=json_decode($data1->text)->data;
		View::make('vehicles',$this->data);
	}
	public function logout(){
		session_destroy();
		if (isset($_SERVER['HTTP_COOKIE'])) {
    		$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie) {
    			$parts = explode('=', $cookie);
    			$name = trim($parts[0]);
    			setcookie($name, '', time()-1000);
    			setcookie($name, '', time()-1000, '/');
    		}
		}
		header('Location:/agency/login');
	}
}
?>