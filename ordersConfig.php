<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "order_information";

$conn = mysqli_connect($server, $user, $pass, $database);

   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>