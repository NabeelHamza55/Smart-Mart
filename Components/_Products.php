<?php include('./Functions/db_connection.php');

    $cat = $_GET["category"];


?>

<!-- Shop Products -->
<div class="container mt-3">
     <div class="text-center">
          <?php if (isset($cat)) {
            echo '<h1 class="display-4 lead">Shop ', $cat, ' Products</h1>';
        }else {?>
          <h1 class="display-4 lead">Shop All Products</h1> <?php } ?>
     </div>
     <hr>
     <div class="d-flex product-box jumbotron shadow-sm flex-wrap justify-content-center align-items-center align-content-center p-4">
          <?php
            //echo "Connected successfully\n";
          if (isset($cat)) {
               $sql = "SELECT * FROM (SELECT * FROM products WHERE category_fk = '$cat' ORDER BY id DESC )Var1 ORDER BY id DESC;";
            }else{
            $sql = "SELECT * FROM (SELECT * FROM products ORDER BY id DESC )Var1 ORDER BY id DESC;";}
            $result = mysqli_query($db, $sql);
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                # code...
                while($product = mysqli_fetch_assoc($result)){
                ?>

          <!-- Sale Offer Advertise End-->
          <hr>
          <!-- Featured Products -->
          <div class="product-display d-block m-1 p-4 bg-light border shadow-sm rounded-lg">
               <img class="fp-img" src="../Admin/<?php echo $product['picture'] ?>"
                    alt="<?php  echo $product['product_name'];  ?>">
               <h5 class="m-0 text-left"><a
                         href="Singal_Page_Product.php?id=<?php  echo $product['id']  ?>"><b><?php  echo $product['product_name']  ?></b></a>
               </h5>
               <p><?php  echo $product['s_discription']; ?></p>
               <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span><?php  echo $product['rating'];  ?></span>
               </div>
               <p> <b> Price: RS </b> <?php  echo $product['price'];  ?></p>
          </div>
          <?php 
                }
            }else{
                echo "Shop is Empty, There no product available yet, check back later.";
            }?>
     </div>
</div>