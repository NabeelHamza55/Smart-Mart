<?php 
include('./function/db_connection.php');
include('./function/_add_product.php');
$p_id = $_GET['id'];

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row justify-content-between">
          <div class="col-lg-10">
               <h3>Edit Product</h3>
          </div>
          <div class="col-lg-2">
               <a class="btn btn-primary d-block align-self-end" href="./_Product_list.php">Product List</a>
          </div>
     </div>
     <hr>
     <?php
     
     $value_query = "SELECT * FROM products WHERE id = '$p_id'";
     $val_result = mysqli_query($db, $value_query);
     $val_rows = mysqli_num_rows($val_result);
     if ($val_rows > 0) {
          $val = mysqli_fetch_assoc($val_result);
     }
     edit_product();
     ?>
     <div class="row">
          <div class="col-lg-12">
               <div class="container" id="errors">
                    <p class=" text-danger"> <?php    echo $error_exist; ?> </p>
                    <p class=" text-danger"><?php    echo  $successful;  ?> </p>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <form action="" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                         <input type="hidden" value="<?php echo $val['id']; ?> " name="edit_p_id" id="edit_p_id"
                              class="form-control" placeholder="Product id" aria-describedby="helpId">
                    </div>
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label" for="edit_p_name">Product Name</label>
                         <div class="col-lg-10"><input type="text" name="edit_p_name" id="edit_p_name"
                                   value="<?php echo $val['product_name']; ?>" class="form-control"
                                   placeholder="Enter Product Name" aria-describedby="helpId" required></div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label" for="#edit_unique_id" required>Unique
                                        ID</label>
                                   <div class="col-lg-9 disable"><input type="text" name="edit_unique_id" id="edit_unique_id"
                                             value="<?php echo $val['unique_id']; ?>" class="form-control"
                                             placeholder="Enter Brand Name" aria-describedby="helpId" disabled></div>
                              </div>
                         </div>
                         <div class="col">
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label" for="#edit_brand_name">Brand Name</label>
                                   <div class="col-lg-9"><input type="text" name="edit_brand_name" id="edit_brand_name"
                                             value="<?php echo $val['brand']; ?>" class="form-control"
                                             placeholder="Enter Brand Name" aria-describedby="helpId"></div>
                              </div>
                         </div>
                    </div>
                    <hr>
                    <div class="form-group">
                         <label for="edit_p_pic">Choose Product Image</label>
                         <input type="file" name="edit_p_pic" value="<?php echo $val['picture']; ?>"
                              class="form-control-file" id="edit_p_pic">
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col">
                              <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                        <label class="input-group-text" for="edit_cat_selector">Select Category</label>
                                   </div>
                                   <select class="custom-select" name="edit_cat_selector" id="edit_cat_selector"
                                        required>

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
                                        <label class="input-group-text" for="edit_scat_selector">Select
                                             Sub_Category</label>
                                   </div>
                                   <select class="custom-select" name="edit_scat_selector" id="edit_scat_selector"
                                        required>
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
                              <label for="edit_sale_price">Sale Price</label>
                              <input type="text" name="edit_sale_price" id="edit_sale_price"
                                   value="<?php echo $val['price']; ?>" class="form-control"
                                   placeholder="Enter The Sale Price">
                         </div>
                         <div class="form-group col">
                              <label for="edit_quantity">Quantity</label>
                              <input type="text" name="edit_quantity" id="edit_quantity"
                                   value="<?php echo $val['quantity']; ?>" class="form-control"
                                   placeholder="Enter The Quantity">
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <div class="form-group">
                                   <label for="edit_s_disc">Short Discription</label>
                                   <textarea type="text" name="edit_s_disc" id="edit_s_disc" class="form-control"
                                        placeholder="Enter the Breif Discription" aria-describedby="helpId"
                                        required><?php echo $val['s_discription']; ?></textarea>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <div class="form-group">
                                   <label for="edit_l_disc">Long Discription</label>
                                   <textarea type="text" name="edit_l_disc" id="edit_l_disc" class="form-control"
                                        placeholder="Enter the Complete Specification Discription"
                                        aria-describedby="helpId"><?php echo $val['l_discription']; ?></textarea>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <input name="edit_product" id="edit_product" class="btn btn-primary" type="Submit"
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