<?php

 
 $error_exist = "";
 $successful = "";
     function add_sub_category(){
          global $db;
          global $error_exist;
          global  $successful;
          if (isset($_POST['submit_s_cat'])) {
               $sub_category = $_POST['add_s_cat'];
               $cat_selector = $_POST['select_cat'];
               $check_query = "SELECT * FROM SUB_CATEGORIES WHERE sub_category = '$sub_category'";
               $check_result = mysqli_query($db, $check_query);
               $check_rows = mysqli_num_rows($check_result);
               if ($check_rows > 0) {
                   $error_exist = "Sub_Category Already Exist <br>";
               }else{
                    $insert_query = "INSERT INTO SUB_CATEGORIES (sub_category, parent_category) VALUES ('$sub_category', '$cat_selector')";
                    if (mysqli_query($db, $insert_query)) {
                         # code...
                         $successful = "Sub_Category Added Successfully <br>";
                         echo '<script> 
                         alert("Sub_Category Added Successfully");
                         window.location.href="https://php.test/Admin/_CategoryS_list.php"; </script>';
                         mysqli_close($db);
                    }
               }
          }
     }

     // edit Sub_Category

     function edit_sub_category(){
          global $db;
          global $error_exist;
          global  $successful;
          global $sub_cat_id;
          $sub_cat_id = $_GET['id'];

          if (isset($_POST['update_s_cat'])) {
               $sub_category = $_POST['edit_s_cat'];
               $cat_selector = $_POST['edit_cat_selector'];
               $check_query = "SELECT * FROM SUB_CATEGORIES WHERE sub_category = '$sub_category'";
               $check_result = mysqli_query($db, $check_query);
               $check_rows = mysqli_num_rows($check_result);
               if ($check_rows > 0) {
                   $error_exist = "Sub_Category Already Exist <br>";
               }else{
                    $update_query = "UPDATE sub_categories SET sub_category = '$sub_category', parent_category ='$cat_selector' WHERE id = '$sub_cat_id'";
                    if (mysqli_query($db, $update_query)) {
                         # code...
                         $successful = "Sub_Category Updated Successfully <br>";
                         echo '<script> 
                         alert("Sub_Category Updated Successfully");
                         window.location.href="https://php.test/Admin/_CategoryS_list.php"; </script>';
                         mysqli_close($db);
                    }
               }
          }
     }
?>