<?php
include('./function/db_connection.php');

     include('Html_opening.php');
     include('Sidebar.php');
     include('Nav_Topbar.php');

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h3>Category List</h3>
        </div>
    </div>
    <?php
     $fetch_cat = "SELECT * FROM CATEGORIES ORDER BY id ASC";
     $cat_result = mysqli_query($db, $fetch_cat);
     $cat_rows = mysqli_num_rows($cat_result);
     if ($cat_rows > 0) {
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
                                <th class="align-middle" scope="col">Category Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sr_no = '1';
                                   while ($category = mysqli_fetch_assoc($cat_result)) {
                                   ?>
                            <tr>
                                <th class="align-middle" scope="row"><?php echo $sr_no; ?></th>
                                <td class="align-middle"><button class="btn btn-primary"
                                        onclick="window.location.href='function/_del_category.php?id=<?php echo $category['id']; ?>'"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <td class="align-middle"><button class="btn btn-primary"
                                        onclick="window.location.href='./_Category_edit.php?id=<?php echo $category['id']; ?>'"><i
                                            class="fas fa-edit    "></i></button></td>
                                <td class="align-middle"><?php echo $category['category']; ?></td>
                            </tr>
                            <?php
                                   $sr_no++;          }
                              }else {
                                   echo "No Category available Found";
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

   include('Footer.php');
     include('Html_closing.php');
?>
