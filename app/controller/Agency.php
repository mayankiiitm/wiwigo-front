<?php
/**
* 
*/
class Agency
{
	function __construct(){
		if (isset($_COOKIE['agency_token'])) {
			$token=$_COOKIE['agency_token'];
			$_SESSION['agency_token']=$token;
			setcookie('agency_token',null);
			setcookie('agency_token',$token,time()+60*60*24*365,'/','/',0,1);
		}
		if (isset($_SESSION['agency_token'])) {
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