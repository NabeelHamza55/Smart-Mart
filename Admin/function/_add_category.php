<?php

 $error_exist = '';
 $successful = "";
     function add_category(){
         global $error_exist;
         global $successful;
         global $db;
          if (isset($_POST['submit_cat'])) {
               $category = $_POST['add_cat'];
               $check_query = "SELECT * FROM CATEGORIES WHERE category = '$category'";
               $check_result = mysqli_query($db, $check_query);
               $check_rows = mysqli_num_rows($check_result);
               if ($check_rows > 0) {
                   $error_exist = "Category Already Exist <br>";
               }else{
                    $insert_query = "INSERT INTO categories (category) VALUES ('$category')";
                    if (mysqli_query($db, $insert_query)) {
                         # code...
                       $successful = "Category Added Successfully <br>";
                       echo '<script>
                       alert("Category Added Successfully");
                       window.location.href="/Admin/_Category_list.php"; </script>';
                       mysqli_close($db);
                    }
               }
          }
     }
// Edit Category


     function edit_category(){
          global $db;
          global $error_exist;
          global $successful;
          $cat_id = $_GET['id'];
          if (isset($_POST['update_cat'])) {
               $category = $_POST['edit_cat'];
               $check_query = "SELECT * FROM categories WHERE category = '$category'";
               $check_result = mysqli_query($db, $check_query);
               $check_rows = mysqli_num_rows($check_result);
               if ($check_rows > 0) {
                   $error_exist = "Category Already Exist <br>";
               }else{
                    $insert_query = "UPDATE categories SET category = '$category' WHERE id = '$cat_id'";
                    if (mysqli_query($db, $insert_query)) {
                         # code...
                         $successful = "Category Updated Successfully <br>";
                       echo '<script>
                         alert("Category Updated Successfully");
                         window.location.href="/Admin/_Category_list.php"; </script>';
                         mysqli_close($db);
                    }
               }
          }

     }
?>
