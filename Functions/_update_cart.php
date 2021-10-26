<?php 

     
     // session_destroy();
    session_start();
     
     if (isset($_POST['new_cart_quantity'])) {
          $update_quantity =$_POST['new_cart_quantity'];
          $new_p_id = $_POST['p_id'];
          
           foreach ($_SESSION['cart'] as $key => $value) {
                
               if ($value["Product_id"] == $new_p_id) {
                $_SESSION['cart'][$key]['Product_quantity'] = $update_quantity;
                echo "<script>alert('product updated successfully');
                    window.location.href='../Cart.php';
                </script>"; 
               }

                                                
           }
     }
?>