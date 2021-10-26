<?php 


session_start();
$_SESSION['login']=="";

session_unset();

header('location: ../login.php');


?>