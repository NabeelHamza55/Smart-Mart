<?php
     include('db_connection.php');
    
     $error = array('email' => '', 'password' => '');
     
    
     if (isset($_POST['login'])) {
          // Validation
     $username = '';
     $email = $_POST['email']; 
     $password = $_POST['password'];
     
     // Fetch User Data
     $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
     $result = mysqli_query($db, $sql);
     $login_data = mysqli_fetch_assoc($result);
          # code. for email
          if (empty($email)) {
               # code...
               $error['email'] = 'Please Enter Your Email';
          }else{
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    # code...
                    $error['email'] = 'Please Enter A Valid Email';
               }
               else{
                    if ($email != $login_data['email']) {
                         $error['email'] = "User Didn't Signup or exist";
                    }
               }               
          }
           # code. for Password
           if (empty($password)) {
               # code...
               $error['password'] = 'Please Enter Your password';
          }else{
               
               if ($password != $login_data['password']) {
                    $error['password'] = "The Password you Enterd Is Incorrect";
               }            
          }
          if (!array_filter($error)) {
               # code...
               if ($email === $login_data['email'] && $password === $login_data['password']) {
                    # code...
                   # print_r($login_data);
                   $_SESSION['login'] = $login_data['email'];
                   $_SESSION['email'] = $login_data['email'];
                   $_SESSION['f_name'] = $login_data['first_name'];
                   $_SESSION['username'] = $login_data['username'];
                   $_SESSION['user_type'] = $login_data['u_type_fk'];
                    header('location: ./#');
                    mysqli_close($db);
               }
          }
          
     }
?>