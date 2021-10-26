<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password);
mysqli_select_db($db, 'smartmart');

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully\n";
?>
