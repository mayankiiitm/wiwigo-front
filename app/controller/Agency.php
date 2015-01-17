<?php
/**
* 
*/
class Agency
{
	function __construct(){
		Auth::request_token();
		if (isset($_COOKIE['atoken']) || isset($_COOKIE['a_token'])) {
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