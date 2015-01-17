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
    public static function agency(){
        if(isset($_COOKIE['atoken'])){
            $token=$_COOKIE['atoken'];
            $_SESSION['a_token']=$token;
            setcookie('atoken',null);
            setcookie('a_token',$token,time()+3600*24*365);
            $curl=new curl;
            $data=$curl->get('http://10.0.0.230/agency/details?access_token='.$token);
            $details=json_decode($data->text);
            return $details;
        }
        if(isset($_COOKIE['a_token'])){
            $token=$_COOKIE['a_token'];
            $curl=new curl;
            $data=$curl->get('http://10.0.0.230/agency/details?access_token='.$token);
            $details=json_decode($data->text);
            if ($details->error[0]==401) {
                $data1=$curl->post('http://10.0.0.230/agency/refresh?access_token='.$token);
                $data2=json_decode($data1->text);
                $data3=$curl->get('http://10.0.0.230/agency/details?access_token='.$data2->data->access_token);
                $_SESSION['a_token']=$data2->data->access_token;
                setcookie('a_token',$data2->data->access_token,time()+3600*24*365);
                $details1=json_decode($data3->text);
                return $details1;
            }
            return $details;
        }
    }
}
?>