<?php 
include('./function/db_connection.php');
include('./function/_add_category.php');
add_category();
     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid py-5 px-3">
     <div class="row">
          <div class="col-lg-12">
               <h3>Add Category</h3>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <form action"" method="post">
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="">Category Name</label>
                         <div class="col-lg-10"><input type="text" name="add_cat" id="add_cat" class="form-control"
                                   placeholder="Enter Category Name" aria-describedby="helpId" required></div>
                    </div>
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="container" id="errors">
                                   <p class=" text-danger"> <?php    echo $error_exist; ?> </p>
                                   <p class=" text-danger"><?php    echo  $successful;  ?> </p>
                              </div>
                         </div>
                    </div>
                    <div class="form-goup row">
                         <div class="col">
                              <input name="submit_cat" id="submit_cat" class="btn btn-primary" type="Submit"
                                   value="Submit">
                         </div>
                    </div>
               </form>
          </div>
     </div>
     <hr>
    
</div>
<?php
     include('Footer.php');
     include('Html_closing.php');
?>