<?php 
include('./function/db_connection.php');
include('./function/_add_sub_category.php');

add_sub_category();

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-9">
               <h3>Add Sub_Category</h3>
          </div>
          <div class="col-lg-3">
               <a class="btn btn-primary" href="./_CategoryS_add.php">Add More Sub_Category</a>
          </div>
     </div>
     <hr>
     <div class="row">
          <div class="col-lg-12">
               <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="">Sub_Category Name</label>
                         <div class="col-lg-10"><input type="text" name="add_s_cat" id="add_s_cat" class="form-control"
                                   placeholder="Enter Sub_Category Name" aria-describedby="helpId" required></div>
                    </div>
                    
                    <div class="row">
                         <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="cat_selector">Select Parent
                                             Category</label>
                                   </div>
                                   <select class="custom-select" name="select_cat" id="cat_selector" required>
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
                         <div class="col-lg-12">
                              <div class="container" id="errors">
                                   <p class=" text-danger"> <?php    echo $error_exist; ?> </p>
                                   <p class=" text-danger"><?php    echo  $successful;  ?> </p>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <input name="submit_s_cat" id="submit_s_cat" class="btn btn-primary" type="Submit"
                                   value="Submit">
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