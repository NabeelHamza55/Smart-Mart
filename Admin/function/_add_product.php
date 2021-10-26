<?php

 $error_exist = '';
 $successful = "";
     function add_product(){
          global $db;
          global $error_exist;
          global $successful;

          if (isset($_POST['submit_product'])) {
               $unique_id = $_POST['unique_id'];               
               $product_name = $_POST['product_name'];
               $brand_name = $_POST['brand_name'];
               $cat_selector = $_POST['cat_selector'];
               $sub_cat_selector = $_POST['sub_cat_selector'];
               $sale_price = $_POST['sale_price'];
               $quantity = $_POST['quantity'];
               $short_disc = $_POST['short_disc'];
               $long_disc = $_POST['long_disc'];
               
               $check_query = "SELECT * FROM PRODUCTS WHERE unique_id = '$unique_id'";
               $check_result = mysqli_query($db, $check_query);
               $check_rows = mysqli_num_rows($check_result);
               if ($check_rows > 0) {
                   $error_exist = "Product Already Exist <br>";
               }else{

                    
               // File Upload
                    // Check if file was uploaded without errors
                    if($_FILES["product_img"]["error"] == 0){
                         $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                         $filename = $product_name. "_" .time(). "_" .$_FILES["product_img"]["name"];
                         $filetype = $_FILES["product_img"]["type"];
                         $filesize = $_FILES["product_img"]["size"];
                         $filename = $product_name.time(). "_" .$_FILES["product_img"]["name"];
                         $upload_dir = 'uploads/Product_Images/';
                    
                         // Verify file extension
                         $ext = pathinfo($filename, PATHINFO_EXTENSION);
                         if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                    
                         // Verify file size - 5MB maximum
                         $maxsize = 10 * 1024 * 1024;
                         if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                    
                         // Verify MYME type of the file
                         if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it
                         if(file_exists($upload_dir . $filename)){
                              echo $filename . " is already exists.";
                         } else{
                              move_uploaded_file($_FILES["product_img"]["tmp_name"], $upload_dir . $filename);
                              // echo "Your file was uploaded successfully.";
                         } 
                         } else{
                         echo "Error: There was a problem uploading your file. Please try again."; 
                         }
                         $p_picture = $upload_dir . $filename;
                    } else{
                         echo "Error: " . $_FILES["product_img"]["error"];
                    }
               
               
               // $filename = $product_name. '_' .time() . '_' . $_FILES["product_img"]["name"];
               // $file_temp = $_FILES['product_img']['tmp_name'];
               // $upload_dir = 'uploads';
               // move_uploaded_file($file_temp, $upload_dir."/".$filename);
               
                    $insert_query = "INSERT INTO PRODUCTS (product_name, unique_id, brand, category_fk, sub_cat_fk, price, quantity, s_discription, l_discription, picture) VALUES ('$product_name', '$unique_id', '$brand_name', '$cat_selector', '$sub_cat_selector', '$sale_price', '$quantity', '$short_disc', '$long_disc', '$p_picture')";
                    if (mysqli_query($db, $insert_query)) {
                         # code...
                         $successful = "Product Added Successfully <br>";
                         echo '<script> 
                         alert("Product Added Successfully");
                         window.location.href="https://php.test/Admin/_Product_add.php"; </script>';
                         mysqli_close($db);
                    }
               }
          }
          
     }
     // Edit Product

     function edit_product(){
          global $db;
          global $error_exist;
          global $successful;

          if (isset($_POST['edit_product'])) {
               $product_id = $_POST['edit_p_id'];
               $product_name = $_POST['edit_p_name'];
               $brand_name = $_POST['edit_brand_name'];
               $cat_selector = $_POST['edit_cat_selector'];
               $sub_cat_selector = $_POST['edit_scat_selector'];
               $sale_price = $_POST['edit_sale_price'];
               $quantity = $_POST['edit_quantity'];
               $short_disc = $_POST['edit_s_disc'];
               $long_disc = $_POST['edit_l_disc'];

               // File Upload
                    // Check if file was uploaded without errors
                    if($_FILES["edit_p_pic"]["error"] == 0){
                         $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                         $filename = $product_name. "_" .time(). "_" .$_FILES["edit_p_pic"]["name"];
                         $filetype = $_FILES["edit_p_pic"]["type"];
                         $filesize = $_FILES["edit_p_pic"]["size"];
                         $upload_dir = 'uploads/Product_Images/';
                         // Verify file extension
                         $ext = pathinfo($filename, PATHINFO_EXTENSION);
                         if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                    
                         // Verify file size - 5MB maximum
                         $maxsize = 10 * 1024 * 1024;
                         if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                    
                         // Verify MYME type of the file
                         if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it
                         if(file_exists($upload_dir . $filename)){
                              echo $filename . " is already exists.";
                         } else{
                              move_uploaded_file($_FILES["edit_p_pic"]["tmp_name"], $upload_dir . $filename);
                              // echo "Your file was uploaded successfully.";
                         } 
                         } else{
                         echo "Error: There was a problem uploading your file. Please try again."; 
                         }
                         $p_picture = $upload_dir . $filename;
                    } else{
                         echo "Error: " . $_FILES["edit_p_pic"]["error"];
                    }
               

               // $filename = $product_name. '_' .time() . '_' . $_FILES["edit_p_pic"]["name"];
               // $file_temp = $_FILES['edit_p_pic']['tmp_name'];
               // $upload_dir = 'uploads';
               // move_uploaded_file($file_temp, $upload_dir."/".$filename);
               
                    $update_query = "UPDATE products SET 
                    product_name = '$product_name',
                    brand = '$brand_name',
                    category_fk = '$cat_selector',
                    sub_cat_fk = '$sub_cat_selector',
                    price = '$sale_price',
                    quantity = '$quantity',
                    s_discription = '$short_disc',
                    l_discription = '$long_disc',
                    picture = '$p_picture' WHERE id = '$product_id'";
                    if (mysqli_query($db, $update_query)) {
                         # code...
                         $successful = "Product Updated Successfully <br>";
                         echo '<script> 
                         alert("Product Updated Successfully");
                         window.location.href="https://php.test/Admin/_Product_list.php"; </script>';
                         mysqli_close($db);
                    }
               
          }
     }
?>