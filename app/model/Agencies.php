<?php
/**
* 
*/
class Agencies extends Model
{
	protected $table='agency_token';
	public static function save_cookie($cookie){
		return (new self)->insert($cookie);
	}
	public static function get_token($cookie){
		$agencies=new self;
		$agencycookie=$agencies->select("SELECT * FROM agency_token WHERE email=? AND token=?",array($cookie['a_email'],$cookie['a_token']));
		if (!$agencycookie) {
			return false;
		}
		$agency=$agencies->first("SELECT access_token, DATEDIFF(curdate(),at_time) AS at_time, password FROM agencies WHERE email=:email",array('email'=>$cookie['a_email']));
		if (!$agency) {
			return false;
		}
		if ($agency->at_time>=ACCESS_TOKEN_EXPIRY || !$agency->access_token) {
			$access_token=md5(mcrypt_create_iv(64));
     		$at_time=date('Y-m-d H:i:s');
			$agencies->update("UPDATE agencies SET access_token='$access_token',at_time='$at_time' WHERE email=:email",array('email'=>$cookie['a_email']));
			$agencies->update("UPDATE agency_token SET token='$access_token' WHERE email=? AND token=?",array($cookie['a_email'],$cookie['a_token']));
			$data['access_token']=$access_token;
			return $data;
		}
		$data['access_token']=$agency->access_token;
		$agencies->update("UPDATE agency_token SET token='$agency->access_token' WHERE email=? AND token=?",array($cookie['a_email'],$cookie['a_token']));
		return $data;
	}
}
?>