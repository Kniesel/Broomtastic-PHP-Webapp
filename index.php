<?php
	include("content/header.php");
	include_once("business/products.php");
	?>

<p class="title1 title3">PRODUCTS</p>

<?php 
	echo getHTMLTable($data);
	?>
<?php 
	include("./content/footer.php");
	?>
