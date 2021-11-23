<?php
 include('db_connection.php');
     $product_id = $_GET['id'];
     echo $product_id;
     $sql = "DELETE FROM products WHERE id = '$product_id'";
     if(mysqli_query($db, $sql)){
         echo '<script>
               alert("Product Deleted Successfully");
               window.location.href="/Admin/_Product_list.php"; </script>';
               mysqli_close($db);
             //  echo "Deleted";
     }
?>
