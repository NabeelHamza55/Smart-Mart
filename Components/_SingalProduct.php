<?php include('./Functions/_Singale_Product.php');
// include('./Functions/_insert_into_cart.php');
$i = "1"; // Select Quantity
$quantity = $s_product['quantity']; ?>

<br>
<!-- product Container -->
<div class="container bg-light">
     <!-- product Detail -->
     <div class="row align-content-center align-items-center">
          <div class="col-lg-6 p-img-box border-right border-dark">
               <img src="./Admin/<?php echo $s_product['picture']; ?>" alt="<?php echo $s_product['name']; ?>">
          </div>
          <div class="col-lg-6 pl-4">
               <h1><?php echo $s_product['unique_id']; ?></h1>
               <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span><?php  echo $s_product['rating_fk'];  ?></span>
               </div>
               <h3>Rs <?php echo $s_product['price']; ?></h3>
               <br>
               <p><b>Availability: </b><?php echo $s_product['quantity']; ?> in Stock</p>
               <br>
               <?php if ($quantity < 1) { 
               # code...
               echo "<p>Sorry! The Product Is Not Available Right Now Please Come Back Later </p>";
          } else{ ?>


               <div class="row">
                    <div class="col-lg-5 col-sm-12 p-2 ">
                    <form action="./Functions/_insert_into_cart.php" method="post">
                    <div style="width: 100px;" class="input-group">
                         <input type="number" value="1" min="1" max="<?php echo $s_product['quantity']; ?>" name="cart_quantity"
                              class="form-control">
                         <input type="hidden" value="<?php echo $s_product['unique_id']; ?>" name="cart_product"
                              class="form-control">

                         <input type="hidden" value="<?php echo $s_product['price']; ?>" name="cart_price"
                              class="form-control">
                         <input type="hidden" value="<?php echo $s_product['id']; ?>" name="cart_id"
                              class="form-control">

                         <div style="width: 10px;" class="input-group-append">
                              <input type="submit" class="btn btn-primary" name="insert_into_cart" value="Add to Cart">
                         </div>
                    </div>
               </form>
                    </div>

               <?php } ?>
               <div class="col-lg-7 col-sm-12 p-2">
               <button onclick="window.location.href='./Comparison.php?name=<?php echo $s_product['unique_id']; ?>'"
                    class="btn btn-secondary compare-btn"> Compare Product</button>
               </div>
               </div>
               <br><br>
               <caption><?php echo $s_product['s_discription']; ?></caption><br>
               <hr>
          </div>
     </div>
     <!-- product Detail part 2-->
     <div class="container">
          <hr>
          <div class="row">
               <div class="col-lg-3 border-right border-dark">
                    <!-- Market Price Comparison -->
                    <div class="container">
                         <h4 class=""> Different Market Prices: </h4>
                    </div>

               </div>
               <div class="col-lg-9">
                    <!-- Discroption Container -->
                    <div class="container">
                         <h4>Discription:</h4>
                         <div class="container">
                              <?php echo $s_product['l_discription']; ?>
                         </div>
                    </div>
               </div>
          </div>
          <hr>
     </div>
     <br>
     <!-- Product Container End -->

     <!-- Reivews Conatiner -->
     <div class="container">
          <h4 class=""> Reviews and Rating: </h4><br>
          <?php 
          $c_product_id = $s_product['unique_id'];
          $select_data = "SELECT * FROM comments WHERE product_name = '$c_product_id' limit 5";
          $comment_result = mysqli_query($db, $select_data);
          $row = mysqli_num_rows($comment_result);     
          if ($row > 0) {
               while ($p_comment = mysqli_fetch_assoc($comment_result)) {
                    # code...
               ?>
          <div class="container" id="r_c">
               <div class="row w-100">
                    <div class="col-1"><img class="dp_pics" src="./Inc/Team Image/profile_2.svg" alt="User"></div>
                    <div class="col-11">
                         <div>
                              <h6><?php echo $p_comment['username']; ?> <span style="font-size: 12px;"> -
                                        <?php echo $p_comment['creation_time']; ?> </span>
                         </div>
                         </h6>

                         <div class="stars mt-1">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <span><?php  echo $p_comment['rating'];  ?></span>
                         </div>
                         <div class="comments_text">
                              <p><?php  echo $p_comment['comment'] ?></p>
                         </div>
                    </div>
               </div>
               <hr>
          </div>
          <?php 
               }
          }else {
               echo "No review Available <br> <br>";
          }
          ?>
          <!-- Reivews Conatiner End-->

          <!-- Review Form -->

          <div class="container review_form p-3">
               <h3>Add a Review:</h3>
               <form action="" method="POST" class="">
                    <?php if (!(isset($_SESSION['login']))) {
               # code...
               ?>
                    <div class="container">
                         <p>Your Rating*</p>
                         <div class="f_stars p-2">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <span><select class="rating_select   " name="rating" id="rating">
                                        <option value="5">5</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                   </select></span>
                         </div>
                    </div>
                    <br>
                    <div class="container d-sm-block d-md-flex align-content-center align-items-center">
                         <div class="form-group w-100 mr-md-2">
                              <input type="text" name="name" id="name" autocomplete="off" required>
                              <label for="name" class="lable-name"> <span class="content-name">Name</span> </label>
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['username']; ?>
                         </div>

                         <div class="form-group w-100 ml-md-2">
                              <input type="email" name="email" id="email" autocomplete="off" required>
                              <label for="email" class="lable-name"> <span class="content-name">Email</span> </label>
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['email']; ?>
                         </div>

                    </div>

                    <div class="container">
                         <label for="msg"> Your review* </label><br>
                         <textarea class="w-100 p-1" id="comment" type="text" name="comment" autocomplete="off"
                              required></textarea>

                         <div class="form-group h-100">
                              <div><button type="submit" id="s_comment" name="submit" class="wbutton">Submit</button>
                              </div>
                         </div>
                    </div>

                    <?php } else {
               ?>

                    <div class="container">
                         <p>Your Rating*</p>
                         <div class="f_stars">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <span><select class="rating_select" name="rating" id="" required>
                                        <option value="5">5</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                   </select></span>
                         </div>
                    </div>
                    <br>

                    <div class="container">
                         <label for="msg"> Your review* </label><br>
                         <textarea class="w-100 p-1" type="text" name="comment" autocomplete="off" required></textarea>

                         <div class="form-group h-100">
                              <div><button type="submit" id="comment" name="submit" class="wbutton">Submit</button>
                              </div>
                         </div>
                    </div>

                    <?php
          }?>
               </form>
          </div>

          <?php

     $submit = $_POST['submit'];
    
     if (isset($submit)) {
          # code...
          if(isset($_SESSION['login'])){
               $comment = $_POST['comment'];
               $rating = $_POST['rating'];
               $name = $_SESSION['username'];
               $email = $_SESSION['login'];
               $c_product_id = $s_product['unique_id'];

               $insert_data = "INSERT INTO COMMENTS (comment, username, email, rating, product_name) VALUES ('$comment', '$name', '$email', '$rating', '$c_product_id')";
               if (mysqli_query($db, $insert_data)) {
                    echo "<script> alert('Successfull');
                    window.location.href='../Singal_Page_Product.php?id=<?php $ ?>'
                    </script>";
               }     
          }else {
               $comment = $_POST['comment'];
               $rating = $_POST['rating'];
               $name = $_POST['name'];
               $email = $_POST['email'];
               $c_product_id = $s_product['unique_id'];

               $insert_data = "INSERT INTO COMMENTS (comment, username, email, product_name, rating) VALUES ('$comment', '$name', '$email', '$c_product_id', '$rating')";
               if (mysqli_query($db, $insert_data)) {
                    echo "<script> alert('Successfull'); </script>";
               }
     } 
     }
?>

          <!-- Reivews Conatiner End -->
     </div>
</div>