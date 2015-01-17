<?php
/**
* 
*/
class Agencyaccount
{	protected $data;
	function __construct(){
		$this->data=Auth::agency();
		if (!$this->data) {
			header('Location:/agency/login');
			die;
		}
	}
	
	public function account(){
		$curl=new curl;
		$data=$curl->get('http://10.0.0.230/agency/current?access_token='.$_SESSION['a_token']);
		$this->data->data->current_order=json_decode($data->text)->data;
		$data1=$curl->get('http://10.0.0.230/agency/history?access_token='.$_SESSION['a_token']);
		$this->data->data->order_history=json_decode($data1->text)->data;
		View::make('agency-account',$this->data);
	}
}
?>