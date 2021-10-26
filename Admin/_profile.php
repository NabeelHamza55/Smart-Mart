<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     $user_id = $_SESSION['username'];
     $select_user = "SELECT * FROM users WHERE username = '$user_id'";
     $user_result = mysqli_query($db, $select_user);
     $rows = mysqli_num_rows($user_result);
     if ($rows > 0) {
          $user_profile = mysqli_fetch_assoc($user_result);
     }
?>
<div class="continer-fluid p-5">
     <div class="row">
          <div class="col-lg-6">
               <?php echo "<h5>First Name: ". $user_profile['first_name'] ."</h5>"; ?>
          </div>
          <div class="col-lg-6">
               <?php echo "<h5>Last Name: ". $user_profile['last_name'] ."</h5>"; ?>
          </div>
     </div>
     <br>
     <div class="row">
          <div class="col-lg-6">
               <?php echo "<h5>Email: ". $user_profile['email'] ."</h5>"; ?>
          </div>
     </div>
</div>
<?php
     include('Footer.php');
     include('Html_closing.php');
?>