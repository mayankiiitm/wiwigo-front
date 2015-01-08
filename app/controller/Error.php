<?php
/**
* 
*/
class Error
{
	protected static $error=array(
		100=>'EMAIL_UNIQUE',
		101=>'USERNAME_UNIQUE',
		102=>'INVALID_INPUT',
		103=>'INVALID_INPUT',
		104=>'INVALID_CREDENTIAL',
		105=>'UPLOAD_RC',
		106=>'WRONG_FILE',
		107=>'CANT_ACCESS',
		401=>'UNAUTHORIZED_ACCESS',
		503=>'SERVER_ERROR'
	);

	public function home(){
		return Json::make('0','invalid URL/Method')->withError(404)->response(200);
		die;
	}
	public function code($code){
		if (!array_key_exists($code, self::$error)) {
			return Json::make('0',"Invalid Error code")->response();	
		}
		return Json::make('1',$code,self::$error[$code])->response();
	}
}
?>