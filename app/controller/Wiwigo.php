<?php
/**
* 
*/
class Wiwigo
{
	
	function __construct(){
		Auth::request_token();
	}
	public function home(){
		View::make('home');
	}
	public function search(){
		$data=Input::get();
		$curl=new curl;
		$data1=$curl->get(API_URL.'/term/cars');
		$data['cars']=json_decode($data1->text)->data;
		$datas=$curl->get(API_URL.'/search?'.$_SERVER['QUERY_STRING'].'&request_token='.$_SESSION['request_token']);
		$data['search']=json_decode($datas->text)->data;
		View::make('search',$data);
	}
	public function booking(){
		if (isset($_SESSION['search'])) {
			$session=json_decode($_SESSION['search']);
			unset($_SESSION['search']);
			foreach ($session->search as $key => $value) {
				if ($value->id==$_GET['id']) {
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
		View::make('booking',$data);
	}

	public function payment(){
		$data=Input::post();
		if ($data['payment_page']=='payment') {
			$_SESSION['mypayment']=json_encode($data);
		}
		View::make('payment',$data);
	}
}
?>