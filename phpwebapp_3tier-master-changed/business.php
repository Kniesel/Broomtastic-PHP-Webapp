<?php
// Business Layer

// now include database layer
include("database.php");

// User Model
class User {
	private $userDAO = null;
	
	public function __construct() {
		$this->userDAO = new UserDAO();
	}
	public function getAllUsers() {
		$data = $this->userDAO->readAll();
		return $data;
	}
	public function createUser($pk_username) {
		$data = $this->userDAO->create($pk_username);
		return $data;
	}

}