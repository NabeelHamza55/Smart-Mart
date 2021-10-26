<?php 
include('./function/db_connection.php');

include('Html_opening.php');

if (!(isset($_SESSION['login']))) {
     header('Location: ../login.php');
}else{
   
     include('Sidebar.php');
     include('Nav_Topbar.php');
     include('_Main_content.php');
     include('Footer.php');
     include('Html_closing.php');
}
?>