<?php
/**
* 
*/
class Agencies extends Model
{
	protected static $table='agency_token';
	public static function login($details){
		return (new self)->insert($details);
	}
}
?>