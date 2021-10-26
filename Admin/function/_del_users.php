<?php 
     include('db_connection.php');
     $user_id = $_GET['id'];
     $sql = "DELETE FROM users WHERE user_id = '$user_id'";
     if(mysqli_query($db, $sql)){
          // header('Location: ../_CategoryS_list.php');
           echo '<script> 
               alert("User Deleted Successfully");
                window.location.href="https://php.test/Admin/_User_list.php"; </script>';
                mysqli_close($db);
     }else{
          die("Error");
     }
?>