<?php
/**
* 
*/
class Agencyaccount
{
	function __construct(){
		if (!isset($_SESSION['a_token']) && !isset($_COOKIE['a_token'])) {
			header('location:/agency/login');
			die;
		}
		$token=Auth::agency_token();
		$_SESSION['a_token']=$token['access_token'];
	}
	
	public function account(){
		$curl=new curl;
		$details['rating']=$curl->get('http://10.0.0.230/agency/rating?access_token='.$_SESSION['a_token']);
		$details['details']=$curl->get('http://10.0.0.230/agency/details?access_token='.$_SESSION['a_token']);
		View::make('agency-account',$rating->text);
	}
}
?>