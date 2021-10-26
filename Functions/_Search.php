<?php include('./Functions/db_connection.php');
$string = $_POST['string'];
?>

<!-- Shop Products -->
<div class="container  mt-3">
     <div class="text-center">
          <?php 
            echo '<h1 class="display-4 lead">Shop ', $string, ' Products</h1>';
       ?>
     </div>
     <hr>
     <div
          class="d-flex product-box jumbotron shadow-sm flex-wrap justify-content-center align-items-center align-content-center p-4">
          <?php
            //echo "Connected successfully\n";
               
               $sql = "SELECT * FROM (SELECT * FROM products WHERE product_name like '%$string%' OR brand like '%$string%' OR category_fk like '%$string%' OR sub_cat_fk like '%$string%' ORDER BY id DESC )Var1 ORDER BY id DESC;";
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
               <img class="fp-img" src="./Admin/<?php  echo $product['picture'] ?>"
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
                
                echo "<h5>Result Not Found</h5>";
            }?>
     </div>
</div>