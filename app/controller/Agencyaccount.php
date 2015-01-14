<?php
/**
* 
*/
class Agencyaccount
{
	
	function __construct(){
		if (!isset($_SESSION['agency_token'])) {
			header('Location:/agency/login');
			die;
		}
	}
	public function account(){
		$curl=new curl;
        $data = $curl->get('http://10.0.0.230/agency/details?access_token='.$_COOKIE['agency_token']);
        $arr=json_decode($data->text);
        return View::make('agency-account',$arr->data);
	}
}
?>