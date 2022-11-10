<?php

class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "project");
		return $this->con;
	}
}

?>