<div class="container-fluid p-5">
    <div class=" container jumbotron round_border">
        <form action="Functions/_proceed_order.php" method="POST" class="">
            <div class="row">
                <div class="col-lg-6 border-right border-dark">
                    <?php
                         if (!(isset($_SESSION['login']))) {
                              ?>
                    <div class="form-group">
                        <input type="text" name="username" autocomplete="off" required>
                        <label for="username" class="lable-name"> <span class="content-name">Username</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" autocomplete="off" required>
                        <label for="email" class="lable-name"> <span class="content-name">Email</span>
                        </label>
                    </div>
                    <?php
                         }
                    ?>
                    <div class="form-group">
                        <input type="text" name="phone_no" autocomplete="off" required>
                        <label for="phone_no" class="lable-name"> <span class="content-name">Phone_No</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" name="address" autocomplete="off" required>
                        <label for="address" class="lable-name"> <span class="content-name">Address</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" name="country" autocomplete="off" required>
                        <label for="country" class="lable-name"> <span class="content-name">Country</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4>Total Payment:
                        <?php
                    echo $total;
                    ?>
                    </h4>
                </div>
            </div>
        </form>
    </div>
</div>
