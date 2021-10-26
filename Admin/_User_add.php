<?php 
include('./function/db_connection.php');
include('./function/_add_user.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');

?>

<div class="container-fluid px-5 py-3">
<div class="row">
     <div class="col-lg-12">
          <h3>Add User</h3>
     </div>
</div>
<div class="row">
     <div class="col">
          <?php  echo $errors['name']; ?>
          <?php  echo $errors['username']; ?>
          <?php  echo $errors['email']; ?>
          <?php  echo $errors['password']; ?>
     </div>
</div>
<div class="row">
     <div class="col-lg-12">
          <form action="" method="post">
               <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="f_name">First Name</label>
                    <div class="col-lg-10"><input type="text" name="f_name" id="f_name" class="form-control"
                              placeholder="Enter First Name" aria-describedby="helpId" required></div>
               </div>
               <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="l_name">Last Name</label>
                    <div class="col-lg-10"><input type="text" name="l_name" id="l_name" class="form-control"
                              placeholder="Enter Last Name" aria-describedby="helpId"></div>
               </div>
               <div class="form-group row">
                    <label class="col-lg-2 col-form-label" for="username">Username</label>
                    <div class="col-lg-10"><input type="text" name="username" id="username" class="form-control"
                              placeholder="Enter username" aria-describedby="helpId"></div>
               </div>
               <hr>
               <div class="row  form-group">
                    <div class="col">
                         <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                   <label class="input-group-text" for="user_type">User Type</label>
                              </div>
                              <select class="custom-select" id="user_type" name="user_type" required>
                                   <option value="">Choose...</option>
                                   <?php 
                                   include('../funiction/db_connection.php');
                                   $sql = "SELECT * FROM user_type";
                                   $result = mysqli_query($db, $sql);
                                   $row = mysqli_num_rows($result);
                                   if($row > 0){
                                        while ($user_type = mysqli_fetch_assoc($result)) {
                                             # code...
                                            ?>
                                                  <option class="" id="disable_option" value="<?php echo $user_type['id']; ?>"><?php echo $user_type['u_type']; ?></option>
                                            <?php
                                        }
                              }
                              ?>
                              </select>
                         </div>
                    </div>
               </div>
               <div class="row form-group">
                    <div class="col">
                         <label for="email">Email</label>
                         <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                    </div>
               </div>
               <div class="row form-group">
                    <div class="col-lg-6">
                         <label for="password">Password</label>
                         <input name="password" id="password" type="password" class="form-control"
                              placeholder="Password">
                    </div>
                    <div class="col-lg-6">
                         <label for="c_pass">Confirm Password</label>
                         <input name="c_pass" id="c_pass" type="password" class="form-control"
                              placeholder="Re-Enter Password">
                    </div>
               </div>
               <hr>
               <div class="row">
                    <div class="col">
                         <input name="submit_user" id="submit_user" class="btn btn-primary" type="Submit"
                              value="Add User">
                    </div>
               </div>
          </form>
     </div>
</div>

<!-- PHP Code -->


<div class="row form-group">
     <div class="col-lg-12">
          <div class="container" id="input_result">

          </div>
     </div>
</div>
</div>
<?php
     include('Footer.php');
     include('Html_closing.php');
?>