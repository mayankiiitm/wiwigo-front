<?php
/**
* 
*/
class Useraccount
{	protected $data;
	function __construct(){
		$this->data=Auth::user();
		if (!$this->data) {
			header('Location:/login');
			die;
		}
	}
	
	public function account(){
		$curl=new curl;
		$data=$curl->get('http://10.0.0.230/agency/current?access_token='.$_SESSION['a_token']);
		$this->data->data->current_order=json_decode($data->text)->data;
		$data1=$curl->get('http://10.0.0.230/agency/history?access_token='.$_SESSION['a_token']);
		$this->data->data->order_history=json_decode($data1->text)->data;
		View::make('agency-account',$this->data);
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
		header('Location:/login');
	}
}
?>