<?php include('db_connection.php'); ?>

<!-- Shop Products -->
<div class="container  mt-3">
     <div class="text-center">
          <h1 class="display-4 lead">Electronic Products</h1>
     </div>
     <hr>
     <div
          class="d-flex product-box jumbotron shadow-sm flex-wrap justify-content-center align-items-center align-content-center p-4">
          <?php
            //echo "Connected successfully\n";
            $sql = "SELECT * FROM (SELECT * FROM products WHERE categories = 'electronics' ORDER BY id DESC )Var1 ORDER BY id DESC;";
            $result = mysqli_query($db, $sql);
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                # code...
                while($product = mysqli_fetch_assoc($result)){
                ?>

          <!-- Sale Offer Advertise End-->
          <hr>
          <!-- Featured Products -->


          <div class="product-display d-block m-2 p-3 bg-light border shadow-sm rounded-lg">
               <img class="fp-img" src="../Inc/Products Image/<?php  echo $product['picture'] ?>"
                    alt="<?php  echo $product['name']  ?>">
               <h5 class="m-0 text-left"><a href="#"><b><?php  echo $product['name']  ?></b></a></h5>
               <p><?php  echo $product['s_discription']  ?></p>
               <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span><?php  echo $product['rating']  ?></span>
               </div>
               <p> <b> Price: RS </b> <?php  echo $product['price']  ?></p>
          </div>
          <?php 
                }
            }else{
                echo "Shop is Empty, There no product available yet, check back later.";
            }?>
     </div>
</div>