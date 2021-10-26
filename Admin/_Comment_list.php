<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Comment List</h3>
          </div>
     </div>
     <?php 
     $fetch_comments = "SELECT * FROM COMMENTS";
     $comments_result = mysqli_query($db, $fetch_comments);
     $comments_rows = mysqli_num_rows($comments_result);
     if ($comments_rows > 0) {
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
                                        <!-- <th class="align-middle"  scope="col">Hide</th> -->
                                        <th class="align-middle" scope="col">Comments</th>
                                        <th class="align-middle" scope="col">Product Name</th>
                                        <th class="align-middle" scope="col">User</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php 
                    $sr_no = "1";
                    while ($comment = mysqli_fetch_assoc($comments_result)) { ?>
                                   <tr>
                                        <th class="align-middle" scope="row"><?php echo $sr_no; ?></th>
                                        <td class="align-middle"><button class="btn btn-primary" onclick="window.location.href='function/_del_comment.php?id=<?php echo $comment['id']; ?>'" ><i class="fa fa-trash"
                                                       aria-hidden="true"></i></button></td>
                                        <td class="align-middle"><button class="btn btn-primary"><i
                                                       class="fas fa-edit    "></i></button></td>
                                        <!-- <td class="align-middle" ><button class="btn btn-primary"><i class="fas fa-eye    "></i></button></td> -->
                                        <td class="align-middle"><?php echo $comment['comment'] ?></td>
                                        <td class="align-middle"><?php echo $comment['product_name'] ?></td>
                                        <td class="align-middle"><?php echo $comment['username'] ?></td>
                                   </tr>
                              </tbody>
                              <?php $sr_no++; } 
               } ?>
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