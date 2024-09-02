<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";


define('STRIPE_API_KEY', 'sk_test_51Ka40mAjcEw0DwAAzyenSNcEGViMARHmf2pncLIzHDvQbIkyd65tfz1bngBaktfaFp7YdwPOwzkbQTllAGO6cKwt00zK4tuc72');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51Ka40mAjcEw0DwAAl722EWBmScAUk7JDfCFizSi0RtsUZyrF4PC8vVpNIoY0v0E263IKqNMPcLHibHgPXuUa63w000cfDgAhNB');
define('STRIPE_CURRENCY', 'USD');


// Create connection
$db = new mysqli($servername, $username, $password);
mysqli_select_db($db, 'smartmart');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully\n";
