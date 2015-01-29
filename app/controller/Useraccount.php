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
		$data=$curl->get(API_URL.'/user/current?access_token='.$_SESSION['u_token']);
		$this->data->data->current_order=json_decode($data->text)->data;
		$data1=$curl->get(API_URL.'/user/history?access_token='.$_SESSION['u_token']);
		$this->data->data->order_history=json_decode($data1->text)->data;
		View::make('user-account',$this->data);
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