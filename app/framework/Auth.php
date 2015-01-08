<?php
class Auth 
{   
    private static $table=AUTH_TABLE;
    private static $db;
    public static function authorized(){
        $header=apache_request_headers();
        $authorization=isset($header['Authorization'])?$header['Authorization']:'';
        $public_key=Input::any('public_key');
        $time=Input::any('time');
        if($private_key=self::get_private_key($public_key)){
            $data=$public_key.$time.$private_key;
            $hash=self::hash($data,$private_key);
            return $hash===$authorization?true:false;    
        }
        return false;
    }
    private static function get_private_key($public_key){
        self::$db=DB::getInstance();
        $table=self::$table;
        $sth=self::$db->prepare("SELECT private_key FROM $table WHERE public_key=?");
        $sth->execute(array($public_key));
        if($sth->rowCount()){
            $result=$sth->fetch(PDO::FETCH_OBJ);
            return $result->private_key;
        }
        return false;
    }
    public static function hash($data,$key){
        return hash_hmac('sha256', $data, $key);
    }

    public static function authenticated(){
        $request_token=Input::any('request_token');
        $db=DB::getInstance();
        $table=self::$table;
        $sth=$db->prepare("SELECT id FROM $table WHERE request_token=? AND DATEDIFF(curdate(),rt_time)<".ACCESS_TOKEN_EXPIRY);
        $sth->execute(array($request_token));
        if($sth->rowCount()){
            return true;
        }
        return false;
    }
    public static function request_token($public_key){
        $db=DB::getInstance();
        $table=self::$table;
        $sth=$db->prepare("SELECT request_token, DATEDIFF(curdate(),rt_time) as rt_time FROM $table WHERE public_key=?");
        $sth->execute(array($public_key));
         if(!$sth->rowCount()){
            return false;
        }
        $consumer=$sth->fetch(PDO::FETCH_OBJ);
        if ($consumer->rt_time>ACCESS_TOKEN_EXPIRY || !$consumer->request_token) {
            $request_token=md5(mcrypt_create_iv(64));
            $rt_time=date('Y-m-d H:i:s');
            $sth=$db->prepare("UPDATE $table SET request_token='$request_token',rt_time='$rt_time' WHERE public_key=?");
            if($sth->execute(array($public_key))){
                return $request_token;
            }
            return false;
        }
       return $consumer->request_token;
    }
}
?>