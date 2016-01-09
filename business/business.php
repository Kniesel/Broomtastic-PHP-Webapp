<?php

	$pk_username = $_POST["pk_username"]; 
	echo "You entered the name: " . $pk_username . "\n <br>";

	$userpassword = $_POST["userpassword"]; 
	echo "You entered the password: " . $userpassword . "\n <br>";

	$servername = "localhost";
	$username = "kirchmai14";
	$password = "9cIb3tdL";
	$dbname = "kirchmai14";
	

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 
"INSERT INTO users (pk_username, userpassword)
VALUES ('$pk_username', '$userpassword')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
