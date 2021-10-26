<?php
     include('../Functions/db_connection.php');

     $search_val = $_POST['search'];
     $getdata = "SELECT * FROM products WHERE product_name LIKE '%{$search_val}%'";
     $result = mysqli_query($db, $getdata);
     $row = mysqli_num_rows($result);
     if ($row>0) {
          # code...
          while ($product1 = mysqli_fetch_assoc($result)) {
           # code...
           ?>
          
          <a id="suggest_link" class="Border-1 list-group-item list-group-item-action" href="#"><?php echo $product1['product_name']; ?></a>
          <?php
          } 
     }else{
          echo '<p class=" list-group-item">No Result Found</p>';
     }    
     
?>