<?php

// Business Layer

// now include database layer
include("../database/database.php");


// Product Model
class Product {
	private $productDAO = null;
	
	public function __construct() {
		$this->productDAO = new ProductDAO();
	}
	public function readAll() {
		$data = $this->productDAO->readAll();
		return $data;
	}
	public function readByCategory($category) {
		$data = $this->productDAO->readByCategory($category);
		return $data;
	}

}

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

?>
