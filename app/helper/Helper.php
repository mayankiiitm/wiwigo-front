<?php
/**
* 
*/
class Helper
{
	
	function pre($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	public static function unique($id){
		$replace=array('a','b','c','d','e','f','g','h','i','j','k');
		$time=time().$id;
		$time[0]=$replace[0];
		$time[1]=$replace[1];
		$time[1]=$replace[1];
		$time[5]=$replace[5];
		echo $time;
	}
	public static function rating($rating,$r=false){
		$rating=ceil($rating);
		for ($i=0; $i <$rating ; $i++){ 
			echo $r?' <i class="sprit-a"></i> ':' <i class="sprit-rating-a"></i> ';
	    }
		for ($i=$rating; $i <5 ; $i++) { 
		echo $r?' <i class="sprit-n"></i> ':' <i class="sprit-rating-n"></i> ';
		}
	}
}
?>