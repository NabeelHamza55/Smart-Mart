<?php 
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');
     
?>
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-12">
               <h3>Sub_Category List</h3>
          </div>
     </div>
     <?php 
     $fetch_scat = "SELECT * FROM SUB_CATEGORIES";
     $scat_result = mysqli_query($db, $fetch_scat);
     $scat_rows = mysqli_num_rows($scat_result);
     if ($scat_rows > 0) {
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
                                        <th class="align-middle" scope="col">Sub_Category Name</th>
                                        <th class="align-middle" scope="col">Parent Category Name</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                   $sr_no = "1";
                                   while ($sub_cat = mysqli_fetch_assoc($scat_result)) { ?>
                                   <tr>
                                        <th h class="align-middle" scope="row"><?php echo $sr_no; ?></th>
                                        <td class="align-middle"><button class="btn btn-primary" onclick="window.location.href='function/_del_sub_category.php?id=<?php echo $sub_cat['id']; ?>'" ><i class="fa fa-trash"
                                                       aria-hidden="true"></i></button></td>
                                        <td class="align-middle"><button class="btn btn-primary"
                                                  onclick="window.location.href='./_CategoryS_edit.php?id=<?php echo $sub_cat['id']; ?>'"><i
                                                       class="fas fa-edit    "></i></button></td>
                                        <td class="align-middle"><?php echo $sub_cat['sub_category']; ?></td>
                                        <td class="align-middle"><?php echo $sub_cat['parent_category']; ?></td>
                                   </tr>
                                   <?php $sr_no++; }
                              }else {
                              echo "No Sub_Category Found";
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