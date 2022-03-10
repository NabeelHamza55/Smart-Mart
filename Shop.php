<?php
 #include('./db_connection.php');
//  $title = 'Shop';
 if (!empty($_GET["category"])) {
   $cat = $_GET["category"];
         if ($cat == 'Mobiles') {
              $title  = 'Mobiles';
         }
         if ($cat == 'Electronics') {
              $title = 'Electronics';
         }
    }else{
         $title = 'Shop';
    }


 session_start();
 error_reporting(0);
 session_start();
   include('HTML_start.php');
   include('./Components/_Header.php');
   include('./Components/_Products.php');

   include('./Components/_Footer.php');
   include('HTML_end.php');
?>
