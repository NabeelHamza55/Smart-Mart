<?php
 #include('./db_connection.php');


 session_start();
 error_reporting(0);
 session_start();
  $title = "Compare Products";
   include('HTML_start.php');
   include('./Components/_Header.php');
   include('./Components/_comparison.php');
   include('./Components/_Footer.php');
   include('HTML_end.php');
?>
