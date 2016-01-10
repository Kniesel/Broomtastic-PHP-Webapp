<?php
// we now in presentation layer
// we will include business layer to load business logic
include("business.php");

// init User Model from Business Logic
$product = new Product();

$category = $_POST["category"]; 

if($category == "Show all categories"){
    echo "You entered all categories \n <br>";
    $data = $product->readAll();
  }
//call special category
else{
    echo "You entered category: " . $category . "\n <br>";
    $data = $product->readByCategory($category);
  }

// prepare HTML Table
function getHTMLTable($tabledata) {
  $html = '<table id="producttable">';
  $html .= '<thead><tr>';
  $html .= '<th>Product</th>';
  $html .= '<th>Category</th>';
  $html .= '<th>Price</th>';
  $html .= '<th>Description</th>';
  $html .= '</tr></thead>';

  foreach($tabledata as $product) {
    $html .= '<tbody><tr>';
    $html .= '<td>' . $product['productname'] . '</td>';
    $html .= '<td>' . $product['category'] . '</td>';
    $html .= '<td>' . $product['price'] . '</td>';
    $html .= '<td>' . $product['description'] . '</td>';
    $html .= '</tr></tbody>';
  }

  $html .= '</table>';

  return $html;
}

// now we can output the requested data
?>
<html>
 <head> 
   <title>Broomtastic</title>
 </head>
 <body>
 
 <?php echo getHTMLTable($data); ?><br />
 
 </body>
</html>