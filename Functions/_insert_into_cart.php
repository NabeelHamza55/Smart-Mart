<?php
session_start();
//session_destroy();

if (isset($_POST['insert_into_cart'])) {
     $product_name = $_POST['cart_product'];
     $product_quantity = $_POST['cart_quantity'];
     $product_price = $_POST['cart_price'];
     $product_id = $_POST['cart_id'];

     if (isset($_SESSION["cart"][$product_id])) {
          $previous = $_SESSION["cart"][$product_id]["Product_quantity"];
          $product_quantity = $product_quantity+$previous;
     }

     $_SESSION["cart"][$product_id] = array("Product_Name" =>$product_name, "Product_quantity"=> $product_quantity, "Product_Price"=> $product_price, "Product_id"=> $product_id);
     echo '<script> alert("Product Added To Cart Successfully") </script>';
     // session_destroy();
      header('Location: http://php.test/Singal_Page_Product.php?id='.$product_id);
      //echo '<pre>';
      //print_r($_SESSION["cart"]);
      //echo '</pre>';
}


?>
