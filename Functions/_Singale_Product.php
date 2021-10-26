<?php
     $p_id = $_GET["id"];
     if (isset($p_id)) {
          # code...
          $sql = "SELECT * FROM products WHERE id = '$p_id'";
     }
     $results = mysqli_query($db, $sql);
     $row = mysqli_num_rows($results);
     if ($row > 0) {
          # code...
          $s_product = mysqli_fetch_assoc($results);
     }
?>