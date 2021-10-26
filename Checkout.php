<?php
 #include('./db_connection.php');
 $title = "Cart";


 session_start();
 error_reporting(0);
 session_start();
   include('HTML_start.php');
   include('./Components/_Header.php');
   include('./Components/_Checkout.php'); 
   include('./Components/_Featured_Products.php');
   include('./Components/_Footer.php');
   include('HTML_end.php');
?>