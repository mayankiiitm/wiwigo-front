<?php
/**
* 
*/
class Agency
{
	function __construct(){
		Auth::request_token();
		if (isset($_COOKIE['aemail']) && isset($_COOKIE['atoken'])) {
			$email=$_COOKIE['aemail'];
			$token=$_COOKIE['atoken'];
			Agencies::save_cookie(array('email'=>$_COOKIE['aemail'],'token'=>$_COOKIE['atoken']));
			setcookie('aemail',null);
			setcookie('atoken',null);
			setcookie('a_token', $token,time()+60*60*24*365);
			setcookie('a_email', $email,time()+60*60*24*365);
			$_SESSION['a_token']=$token;
			header('Location:/agency/account');
			die;
		}
		if (isset($_COOKIE['a_token'])) {
			$_SESSION['a_token']=$_COOKIE['a_token'];
			header('Location:/agency/account');
			die;
		}
	}
	public function register(){
		View::make('agency-register');
	}
	public function login(){
		View::make('agency-login');  
	}
}
?>