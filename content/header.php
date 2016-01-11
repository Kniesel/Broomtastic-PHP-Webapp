<!-- header part of html/php-webpages -->
<html>
	<head>
		<meta charset="utf-8">
		<title>Broomtastic</title>

		<link rel="stylesheet" type="text/css" href="./presentation/style/reset.css" >
		<link rel="stylesheet" type="text/css" href="./presentation/style/desktopstyle.css">
	</head>
	
	<body>
		<div id="wrapper">
			<header>
				<nav>
					<div class="dropdown">
						<button class="dropbutton">Sign in</button>
						<div class="dropdown-content">
							<form action="./user.php" method="post">
								<p>Username</p>
								<input class="inputforms" type="text" name="pk_username">
								<a class="inputforms" href="#">Password</a>
								<a class="inputforms" href="#">Login</a>
								<input class="inputforms" type="submit" value="Show all users / Enter">
							</form>
						</div>
					</div>
					<img id="owl" src="./presentation/img/owl.jpg" alt="Shopping Owl"/>
				</nav>
			</header>
	
			<aside>
				<p class="title1">FILTER BY</p>
					<p class="title1 title2">Category</p>
					<form action="./index.php" method="post" class="filtercontent" name="tabledata"> 
						<select name="category">
							<option>Show all categories</option> 
							<option>Balls</option> 
							<option>Books</option> 
							<option>Brooms</option> 
							<option>Clothing</option> 
						</select>
						<input type="submit" value="OK" class="filtercontent">
					</form> 
			</aside>
			
			<section>
				<h1>Welcome to the Broomtastic-Webshop!</h1>
				<br>
				<p>
					If you would like to see our products, check the Categories-Box left and click on "OK".
					<br>
					For registration, please use the drop-down-menu "Sign in". But you can also just use it to show how many users have already registered.
				</p>
				<br>
				<br>
				<p class="boldtext">Be aware that your username can only be chosen once!</p>
				<br>
				<br>
				<br>