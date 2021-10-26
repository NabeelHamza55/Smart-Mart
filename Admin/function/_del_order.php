<?php 
     include('db_connection.php');
     $order_id = $_GET['id'];
     $sql = "DELETE FROM order_manager WHERE id = '$order_id'";
     if(mysqli_query($db, $sql)){
          echo '<script> 
          alert("Order Declined Successfully");
          window.location.href="https://php.test/Admin/_order_list.php"; </script>';
          mysqli_close($db); 
     }
?>