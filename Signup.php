<?php
    $title = "Signup Page";
    include('HTML_start.php');
    include('./Functions/_Signup.php');
?>
<header>
    <nav class="navbar">
        <li class="title-h"><a href="./INDEX.php">Smart Mart</a></li>
    </nav>
</header>
<div class="login-container h-100">
    <div class="parent-box shadow-sm jumbotron p-5 h-100">
        <div class="child-box shadow  bg-light p-5 ">
            <div class="row align-items-center align-content-center">
                <div class="col-lg-12 col-xs-12 col-sm-12 border-bottom">
                    <div>
                        <h5 class="lead display-4">Sig-up Form</h5>
                    </div>
                    <div class="container">
                        <hr>
                        <form action="" method="POST" class="">
                            <div class="form-group">
                                <input type="text" name="name" autocomplete="off" required>
                                <label for="name" class="lable-name"> <span class="content-name">Name</span> </label>
                            </div>
                            <div class="text-warning lead" style="font-size: smaller;">
                                <?php  echo $errors['username']; ?></div>
                            <div class="form-group">
                                <input type="email" name="email" autocomplete="off" required>
                                <label for="email" class="lable-name"> <span class="content-name">Email</span> </label>
                            </div>
                            <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['email']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" autocomplete="off" required>
                                <label for="password" class="lable-name"> <span class="content-name">Password</span>
                                </label>
                            </div>
                            <div class="text-warning lead" style="font-size: smaller;">
                                <?php  echo $errors['password']; ?></div>
                            <div class="form-group">
                                <input type="password" name="confirm_pass" autocomplete="off" required>
                                <label for="confirm_pass" class="lable-name"> <span class="content-name">Re-Enter
                                        Password</span> </label>
                            </div>
                            <div class="text-warning lead" style="font-size: smaller;">
                                <?php  echo $errors['password']; ?></div>
                            <div class="form-group h-100">
                                <div><a href="#">Forget Password</a>|<a href="./Login.php">Login</a> | <a
                                        href="./INDEX.php">
                                        Return to Home Page </div><br>
                                </a>
                                <div><button type="submit" name="signup" class="wbutton">Signup</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-xs-12 col-sm-12 border-left border-bottom">
                        <div class="container d-flex flex-column justify-content-end align-content-center align-items-center">
                            <div class="border-bottom login-with py-5">
                                <h4 class="lead">Login With</h4>
                            </div>
                            <form action="">
                                <div class="row my-5">
                                    <div class="col-sm-12 col-lg-5 text-center">
                                        <a href="#">
                                            <i style="font-size: 60px;" class="fab fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-2 text-center">
                                        <p class="lead text-center">or</p>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 text-center">
                                        <a href="#">
                                            <i style="font-size: 60px;" class="fab fa-google-plus-square" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="border-top">
                                <a href="./INDEX.php">
                                    <h5 class="lead">Return to Home Page</h5>
                                </a>
                            </div>
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
