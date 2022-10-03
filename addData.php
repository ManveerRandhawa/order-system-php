<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "order_information");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$productname = mysqli_real_escape_string($link, $_REQUEST['productname']);
$quantity = mysqli_real_escape_string($link, $_REQUEST['quantity']);
$ordertotal = mysqli_real_escape_string($link, $_REQUEST['ordertotal']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);
 
// Attempt insert query execution
$sql = "INSERT INTO orders (name, email, phone, address, productname, quantity, ordertotal, status) VALUES ('$name', '$email', '$phone', '$address', '$productname', '$quantity', '$ordertotal', '$status')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("Location: orders.php");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
// Redirect to the listing page

?>