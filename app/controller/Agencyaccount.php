<?php
/**
* 
*/
class Agencyaccount
{
	function __construct(){
		if (!Auth::agency()) {
			die;
		}
	}
	
	public function account(){
		View::make('agency-account');
	}
}
?>