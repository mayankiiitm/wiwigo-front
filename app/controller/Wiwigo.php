<?php
/**
* 
*/
class Wiwigo
{
	protected $user;
	function __construct(){
		Auth::request_token();
		$this->user=Auth::user();
	}
	public function home(){
		View::make('home');
	}
	public function search(){
		$data=Input::get();
		if (!$data['from'] || !$data['to'] || !$data['start'] || !$data['end']) {
			return header('location:/');
		}
		$curl=new curl;
		$data1=$curl->get(API_URL.'/term/cars');
		$data['cars']=json_decode($data1->text)->data;
		$datas=$curl->get(API_URL.'/search?'.$_SERVER['QUERY_STRING'].'&request_token='.$_SESSION['request_token']);
		$data['search']=json_decode($datas->text)->data;
		View::make('search',$data);
	}
	public function booking(){
		$id=Input::get('id');
		$curl=new curl;
		if ((!isset($_SESSION['booking']) && !isset($_SESSION['search'])) || !$id) {
			header('location:/');
			die;
		}
		if (isset($_SESSION['search'])) {
			$session=json_decode($_SESSION['search']);
			unset($_SESSION['search']);
			foreach ($session->search as $key => $value) {
				if ($value->id==$id) {
					$val=$value;
					break;
				}
			}
			$data['search']=$val;
			$data['from']=$session->from;
			$data['to']=$session->to;
			$data['start']=$session->start;
			$data['end']=$session->end;
			$_SESSION['booking']=json_encode($data);	
		}else{
			$datas=json_decode($_SESSION['booking']);
			$data['search']=$datas->search;
			$data['from']=$datas->from;
			$data['to']=$datas->to;
			$data['start']=$datas->start;
			$data['end']=$datas->end;
		}
		$data['user']=$this->user;
		$curl->post(API_URL.'/booking/setflag?access_token='.$_SESSION['u_token'],'id='.$id);
		View::make('booking',$data);
	}

	public function payment(){
		$data=Input::post();
		$data['u_id']=$this->user->data->id;
		if ($data['payment_page']=='payment') {
			$_SESSION['mypayment']=json_encode($data);
		}
		if (!isset($_SESSION['mypayment'])) {
			header('location:/');
		}
		View::make('payment',$data);
	}
}
?>