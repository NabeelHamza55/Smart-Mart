<?php
 #include('./db_connection.php');

 
 session_start();
 error_reporting(0);
 session_start();
 $title = "About US";

   include('HTML_start.php');
   include('./Components/_Header.php');
   include('./Components/_About.php');
   include('./Components/_Offer_Advertisment.php');
   include('./Components/_Team.php');
   include('./Components/_Footer.php');
   include('HTML_end.php');
?>
