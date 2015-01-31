<?php
/**
* 
*/
class Model 
{
	 protected $db;
	 public $error;
	 public $count;
	 function __construct($table=null){
	 	$this->db=DB::getInstance();
	}

	public function select($sql,$params=[]){
		$sth= $this->db->prepare($sql);
		if ($sth->execute($params)) {
			$this->error=false;
			$this->count=$sth->rowCount();
			return $sth->fetchAll();
		}
		$this->error=$sth->errorInfo();
		var_dump($this->error);
		return false;
	}

	public function insert(Array $details,$table=null){
		$keys=array_keys($details);
		$column='('.implode(',', $keys).')';
		$values='(:'.implode(',:',$keys).')';
		if ($table) {
			$sql='INSERT INTO '.$table.' '. $column.' VALUES '.$values;
		}else{
			$sql='INSERT INTO '.$this->table.' '. $column.' VALUES '.$values;
		}
		$sth=$this->db->prepare($sql);
		if($sth->execute($details)){
			$this->error=false;
			$this->count=$sth->rowCount();
			return $this->db->lastInsertId();
		}
		$this->error=$sth->errorInfo();
		var_dump($this->error);
		return false;
	}

	public function update($sql,$params=[]){
		$sth=$this->db->prepare($sql);
		if($sth->execute($params)){
			$this->error=false;
			$this->count=$sth->rowCount();
			return true;
		}
		$this->error=$sth->errorInfo();
		return false;	
	}

	public function delete($sql, $params=[]){
		$sth=$this->db->prepare($sql);
		if($sth->execute($params)){
			$this->error=false;
			$this->count=$sth->rowCount();
			return true;
		}
		$this->error=$sth->errorInfo();
		return false;
	}

	public function sql($sql, $params=[]){
		$sth=$this->db->prepare($sql);
		if($sth->execute($params)){
			$this->error=false;
			$this->count=$sth->rowCount();
			return $sth;
		}
		$this->error=$sth->errorInfo();
		return false;		
	}
	public function first($sql, $params=[]){
		$sth= $this->db->prepare($sql);
		if ($sth->execute($params)) {
			$this->error=false;
			$this->count=$sth->rowCount();
			return $sth->fetch();
		}
		$this->error=$sth->errorInfo();
		return false;		
	}
}
