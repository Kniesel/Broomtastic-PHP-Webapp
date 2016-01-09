<?php
class DB{
	
	private $servername = "127.0.0.1";
	private $username = "kirchmai14";
	private $password = "9cIb3tdL";
	private $dbname = "kirchmai14";

	public function __construct() {}

	public function connect() {    
        	$mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if($mysqli->connect_error) 
    			die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		return $mysqli;
    	}



}
