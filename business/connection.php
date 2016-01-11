<?php
class DB{
	
	// Hannah
	// private $servername = "127.0.0.1";
	// private $username = "kirchmai14";
	// private $password = "passwort einzeln eingefügt";
	// private $dbname = "kirchmai14";
	// Anja
	// private $servername = "127.0.0.1";
	// private $username = "bergmann14";
	// private $password = "passwort einzeln eingefügt";
	// private $dbname = "bergmann14";
	
	
	public function __construct() {}
	public function connect() {
			$mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if($mysqli->connect_error)
				die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		return $mysqli;
		}
}