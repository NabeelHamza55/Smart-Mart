<header>
    <!-- Top Bar -->

    <div class="top d-flex flex-wrap justify-content-around">
        <div class="p-1 user-note">
            <h5>Welcome
                <?php echo $_SESSION['f_name'] ?? ''; ?>
            </h5>
        </div>
        <?php if (!empty($_SESSION['login'])) {  ?>
        <div class="p-1 user-panel">
            <?php
            if ($_SESSION['user_type'] != 1) {
                ?>
            <a class="px-2" href="/CheckOut.php">Check Out</a> |
            <a class="px-2" href="/Admin/_profile.php">Profile</a>|
            <?php
            } else {
                ?>
            <a class="px-2" href="/Admin/_profile.php">Dashboard</a>|
            <?php
            }
            ?>

            <a class="px-2" href="/Functions/_logout.php">Logout</a>
        </div> <?php } else { ?>
        <div class="p-1 user-panel">
            <a class="px-2" href="/Checkout.php">Check Out</a> |
            <a class="px-2" href="/Login.php">Login</a>|
            <a class="px-2" href="/Signup.php">Sign Up</a>
        </div> <?php } ?>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <li class="title-h"><a href="/index.php">Smart Mart</a></li>
        <li class="item <?php echo ($title == "Smart Mart" ? "active" : "") ?> "><a href="/index.php">Home</a></li>
        <li class="item <?php echo ($title == "Shop" ? "active" : "") ?> "><a href="/Shop.php">Shop</a></li>
        <li class="item <?php echo ($title == "Mobiles" ? "active" : "") ?>">
            <!-- <div class="btn-group"> -->
            <a href="./Shop.php?category=Mobiles" class="">Mobiles</a>
            <!-- <a class=" dropdown-toggle dropdown-toggle-split"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
               </a>
               <div class="dropdown-menu">
                    <?php
               // $sql1 = "SELECT * FROM (SELECT * FROM products WHERE category_fk = 'Mobiles' ORDER BY id DESC )Var1 ORDER BY id DESC;";
               // $result1 = mysqli_query($db, $sql1);
               // $row1 = mysqli_num_rows($result1);
               // if ($row1 > 0) {
               //      while ($company1 = mysqli_fetch_assoc($result1)) {
               //           echo $company1['brand'];
                ?>
               //      <a class="dropdown-item" href="#"><?php //echo $company1['name'];?></a>
                     <?php //} }?>
               </div> -->
            <!-- </div> -->
        </li>
        <li class="item <?php echo ($title == "Electronics" ? "active" : "") ?>">
            <!-- <div class="btn-group"> -->
            <a href="/Shop.php?category=Electronics">Electronics</a>
            <!-- <a class="dropdown-toggle dropdown-toggle-split"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
               </a>
               <div class="dropdown-menu">
                    <?php // $sql2 = "SELECT * FROM products";
                    //$result2 = mysqli_query($db, $sql2);
                   // $rows2 = mysqli_num_rows($result2);
                   // if($rows2 > 0){
                  //    $brand2 = mysqli_fetch_assoc($result2);
                ?>
                    <a class="dropdown-item" href="#!"><?php // echo $brand2['id'];?></a>
                    <?php // }else{
                   //      die('error');
                   // }?>
               </div> -->
            <!-- </div> -->
        </li>
        <li class="item">
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">More</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="/About.php">About Us</a>
                    <a class="dropdown-item" href="/Contact.php">Contact Us</a>
                </div>
            </div>
        </li>

        <li class="item nav-c search-btn">
            <form action="./Search.php" method="POST">
                <div class="input-group  m-auto">
                    <input type="text" class="form-control" name="string" id="search_string" placeholder="Search"
                        aria-label="search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" id="search-btn" name="search" type="submit"
                        id="button-addon2">Search</button>
                </div>
            </form>
        </li>
        <li class="item nav-c cart-btn"><a href="/Cart.php">Cart | <span><?php
                           if (isset($_SESSION['cart'])) {
                               echo count($_SESSION['cart']);
                           } else {
                               echo "0";
                           }
                ?></span></a></li>
        <li class="toggle"><span class="bars"></span></li>
    </nav>
</header>
