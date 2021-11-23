<?php

     // Validation
     $f_name = '';
     $l_name = '';
     $username = '';
     $email = '';
     $user_type = '';
     $password = '';
     $conf_pass = '';
     $errors = array('name'=>'', 'username'=>'', 'email'=>'', 'password'=>'');

     if (isset($_POST['submit_user'])) {
          # code for check name
          $f_name = $_POST['f_name'];
          $l_name = $_POST['l_name'];
          if (!preg_match("/^[a-zA-Z-' ]*$/",$f_name)  && !preg_match("/^[a-zA-Z-' ]*$/",$l_name ) ){
               $errors['name'] = "Only letters and white space allowed";
          }else {
               # code...
               $username = $_POST['username'];
               $user_type = $_POST['user_type'];
          }

          # code for check email
          if(empty($_POST['email'])){
               $errors['email'] = "Please Enter A Valid Email";
          }else {
               # code...
               $email = $_POST['email'];
               $username = $_POST['username'];
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    # code...
                    $errors['email'] = "Email is invalid";
               }else {
                    # code...
                    $check_user_query = "SELECT * FROM USERS WHERE username = '$username' AND email = '$email'";
                    $result = mysqli_query($db, $check_user_query);
                    $rows = mysqli_num_rows($result);
                    if($rows > 0){
                    $user = mysqli_fetch_assoc($result);
                          # code...
                    if ($user['email'] === $email || $user['username'] === $username) {
                         $errors['username'] = "User Already Exist";
                    }elseif ($user['u_type_fk'] == 1) {
                          # code...
                         echo '<script> $(document).ready(function () {
                               $("#disable_option").addClass("disabled");
                         });
                           </script>';
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
          if(empty($_POST['c_pass'])){
               $errors['password'] = "Please Re-Enter Password";
          }else {
               # code...
               $confirm_pass = $_POST['c_pass'];
          }
          if($password != $confirm_pass){
               # code...
               $errors['password'] = "Password didn't match";
          }
          if (!array_filter($errors)) {
               # code
               $insert_data = "INSERT INTO users (first_name, last_name, username, email, password, u_type_fk) VALUES ('$f_name', '$l_name', '$username', '$email', '$password', '$user_type')";
               if(mysqli_query($db, $insert_data)){
                    echo "<script>
                    window.location.href='/admin/_User_list.php'
                    </script>";
               }
          }
     }


?>
