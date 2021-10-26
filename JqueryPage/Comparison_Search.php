<?php 
     include('../Functions/db_connection.php');
     $search_val = $_POST['search'];
     if (empty($search_val)) {
          # code...
          ?>
     <div class="container">
          <p class="text-danger">Please Enter Product Name</p>
     </div>
     <?php
     }else{
     $getdata = "SELECT * FROM products WHERE unique_id LIKE '%{$search_val}%'";
     $result = mysqli_query($db, $getdata);
     $row = mysqli_num_rows($result);
     if ($row>0) {
          # code...
          $product1 = mysqli_fetch_assoc($result);
          ?>

<div class="container-fluid">
     <h4><?php echo $product1['unique_id'] ?></h4>
     <hr>
     <div class="row">
          <div class="col-lg-6 col-md-12">
               <div class="container-fluid">
                    <img style="width: 200px;" src="../Admin/<?php echo $product1['picture'] ?>"
                         alt="<?php echo $product1['product_name'] ?>" >
               </div>
          </div>
          <div class="col-lg-6 col-md-12">
               <div class="container-fluid">
                    <h5>Price: Rs <?php echo $product1['price'] ?></h5>
                    <h5>Company: <?php echo $product1['brand'] ?></h5>
                    <div class="stars">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <span><?php  // echo $product1['rating'];  ?></span>
                    </div>
                    <p><?php  echo $product1['s_discription'];  ?></p>
               </div>
          </div>
     </div>
     <div class="container-fluid">
          <hr>
          <?php  echo $product1['l_discription'];  ?>
     </div>
</div>

<?php
     } 
}
     
?>