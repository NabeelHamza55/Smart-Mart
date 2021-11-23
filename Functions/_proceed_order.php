<?php
include('db_connection.php');
session_start();
if (isset($_POST['order_pay'])) {
     if (isset($_SESSION['login'])) {
          $username = $_SESSION['username'];
          $email = $_SESSION['login']; # code...
     }else{
          $username = $_POST['username'];
          $email = $_POST['email'];
     }

     $phone_no = $_POST['phone_no'];  # code...
     $address =$_POST['address'];
     $country = $_POST['country'];
     $pay_method = $_POST['pay_method'];

     $sql1 = "INSERT INTO order_manager (user_name, email, phone_no, address, country, payment_method) VALUES ('$username', '$email', '$phone_no', '$address', '$country', '$pay_method')";
     if(mysqli_query($db, $sql1)){
          $order_id = mysqli_insert_id($db);
          $sql2 = "INSERT INTO user_orders (order_id, product_name, price, quantity) VALUES (?,?,?,?)";
          $stmt = mysqli_prepare($db, $sql2);
          if ($stmt) {
               mysqli_stmt_bind_param($stmt, "isii",$order_id,$product_name,$price,$quantity);
               foreach ($_SESSION['cart'] as $key => $value) {
                    $product_name =$value['Product_Name'];
                    $price = $value['Product_Price'];
                    $quantity = $value['Product_quantity'];
                    mysqli_stmt_execute($stmt);
                    $val_id = $value['Product_id'];
                    $del_val = "SELECT * FROM products WHERE id =  '$val_id'";
                    $p_data = mysqli_query($db, $del_val);
                    $check_p_row = mysqli_num_rows($p_data);
                    if (isset($check_p_row)) {
                         $p_id = mysqli_fetch_assoc($p_data);
                         $after_quantity = $p_id['quantity'] - $value['Product_quantity'];
                         $final_val = "UPDATE products SET quantity = '$after_quantity' WHERE id= $val_id";
                         mysqli_query($db, $final_val);
                    }
               }
               unset($_SESSION['cart']);
               echo "<script>
          window.location.href='/Cart.php';
          alert('Order Placed Successfully');
          </script>";
          }
     }
}
?>
