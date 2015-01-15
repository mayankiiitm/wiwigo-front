<?php
/**
* 
*/
class Mauth
{
	
	public function request_token(){
		$old_token=Input::get('request_token');
		if ($old_token!=$_SESSION['old_token']) {
			return Json::make('0','Un-authorized access')->withError(403)->response();
		}
		$token=Auth::request_token();
		return Json::make('1','Request Token',array('request_token'=>$token))->response();
	}
	public function agency_token(){
		if($token=Auth::agency_token()){
			return Json::make('1','Agency access token',$token)->response();
		}
		return Json::make('0','Un-authorized access')->withError(403)->response();
	}
}
?>