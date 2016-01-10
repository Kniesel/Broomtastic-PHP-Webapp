<?php

// Business Layer

// now include database layer
include("../database/database.php");


$category = $_POST["category"]; 


if ($category == "Show all categories") {
	//function getAll() aufrufen ??;
	echo "You entered all categories \n <br>";
}else{
	// function readby category aufrufen?
	echo "You entered category: " . $category . "\n <br>";
}

// Product Model
class Product {
	private $productDAO = null;
	
	public function __construct() {
		$this->productDAO = new ProductDAO();
	}
	public function getAll() {
		$data = $this->productDAO->readAll();
		return $data;
	}
	public function readByCategory($category) {
		$data = $this->productDAO->read($category);
		return $data;
	}

}

?>
