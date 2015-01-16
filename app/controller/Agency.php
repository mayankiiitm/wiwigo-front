<?php
/**
* 
*/
class Agency
{
	function __construct(){
		Auth::request_token();
		if ($data=Auth::agency()) {
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