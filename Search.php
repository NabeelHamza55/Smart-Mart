<?php
 #include('./db_connection.php');


 session_start();
 error_reporting(0);
   include('HTML_start.php');
   include('./Components/_Header.php');
   include('./Functions/_Search.php');  
   include('./Components/_Footer.php');
   include('HTML_end.php');
?>
