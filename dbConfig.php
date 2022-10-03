<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "order_information";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

session_start();
$db2 = mysqli_connect('localhost', 'root', '', 'order_information');

	// initialize variables
$name = "";
$email = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	mysqli_query($db, "INSERT INTO members (name, email) VALUES ('$name', '$email')"); 
	$_SESSION['message'] = "Address saved"; 
	header('location: orders.php');
}

