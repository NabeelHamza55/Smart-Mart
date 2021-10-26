<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
     $id = $_GET['id'];
     $values = "SELECT * FROM USERS WHERE user_id = '$id'";
     $val_r = mysqli_query($db, $values);
     $val_row = mysqli_num_rows($val_r);
     if ($val_row > 0) {
          $value = mysqli_fetch_assoc($val_r);
     }
?>

<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Edit Product</h3>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <form action="../function/_edit_user.php" method="post">
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="">First Name</label>
                         <div class="col-lg-10"><input type="text" name="f_name" id="user_f_name" class="form-control"
                                   placeholder="Enter First Name" value="<?php echo $value['first_name']; ?>"
                                   aria-describedby="helpId" required></div>
                    </div>
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="">Last Name</label>
                         <div class="col-lg-10"><input type="text" name="l_name" id="user_l_name" class="form-control"
                                   value="<?php echo $value['last_name']; ?>" placeholder="Enter Last Name"
                                   aria-describedby="helpId"></div>
                    </div>
                    <hr>
                    <div class="row form-group">
                         <div class="col-lg-6">
                              <label for="username">Username</label>
                              <input type="text" name="username" value="<?php echo $value['username']; ?>" class="form-control" placeholder="" disabled>
                         </div>
                         <div class="col-lg-6">
                              <label for="">Email</label>
                              <input type="email" name="email" value="<?php echo $value['email']; ?>" class="form-control" placeholder="Enter Your Email">
                         </div>
                    </div>
                    <div class="row form-group">
                         <div class="col-lg-6">
                              <label for="">Password</label>
                              <input name="password" id="user_pass" type="password" class="form-control"
                                   placeholder="Password">
                         </div>
                         <div class="col-lg-6">
                              <label for="">Confirm Password</label>
                              <input name="c_pass" id="conf_pass" type="password" class="form-control"
                                   placeholder="Re-Enter Password">
                         </div>
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col">
                              <input name="submit" id="submit_user_data" class="btn btn-primary" type="Submit"
                                   value="Submit">
                         </div>
                    </div>
               </form>

                    <!-- <div class="form-group">
                         <label for="exampleFormControlFile1">Choose Product Image</label>
                         <input type="file" name="u_pic" id="user_pic" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                         <label for="">Phone No.</label>
                         <input type="tel" name="phone_no" id="user_phone_no" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    
                    <div class="row form-group">
                         <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="user_gender">Gender Type</label>
                                   </div>
                                   <select class="custom-select" id="user_gender" name="gender" required>
                                        <option selected>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                   </select>
                              </div>
                         </div>
                         <div class="col">
                              <div class="form-group">
                                   <div class="input-group">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                             <span class="input-group-text">Date of Birth</i></span>
                                        </div>
                                        <input type="date" name="birthday" id="user_birthday" class="form-control" data-inputmask-alias="datetime"
                                             data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                   </div>
                                   
                              </div>
                         </div>
                    </div>
                    <div class="row  form-group">
                         <div class="col">
                                   <label for="">Country</label>
                                   <input name="country" id="user_country" type="text" class="form-control" placeholder="Country Name">
                         </div>
                         <div class="col">
                                   <label for="">City</label>
                                   <input name="city" id="user_city" type="text" class="form-control" placeholder="City Name">
                         </div>
                    </div>
                    <div class="row  form-group">
                         <div class="col">
                              <label for="">Address</label>
                              <textarea type="text" name="address" id="user_address" class="form-control"
                                   placeholder="Enter the Complete Address" aria-describedby="helpId"></textarea>
                         </div>
                    </div> -->

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