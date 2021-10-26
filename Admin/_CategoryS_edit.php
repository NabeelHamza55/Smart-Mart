<?php 
include('./function/db_connection.php');
include('./function/_add_sub_category.php');
edit_sub_category();

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Edit Sub_Category</h3>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <form action="" method="post">
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="edit_s_cat">Category Name</label>
                         <div class="col-lg-10"><input type="text" name="edit_s_cat" id="edit_s_cat" class="form-control"
                                   placeholder="Enter Category Name" aria-describedby="helpId" required></div>
                    </div>
                    <div class="row">
                    <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="edit_cat_selector">Select Category</label>
                                   </div>
                                   <select class="custom-select" name="edit_cat_selector" id="edit_cat_selector" required>
                                   <option value="">Choose...</option>
                                        <?php 
                                        $sql = "SELECT * FROM CATEGORIES ORDER BY id ASC";
                                        $result = mysqli_query($db, $sql);
                                        $rows = mysqli_num_rows($result);
                                        if($rows > 0){
                                                  while ($category = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $category['category']; ?>">
                                             <?php echo $category['category']; ?></option>
                                        <?php 
                                        }
                                   } ?>
                                   </select>
                              </div>
                         </div>
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
                              <input name="update_s_cat" id="update_s_cat" class="btn btn-primary" type="Submit" value="Update">
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