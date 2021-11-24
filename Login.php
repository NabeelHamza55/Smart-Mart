<?php
    $title = "Login Page";
    include('HTML_start.php');
    include('./Functions/_Login.php');

?>
<header>
    <nav class="navbar">
        <li class="title-h"><a href="./INDEX.php">Smart Mart</a></li>
    </nav>
</header>
<div class="login-container h-100">
    <div class="parent-box shadow-sm jumbotron p-5 h-100">
        <div class="child-box shadow container bg-light p-5">
            <div class="row align-items-center align-content-center">
                <div class="col-lg-12 col-xs-12 col-sm-12 border-bottom">
                    <div>
                        <h5 class="lead display-4">Login Form</h5>

                    </div>
                    <div class="container">
                        <hr>
                        <form action="" method="post" class="">
                            <div class="form-group">
                                <input type="email" name="email" autocomplete="off" required>
                                <label for="email" class="lable-name"> <span class="content-name">Email</span> </label>
                            </div>
                            <div class="text-danger " style="font-size: smaller;"><?php  echo $error['email']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" autocomplete="off" required>
                                <label for="password" class="lable-name"> <span class="content-name">Password</span>
                                </label>
                            </div>
                            <div class="text-danger " style="font-size: smaller;"><?php  echo $error['password']; ?>
                            </div>
                            <div class="form-group h-100">
                                <div><a href="./INDEX.php">Return to Home Page</a> |<br> <a href="Signup.php">Create New
                                        Account</a></div><br>
                                <div><button type="submit" name="login" class="wbutton">Login</button></div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-xs-12 col-sm-12 border-left border-bottom">
                        <div class="container d-flex flex-column justify-content-end align-content-center align-items-center">
                            <div class="border-bottom login-with py-5">
                                <h4 class="lead">Login With</h4>
                            </div>
                            <div class="row my-5">
                                <div class="col-sm-12 col-lg-4 text-center">
                                    <a href="#">
                                        <i style="font-size: 60px;" class="fab fa-facebook-square" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-sm-12 col-lg-4 text-center">
                                    <p class="lead text-center">or</p>
                                </div>
                                <div class="col-sm-12 col-lg-4 text-center">
                                    <a href="#">
                                        <i style="font-size: 60px;" class="fab fa-google-plus-square" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="border-top"><a href="./INDEX.php"><h5 class="lead">Return to Home Page</h5></a></div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>
<?php
        include('./Components/_Footer.php');
        include('HTML_end.php');
    ?>
