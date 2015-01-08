<?php
/**
* 
*/
class Dmatrix
{
	protected static $url=DISTANCE_API_URL;
	public static function distance($from,$to){
		$from=self::query($from);
		$to=self::query($to);
		$url=self::$url.'origins='.$from.'&destinations='.$to;
		$response=file_get_contents($url);
		//$response='{"destination_addresses" : [ "Noida, Uttar Pradesh, India" ],"origin_addresses" : [ "New Delhi, Delhi, India" ],"rows" : [{"elements" : [{"distance" : {"text" : "26.4 km","value" : 26423},"duration" : {"text" : "32 mins","value" : 1898},"status" : "OK"}]}],"status" : "OK"	}';	
		return self::matrix(json_decode($response));
	}
	protected static function query($cities){
		$return= is_array($cities)?(implode('|', $cities)):$cities;
		return urlencode($return);
	}
	protected static function matrix($result){
		$origins=$result->origin_addresses;
		$destination=$result->destination_addresses;
		foreach ($origins as $key1 => $value1) {
			foreach ($destination as $key2 => $value2) {
				$return[$key1.'x'.$key2]=new stdClass;
				$response=$result->rows[$key1]->elements[$key2];
				if ($response->status=='OK') {
					$return[$key1.'x'.$key2]->distance=$response->distance->value;
					$return[$key1.'x'.$key2]->duration=$response->duration->text;
					$return[$key1.'x'.$key2]->pair=$value1.':'.$value2;
				}else{
					$return[$key1.'x'.$key2]->distance=0;
					$return[$key1.'x'.$key2]->duration=0;
					$return[$key1.'x'.$key2]->pair=$value1.':'.$value2;
				}
			}
		}
		return sizeof($return)>1?$return:$return['0x0'];
	}
}

?>