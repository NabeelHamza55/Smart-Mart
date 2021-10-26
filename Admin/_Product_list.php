<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Product List</h3>
          </div>
     </div>
     <?php 
     $fetch_products = "SELECT * FROM PRODUCTS";
     $products_result = mysqli_query($db, $fetch_products);
     $product_rows = mysqli_num_rows($products_result);
     if ($product_rows > 0) {
?>
     <div class="row">
          <div class="col-lg-12  ">
               <div class="co-lg-12">
                    <div class="table-responsive round_border shadow-sm">
                         <table class="table table-hover align-middle">
                              <thead>
                                   <tr class="table-active">
                                        <th class="align-middle" scope="col">#</th>
                                        <th class="align-middle" scope="col">Delete</th>
                                        <th class="align-middle" scope="col">Edit</th>
                                        <th class="align-middle" scope="col">Product Name</th>
                                        <th class="align-middle" scope="col">Category</th>
                                        <th class="align-middle" scope="col">Sub_Category</th>
                                        <th class="align-middle" scope="col">Brand</th>
                                        <th class="align-middle" scope="col">Quantity</th>
                                        <th class="align-middle" scope="col">Price</th>
                                        <th class="align-middle" scope="col">Discription</th>
                                        <th class="align-middle" scope="col">Creation Time</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php 
                                   $sr_no = '1';
                                   while ($product = mysqli_fetch_assoc($products_result)) { ?>
                                   <tr>
                                        <th class="align-middle" scope="row"><?php echo $sr_no ?></th>
                                        <td class="align-middle"><button class="btn btn-primary"
                                                  onclick="window.location.href='function/_del_products.php?id=<?php echo $product['id']; ?>'"><i
                                                       class="fa fa-trash" aria-hidden="true"></i></button></td>
                                        <td class="align-middle"><button class="btn btn-primary"
                                                  onclick="window.location.href='./_Product_edit.php?id=<?php echo $product['id']; ?>'"><i
                                                       class="fas fa-edit    "></i></button></td>
                                        <td class="align-middle" class="t_data"><?php echo $product['unique_id'] ?></td>
                                        <td class="align-middle"><?php echo $product['category_fk'] ?></td>
                                        <td class="align-middle"><?php echo $product['sub_cat_fk'] ?></td>
                                        <td class="align-middle"><?php echo $product['brand'] ?></td>
                                        <td class="align-middle"><?php echo $product['quantity'] ?></td>
                                        <td class="align-middle"><?php echo $product['price'] ?></td>
                                        <td class="align-middle"><?php echo $product['s_discription'] ?></td>
                                        <td class="align-middle"><?php echo $product['creation_time'] ?></td>
                                   </tr>
                                   <?php $sr_no++; }
                         }else{
                              echo "Product Not Found";
                         } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php
     include('Footer.php');
     include('Html_closing.php');
?>