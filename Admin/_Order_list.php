<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Order List</h3>
          </div>
     </div>
     <?php 
     $fetch_orders = "SELECT * FROM order_manager";
     $orders_result = mysqli_query($db, $fetch_orders);
     $orders_rows = mysqli_num_rows($orders_result);
     if ($orders_rows > 0) {
?>
     <div class="row">
          <div class="col-lg-12  ">
               <div class="co-lg-12">
                    <div class="table-responsive round_border shadow-sm">
                         <table class="table table-hover align-middle">
                              <thead>
                                   <tr class="table-active">
                                        <th class="align-middle" scope="col">Delete</th>
                                        <!-- <th class="align-middle" scope="col">Edit</th> -->
                                        <th class="align-middle" scope="col">#</th>
                                        <th class="align-middle" scope="col">Order No</th>
                                        <th class="align-middle" scope="col">Customer Name</th>
                                        <th class="align-middle" scope="col">Email</th>
                                        <th class="align-middle" scope="col">Phone_No</th>
                                        <th class="align-middle" scope="col">Address</th>
                                        <th class="align-middle" scope="col">Pay_Method</th>
                                        <th class="align-middle" scope="col">Status</th>
                                        <th class="align-middle" scope="col">Detail</th>
                                        <th class="align-middle" scope="col">Order_Time</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php $sr_no = "1";
                                   while ($order = mysqli_fetch_assoc($orders_result)) { ?>
                                   <tr>
                                        <td class="align-middle"><button class="btn btn-primary"
                                                  onclick="window.location.href='function/_del_order.php?id=<?php echo $order['id']; ?>'"><i
                                                       class="fa fa-trash" aria-hidden="true"></i></button></td>
                                        <!-- <td class="align-middle"><button class="btn btn-primary"><i
                                                       class="fas fa-edit    "></i></button></td> -->
                                        <th class="align-middle" scope="row"><?php echo $sr_no; ?></th>
                                        <td class="align-middle"><?php echo $order['id']; ?></td>
                                        <td class="align-middle"><?php echo $order['user_name']; ?></td>
                                        <td class="align-middle"><?php echo $order['email']; ?></td>
                                        <td class="align-middle"><?php echo $order['phone_no']; ?></td>
                                        <td class="align-middle"><?php echo $order['address']; ?></td>
                                        <td class="align-middle"><?php echo $order['payment_method']; ?></td>
                                        <td class="align-middle"><?php echo $order['order_status']; ?></td>
                                        <td class="align-middle">
                                             <table class="table table-hover align-middle">
                                                  <thead>
                                                       <tr class="table-active">
                                                            <th class="align-middle" scope="col">#</th>
                                                            <th class="align-middle">Order No</th>
                                                            <th class="align-middle">Product Name</th>
                                                            <th class="align-middle">Price</th>
                                                            <th class="align-middle">Quantity</th>
                                                       </tr>
                                                  </thead>
                                                  <?php 
                                                            $fetch_orders1 = "SELECT * FROM user_orders WHERE order_id = $order[id]";
                                                            $orders_result1 = mysqli_query($db, $fetch_orders1);
                                                            $orders_rows1 = mysqli_num_rows($orders_result1);
                                                            if ($orders_rows1 > 0) {
                                                       ?>
                                                  <tbody>
                                                       <?php $sr_no1 = "1";
                                                       while ($order1 = mysqli_fetch_assoc($orders_result1)) { ?>
                                                       <tr>
                                                            <th class="align-middle" scope="row"><?php echo $sr_no1; ?>
                                                            </th>
                                                            <td class="align-middle"><?php echo $order1['order_id']; ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                 <?php echo $order1['product_name']; ?>
                                                            </td>
                                                            <td class="align-middle"><?php echo $order1['quantity']; ?>
                                                            </td>
                                                            <td class="align-middle"><?php echo $order1['price']; ?>
                                                            </td>
                                                       </tr>

                                                       <?php $sr_no1++; }
                    } ?>
                                                  </tbody>
                                             </table>
                                        </td>
                                        <td class="align-middle"><?php echo $order['creation_time']; ?></td>

                                   </tr>
                                   <?php $sr_no++; }
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