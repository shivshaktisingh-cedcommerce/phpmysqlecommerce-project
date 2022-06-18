<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";


// Create connection
$conn = mysqli_connect($servername, $username, $password, 'store1');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>