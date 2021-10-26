<?php 
include('./function/db_connection.php');

     include('./Html_opening.php');
     include('./Sidebar.php');
     include('./Nav_Topbar.php');
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Users List</h3>
          </div>
     </div>
     <?php 
     $fetch_user = "SELECT * FROM users as u INNER JOIN user_type as ut ON(u.u_type_fk = ut.id)";
     $user_result = mysqli_query($db, $fetch_user);
     $user_rows = mysqli_num_rows($user_result);
     if ($user_rows > 0) {
?>
     <div class="row">
          <div class="col-lg-12  ">
               <div class="co-lg-12">
                    <div class="table-responsive round_border shadow-sm">
                         <table class="table table-hover align-middle ">
                              <thead>
                                   <tr class="table-active p-1">
                                        <th class="align-middle" scope="col">#</th>
                                        <th class="align-middle" scope="col">First Name</th>
                                        <th class="align-middle" scope="col">Last Name</th>
                                        <th class="align-middle" scope="col">username</th>
                                        <th class="align-middle" scope="col">Email</th>
                                        <th class="align-middle" scope="col">User Type</th>
                                        <th class="align-middle" scope="col">Creation Time</th>
                                        <th class="align-middle" scope="col">Delete</th>
                                        <th class="align-middle" scope="col">Edit</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                   $sr_no = "1";
                              while ($user = mysqli_fetch_assoc($user_result)) {
                              ?>
                                   <tr class="">
                                        <th class="align-middle" scope="row"><?php echo $sr_no; ?></th>
                                        <td class="align-middle"><?php echo $user['first_name']; ?> </td>
                                        <td class="align-middle"><?php echo $user['last_name']; ?></td>
                                        <td class="align-middle"><?php echo $user['username']; ?></td>
                                        <td class="align-middle"><?php echo $user['email']; ?></td>
                                        <td class="align-middle"><?php echo $user['u_type']; ?></td>
                                        <td class="align-middle"><?php echo $user['creation_time']; ?></td>
                                        <td class="align-middle"><button class="btn btn-primary"
                                                  onclick="window.location.href='function/_del_users.php?id=<?php echo $user['user_id']; ?>'"><i
                                                       class="fa fa-trash" aria-hidden="true"></i></button></td>
                                        <td class="align-middle"><button class="btn btn-primary"
                                                  onclick="window.location.href='_User_edit.php?id=<?php echo $user['user_id']; ?>'"><i
                                                       class="fas fa-edit    "></i></button></td>
                                   </tr>
                                   <?php
                                   $sr_no++;
                              }
                         }else {
                              echo "No User Found";
                         }
                         ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>

<?php
     include('./Footer.php');
     include('./Html_closing.php');
?>