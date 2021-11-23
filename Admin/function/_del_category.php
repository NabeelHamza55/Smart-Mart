<?php
     include('db_connection.php');
     $category_id = $_GET['id'];
     $sql = "DELETE FROM categories where id = '$category_id'";
     if(mysqli_query($db, $sql)){
          echo '<script>
               alert("Category Deleted Successfully");
               window.location.href="/Admin/_Category_list.php"; </script>';
               mysqli_close($db);
     }
?>
