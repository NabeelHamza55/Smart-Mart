<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.php">
            <!-- <div class="sidebar-brand-icon rotate-n-15"> </div> -->
            <div class="sidebar-brand-text mx-3">
                <h5s>Smart Mart</h5s>
            </div>
        </a>
        <?php if ($_SESSION['user_type'] == "1" || $_SESSION['user_type'] == "2") { ?>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <?php } ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            User Interface
        </div>

        <!-- Nav Item - User Profile Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile_collapse"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Profile</span>
            </a>
            <div id="profile_collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/Admin/_profile.php">View Profile</a>
                    <?php if ($_SESSION['user_type'] == "3") { ?>
                    <!-- <a class="collapse-item" href="./Comments.phpl">Wishlist Product</a>
                         <a class="collapse-item" href="buttons.html">Address Book </a> -->
                    <?php } ?>
                </div>
            </div>
        </li>


        <?php if ($_SESSION['user_type'] == "3") { ?>
        <!-- Nav Item - Customer_Orders Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#a_orders_collapse"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Orders</span>
            </a>
            <div id="a_orders_collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/Admin/_User_Order_List.php">Orders List</a>
                    <!-- <a class="collapse-item" href="./Comments.phpl">Manage Order</a> -->
                </div>
            </div>
        </li>
        <?php } ?>
        <!-- Nav Item -Security Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#security_collapse"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Security</span>
            </a>
            <div id="security_collapse" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="#">Update Profile</a>
                    <!-- <a class="collapse-item" href="utilities-animation.html">Update Payment Method</a> -->
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <?php
               if($_SESSION['user_type'] == "1" || $_SESSION['user_type'] == "2"){?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Manage Users
        </div>
        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Users" aria-expanded="true"
                aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Users</span>
            </a>
            <div id="Users" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" id="" href="/Admin/_User_list.php">Users List</a>

                    <a class="collapse-item" id="" href="/Admin/_User_add.php">Add Users</a>
                    <a class="collapse-item" id="" href="/Admin/_User_type_set.php">Set User Type</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Ecommerce
        </div>

        <!-- Nav Item - Products Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product_collapse"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Products</span>
            </a>
            <div id="product_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" id="p_list_btn" href="/Admin/_Product_list.php">Product List</a>
                    <a class="collapse-item" id="p_add_btn" href="/Admin/_Product_add.php">Add Product</a>
                    <!-- <a class="collapse-item" id="p_f_btn" href="/Admin/_Product_F_list.php">Featured Product</a> -->
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>

        <!-- Nav Item - Admin_Order Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#c_orders_collapse"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Orders</span>
            </a>
            <div id="c_orders_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" id="ao_list_btn" href="/Admin/_Order_list.php">Order List</a>
                    <!-- <a class="collapse-item" id="ao_req_btn" href="/Admin/_Order_req.php">Order Requests</a>
                             <a class="collapse-item" id="ao_pnd_btn" href="_Order_pend.php">Pending Orders</a>
                             <a class="collapse-item" id="ao_comp_btn" href="_Order_comp.php">Order Complete</a> -->
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>

        <!-- Nav Item - Categories Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Category_collapse"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Categories</span>
            </a>
            <div id="Category_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" id="cat_list_btn" href="/Admin/_Category_list.php">Category List</a>
                    <a class="collapse-item" id="cat_Add_btn" href="/Admin/_Category_add.php">Add Category</a>
                    <a class="collapse-item" id="scat_list_btn" href="/Admin/_CategoryS_list.php">Sub_Category List</a>
                    <a class="collapse-item" id="scat_add_btn" href="/Admin/_CategoryS_add.php">Add Sub_Category</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Comments Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" id="comment_list_btn" href="#" data-toggle="collapse"
                data-target="#Comments_collapse" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Comments</span>
            </a>
            <div id="Comments_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" id="comment_list_btn" href="/Admin/_Comment_list.php">Comment List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Images Collapse Menu -->
        <!-- <li class="nav-item">
                   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#images_collapse"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Images</span>
                   </a>
                   <div id="images_collapse" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                             <a class="collapse-item" href="/Admin/_Image_list.php">Image List</a>
                             <a class="collapse-item" href="/Admin/_Image_add.php">Add Image</a>
                             <div class="collapse-divider"></div>
                        </div>
                   </div>
              </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <?php
          } ?>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message
             <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2">Wanna more Shopping!, Click Return Button for return to Homepage of <strong>Smart Mart</strong></p>
                <a class="btn btn-success btn-sm" href="#">Return</a>
            </div>  -->

    </ul>
    <!-- End of Sidebar -->
