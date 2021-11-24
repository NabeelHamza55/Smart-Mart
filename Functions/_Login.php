<?php
     include('db_connection.php');

     $error = array('email' => '', 'password' => '');


if (isset($_POST['login'])) {
     // Validation
     $username = '';
     $email = $_POST['email'];
     $password = $_POST['password'];

         if (empty($email)) {
          $error['email'] = 'Please Enter Your Email';
          } else {
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              # code...
              $error['email'] = 'Please Enter A Valid Email';
          }
          if (empty($password)) {
               # code...
               $error['password'] = 'Please Enter Your password';
          }else{
               if (strlen($password) < 8) {
                    $error['password'] = 'The Password Must Contain At Least 8 Characters';
               }
          }


         // Fetch User Data
         $sql = "SELECT * FROM users WHERE email = '$email'";
         $result = mysqli_query($db, $sql);
         $row = mysqli_num_rows($result);
         if ($row < 1) {
             $error['email'] = "User Didn't Signup or exist";
         } else {
             $login_data = mysqli_fetch_assoc($result);
             # code. for email
             if (strlen($password) < 8) {
               $error['password'] = 'The Password Must Contain At Least 8 Characters';
               }else{
                   if ($password != $login_data['password']) {
                       $error['password'] = "The Password you Enterd Is Incorrect";
                   }
               }
          }
             # code. for Password

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
                    header('location: /');
                    mysqli_close($db);
               }
          }
     }
}
?>
