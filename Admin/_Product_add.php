<?php 
include('./function/db_connection.php');
include('./function/_add_product.php');


     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row align-content-center align-items-center">
          <div class="col-lg-10">
               <h3>Add Product</h3>
          </div>
          <div class="col-lg-2">
               <a class="btn btn-primary d-block align-self-end" href="./_Product_add.php">Add More Product</a>
          </div>
     </div>
     <hr>
     <?php add_product(); ?>
     <div class="row">
          <div class="col-lg-12">
               <div class="container" id="errors">
                    <p class=" text-danger"><?php  echo $error_exist; ?> </p>
                    <p class=" text-danger"><?php  echo  $successful;  ?> </p>
                     </div>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="#product_name" required>Product Name</label>
                         <div class="col-lg-10"><input type="text" name="product_name" id="product_name" class="form-control"
                                   placeholder="Enter Product Name" aria-describedby="helpId" required></div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <div class="form-group row">
                         <label class="col-lg-3 col-form-label" for="#unique_id" required>Unique ID</label>
                         <div class="col-lg-9"><input type="text" name="unique_id" id="unique_id" class="form-control"
                                   placeholder="Enter Brand Name" aria-describedby="helpId"></div>
                         </div> 
                    </div>
                    <div class="col">
                    <div class="form-group row">
                         <label class="col-lg-3 col-form-label" for="#brand_name">Brand Name</label>
                         <div class="col-lg-9"><input type="text" name="brand_name" id="brand_name" class="form-control"
                                   placeholder="Enter Brand Name" aria-describedby="helpId"></div>
                         </div> 
                    </div>
                    </div>
                    <hr>
                    <div class="form-group">
                         <label for="product_img">Choose Product Image</label>
                         <input type="file" name="product_img" class="form-control-file" id="product_img" >
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="#cat_selector">Select Category</label>
                                   </div>
                                   <select class="custom-select" name="cat_selector" id="cat_selector" required>
                                        <option value="">Choose...</option>
                                        <?php 
                                        $sql_cat = "SELECT * FROM CATEGORIES ORDER BY id ASC";
                                        $result_cat = mysqli_query($db, $sql_cat);
                                        $rows_cat = mysqli_num_rows($result_cat);
                                        if($rows_cat > 0){
                                                  while ($category = mysqli_fetch_assoc($result_cat)) { ?>
                                        <option value="<?php echo $category['category']; ?>">
                                             <?php echo $category['category']; ?></option>
                                        <?php 
                                        }
                                   } ?>
                                   </select>
                              </div>
                         </div>
                         <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="#sub_cat_selector">Select
                                             Sub_Category</label>
                                   </div>
                                   <select class="custom-select" name="sub_cat_selector" id="sub_cat_selector" required>
                                        <option value="">Choose...</option>
                                        <?php 
                                        $sql_scat = "SELECT * FROM SUB_CATEGORIES ORDER BY id ASC";
                                        $result_scat = mysqli_query($db, $sql_scat);
                                        $rows_scat = mysqli_num_rows($result_scat);
                                        if($rows_scat > 0){
                                                  while ($sub_category = mysqli_fetch_assoc($result_scat)) { ?>
                                        <option value="<?php echo $sub_category['sub_category']; ?>">
                                             <?php echo $sub_category['sub_category']; ?></option>
                                        <?php 
                                        }
                                   } ?>
                                   </select>
                              </div>
                         </div>
                    </div>

                    <div class="row">
                         <div class="form-group col">
                              <label for="sale_price">Sale Price</label>
                              <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Enter The Sale Price">
                         </div>
                         <div class="form-group col">
                              <label for="quantity">Quantity</label>
                              <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter The Quantity">
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                         <div class="form-group">
                           <label for="short_disc">Short Discription</label>
                           <textarea type="text" name="short_disc" id="short_disc" class="form-control" placeholder="Enter the Breif Discription" aria-describedby="helpId" required></textarea>
                         </div>
                         </div>
                    </div>
                    <div class="row">
                    <div class="col">
                         <div class="form-group">
                           <label for="long_disc">Long Discription</label>
                           <textarea type="text" name="long_disc" id="long_disc" class="form-control" placeholder="Enter the Complete Specification Discription" aria-describedby="helpId"></textarea>
                         </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <input name="submit_product" id="submit_product" class="btn btn-primary" type="Submit" value="Submit">
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