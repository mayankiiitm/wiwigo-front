<?php
class Auth 
{   
    public static function hash($data,$key){
        return hash_hmac('sha256', $data, $key);
    }

    public static function request_token(){
        $time=time();
        $data=PUBLIC_KEY.$time.PRIVATE_KEY;
        $hash=self::hash($data,PRIVATE_KEY);
        $curl=new curl;
        $curl->set_headers(array('Authorization:'.$hash));
        $data = $curl->get('http://10.0.0.230/mauth?public_key='.PUBLIC_KEY.'&time='.$time);
        $arr=json_decode($data->text);
        $_SESSION['old_token']=isset($_SESSION['request_token'])?$_SESSION['request_token']:'';
        $_SESSION['request_token']=$arr->data->request_token;
        return $arr->data->request_token;
    }
}
?>