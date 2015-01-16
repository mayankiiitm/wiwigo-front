<?php
/**
* 
*/
class Mauth
{
	
	function __construct(){
		$old_token=Input::get('request_token');
		if ($old_token!=$_SESSION['old_token']) {
			Json::make('0','Un-authorized access')->withError(403)->response();
			die;
		}
	}
	public function request_token(){
		$token=Auth::request_token();
		return Json::make('1','Request Token',array('request_token'=>$token))->response();
	}
	public function agency_token(){
		Auth::agency_token();
		return Json::make('1','Updated')->response();
	}
}
?>