<?php
     include('db_connection.php');

     // Validation
     $username = '';
     $email = '';
     $password = '';
     $confirm_pass = '';
     $errors = array('username'=>'', 'email'=>'', 'password'=>'');

     if (isset($_POST['signup'])) {
          # code for check name
          if(empty($_POST['name'])){
               $errors['username'] = "Please Enter Your Full Name First";
          }else {
               # code...
               $username = $_POST['name'];
          }

          # code for check email
          if(empty($_POST['email'])){
               $errors['email'] = "Please Enter A Valid Email";
          }else {
               # code...
               $email = $_POST['email'];
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    # code...
                    $errors['email'] = "Email is invalid";
               }else {
                    # code...
                    $check_user_query = "SELECT * FROM `users` WHERE email = '$email'";
                    $result = mysqli_query($db, $check_user_query);
                    $user = mysqli_fetch_assoc($result);
                    if ($user) {
                          # code...
                         if ($user['email'] === $email) {
                              # code...
                              $errors['email'] = "User Already Exist";
                         }
                    }     
               }
          }

          

          # code for check password
          if(empty($_POST['password'])){
               $errors['password'] = "Please Enter A Valid Password";
          }else {
               # code...
               $password = $_POST['password'];
          }

          # code for check confirm_Password
          if(empty($_POST['confirm_pass'])){
               $errors['password'] = "Please Enter A Password";
          }else {
               # code...
               $confirm_pass = $_POST['confirm_pass'];
               if($password != $confirm_pass){
                    # code...
                    $errors['password'] = "Password didn't match";
               }
          }
          if (!array_filter($errors)) {
               # code
               $insert_data = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
               if(mysqli_query($db, $insert_data)){
               header('location: ./Login.php');
               }
          }
     }
     
     


?>

?>