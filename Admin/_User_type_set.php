<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Edit Product</h3>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <form action="../funiction/_add_user.php" method="post">
                    <hr>
                    <div class="row  form-group">
                         <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="user_type">Select User</label>
                                   </div>
                                   <select class="custom-select" id="select_user" name="select_user" required>
                                        <option selected>Choose...</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Co_worker">Co_worker</option>
                                        <option value="User">User</option>
                                   </select>
                              </div>
                         </div>
                         <div class="col">
                         <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="user_type">User Type</label>
                                   </div>
                                   <select class="custom-select" id="user_type" name="user_type" required>
                                        <option selected>Choose...</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Co_worker">Co_worker</option>
                                        <option value="User">User</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col">
                              <input name="submit" id="submit_user_data" class="btn btn-primary" type="Submit" value="Submit">
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