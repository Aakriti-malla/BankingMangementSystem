<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "customers";
$port = "3307";

// Create connection
$conn = mysqli_connect($servername,
		$username, $password, $database_name, $port);
// $conn = new mysqli($servername, $username, $password,$database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>