<?php

// Business Layer

// now include database layer
include("../database/database.php");

$categories = $_POST["categories"]; 
echo "You entered all categories \n <br>";

$category = $_POST["category"]; 
echo "You entered category: " . $category . "\n <br>";

// Product Model
class Product {
	private $productDAO = null;
	
	public function __construct() {
		$this->productDAO = new ProductDAO();
	}
	public function getAll($categories) {
		$data = $this->productDAO->readAll();
		return $data;
	}
	public function readByCategory($category) {
		$data = $this->productDAO->read($category);
		return $data;
	}

}

?>
