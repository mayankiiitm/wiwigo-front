<?php
/**
* 
*/
class Agency
{
	public function register(){
		View::make('agency-register');
	}
	public function login(){
		View::make('agency-login');  
	}
}
?>