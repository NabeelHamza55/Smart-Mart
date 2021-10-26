<?php 
     include('db_connection.php');
     $s_category_id = $_GET['id'];
     $sql = "DELETE FROM sub_categories where id = '$s_category_id'";
     if(mysqli_query($db, $sql)){
          header('Location: ../_CategoryS_list.php');
     }
?>