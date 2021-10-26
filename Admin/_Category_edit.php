<?php 
include('./function/db_connection.php');
include('./function/_add_category.php');
 edit_category();
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
               <form action="" method="post">
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="edit_cat">Category Name</label>
                         <div class="col-lg-10"><input type="text" name="edit_cat" id="edit_cat" class="form-control"
                                   placeholder="Enter Category Name" aria-describedby="helpId" required></div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <div class="container" id="errors">
                                   <p class=" text-danger"> <?php    echo $error_exist; ?> </p>
                                   <p class=" text-danger"><?php    echo  $successful;  ?> </p>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <input name="update_cat" id="update_cat" class="btn btn-primary" type="Submit"
                                   value="Update">
                         </div>
                    </div>
               </form>
          </div>
     </div>
     <div class="row">
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