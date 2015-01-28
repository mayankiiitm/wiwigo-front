<?php
/**
* 
*/
class User
{
	
	function __construct(){
		Auth::request_token();
		if (isset($_COOKIE['utoken']) || isset($_COOKIE['u_token'])) {
			header('Location:/agency/account');
			die;
		}
	}
	public function register(){
		View::make('user-register');
	}
	public function login(){
		View::make('user-login');  
	}
}
?>