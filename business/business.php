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

?>
