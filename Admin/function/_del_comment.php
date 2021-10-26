<?php 
     include('db_connection.php');
     $comment_id = $_GET['id'];
     $sql = "DELETE FROM comments where id = '$comment_id'";
     if(mysqli_query($db, $sql)){
          echo '<script> 
          alert("Comment Deleted Successfully");
          window.location.href="https://php.test/Admin/_Comment_list.php"; </script>';
          mysqli_close($db); 
     }
?>