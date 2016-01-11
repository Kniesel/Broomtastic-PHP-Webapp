<?php
// we now in presentation layer
// we will include business layer to load business logic
include("./business/business.php");

// init User Model from Business Logic
$product = new Product();

$category = $_POST["category"]; 

$data = $product->readAll();

if(isset($category) && ($category)) {
	if($category != "Show all categories"){
//echo "You entered all categories \n <br>";
		$data = $product->readByCategory($category);
	}
//call special category


}

// prepare HTML Table
function getHTMLTable($tabledata) {
	$html = null;
	$html = '<table class="tablecontent">';
	$html .= '<thead><tr>';
	$html .= '<th class="tablehead">Product</th>';
	$html .= '<th class="tablehead">Category</th>';
	$html .= '<th class="tablehead">Price</th>';
	$html .= '<th class="tablehead">Description</th>';
	$html .= '</tr></thead>';

	foreach($tabledata as $product) {
		$html .= '<tbody><tr>';
		$html .= '<td class="tablebody">' . $product['productname'] . '</td>';
		$html .= '<td class="tablebody">' . $product['category'] . '</td>';
		$html .= '<td class="tablebody">' . $product['price'] . '</td>';
		$html .= '<td class="tablebody">' . $product['description'] . '</td>';
		$html .= '</tr></tbody>';
	}

	$html .= '</table>';

	return $html;
}

// now we can output the requested data
?>


