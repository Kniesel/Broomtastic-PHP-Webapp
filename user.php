<?php
	include("content/header.php");
	include_once("business/users.php");
	?>

<p class="title1 title3">USERS</p>

<?php 
	echo getHTMLTable($data);
	?>
<?php 
	include("./content/footer.php");
	?>
