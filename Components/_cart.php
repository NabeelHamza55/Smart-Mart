<?php

    if (isset($_GET['remove'])) {
            $remove_id = $_GET['remove'];
            unset($_SESSION['cart'][$remove_id]);
            header('Location: ../Cart.php');
    }
?>
<div class="container-fluid p-5">
    <div class="container-fluid p-5 jumbotron product-box">
        <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
                        echo '<div class"container">
                                <div class="form-group bg-light rounded px-3 py-2 text-center">
                                <input type="text" class="form-control form-control-lg text-center" value="Your Cart is Empty" disabled>
                                </div>
                                    <div class="d-flex justify-content-center align-content-center"><a class="btn bbutton" href="/Shop.php">Continue Shopping</a></div>
                                </div>';
                   }else{
                       ?>
        <!-- <form action="" method="POST"> -->
        <div class="row m-4">
            <div class="col-xl-12 col-lg-12 col-sm-12">
                <h2>Cart</h2>
            </div>
        </div>
        <div class="row m-4 p-3 cart-border">
            <div class="col-xl-12 col-lg-12 col-sm-12">
                <table class="table table-responsive-lg">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $sr_no = "1";
                                $total = 0;
                                foreach ($_SESSION['cart'] as $key => $value) {
                                     $sql = "SELECT * FROM products WHERE id = '$key'";

                                     $products = mysqli_query($db, $sql);
                                        foreach ($products as $product) {
                                            ?>
                        <tr>
                            <td>
                                <?php echo $sr_no?>
                            </td>
                            <td>
                                <?php echo $product['product_name']; ?>
                            </td>
                            <td>
                                <?php echo $product['price']; ?>
                            </td>
                            <td>
                                <form action="./Functions/_update_cart.php" method="POST">
                                    <input style="width: 100px;" onchange="this.form.submit()" type="number"
                                        value="<?php echo $value['Product_quantity']; ?>" min="1"
                                        max="<?php echo $product['quantity']; ?>" name="new_cart_quantity"
                                        class="form-control">
                                    <input style="width: 100px;" type="hidden"
                                        value="<?php echo $value['Product_id']; ?>" name="p_id" class="form-control">
                                </form>
                            </td>
                            <td>
                                <?php $sub_total = $value['Product_quantity'] * $product['price']; echo $sub_total;  $total = $total + $sub_total; ?>
                            </td>
                            <td><button class="wbutton" onclick="window.location.href='?remove=<?php echo $key ?>'"> <i
                                        class="fa fa-trash" aria-hidden="true"></i> </button>
                        </tr>
                        <?php
                                        }
                                    $sr_no++;
                                }
                                ?>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row m-4 bg-dark p-3">
            <div class="col-xl-3 col-lg-4 col-sm-4 r-s-btn">
                <button class="bbutton"> Return To Shop </button>
            </div>
            <div class="col-xl-6 col-lg-4 col-sm-4 r-s-btn">
                <!-- <div class="container">
                        <form class="d-flex align-items-center">
                            <div class="form-group row p-1">
                                <label for="coupon" class="col-sm-1-12 col-form-label"></label>
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="coupon" id="coupon" placeholder="Enter Coupon">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
            </div>
            <!-- <div class="col-xl-3 col-lg-4 col-sm-4 r-s-btn">
                    <button class="bbutton" type="submit" value="update" name="update_cart"> Update Cart </button>
               </div> -->
        </div>
        <!-- </form> -->
        <?php } ?>
    </div>
</div>
<?php
if (isset($_SESSION['cart'])) {
     ?>
<div class="container-fluid p-5">
    <div class="container-fluid p-5 jumbotron product-box">

        <div class="row justify-content-center align-content-center">
            <div class="col-xl-8 col-lg-8 col-sm-12">
                <form action="Functions/_proceed_order.php" method="POST" class="">
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

                    <div class="container bg-light p-3 rounded">
                        <h5>Select Payment Method</h5>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="cod" name="pay_method" id="cod"
                                onclick="test(1)" checked>
                            <label class="custom-control-label" for="cod">
                                Cash on Delivery
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="jazz_easy_pay" name="pay_method"
                                id="pay_method" onclick="test(2)">

                            <label class="custom-control-label" for="pay_method">
                                Via JazzCash / EasyPaisa
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="stripe" name="pay_method"
                                id="stripe" onclick="test(3)">

                            <label class="custom-control-label" for="stripe">
                                Via Debit/Visa Card (Stripe)
                            </label>
                        </div>
                        <br>
                </form>
                <form id="payment-form">
                    <div id="payment-element">
                        <!-- Elements will create form elements here -->
                    </div>
                    <button class="btn btn-primary" id="submit">Submit</button>
                    <div id="error-message">
                        <!-- Display error message to your customers here -->
                    </div>
                </form>
                <div class="container d-none" id="jazz_easy">
                    <div class="form-group row align-items-center">
                        <span class="col-3" for="easy_jazz">jazz_cash/Easy_Paisa:</span>
                        <input type="text" name="easy_jazz" id="easy_jazz" value="03054606260"
                            class="form-control col-9 disable" placeholder="" aria-describedby="helpId" disabled>
                    </div>
                </div>
                <div class="container d-none" id="stripe_method">

                    <form action="" method="post">
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $public_sKey; ?>" data-amount="<?= $total*100?>" data-name="SmartMart"
                            data-description="Stripe Checkout" data-currency="pkr">
                        </script>
                    </form>
                </div>
            </div>
            <br>
            <div class="form-group h-100">
                <div><button type="submit" value="order_pay" name="order_pay" class="wbutton">Procceed
                        Payment</button></div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-sm-12 r-s-btn">
            <h4>Total Payment:
                <?php
                    echo $total;
               ?>
            </h4>
        </div>

    </div>
</div>
</div>
<?php
}
?>

<script>
var x;
$(document).ready(function() {
    test(x);
});

function test(x) {
    if (x == 2) {
        $('#jazz_easy').removeClass('d-none');
    } else {
        $('#jazz_easy').addClass('d-none');
    }
    if (x == 3) {
        $('#stripe_method').removeClass('d-none');
    } else {
        $('#stripe_method').addClass('d-none');
    }
};
var clientSecret =
    "sk_test_51Ka40mAjcEw0DwAAzyenSNcEGViMARHmf2pncLIzHDvQbIkyd65tfz1bngBaktfaFp7YdwPOwzkbQTllAGO6cKwt00zK4tuc72";
const stripe = Stripe(
    'pk_test_51Ka40mAjcEw0DwAAl722EWBmScAUk7JDfCFizSi0RtsUZyrF4PC8vVpNIoY0v0E263IKqNMPcLHibHgPXuUa63w000cfDgAhNB');
(async () => {
    const response = await fetch('config.php');
    const {
        client_secret: clientSecret
    } = await response.json();
    // Render the Payment Element using the clientSecret
})();

const options = {
    clientSecret: 'sk_test_51Ka40mAjcEw0DwAAzyenSNcEGViMARHmf2pncLIzHDvQbIkyd65tfz1bngBaktfaFp7YdwPOwzkbQTllAGO6cKwt00zK4tuc72',

};

// Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 2
const elements = stripe.elements(options);

// Create and mount the Payment Element
const paymentElement = elements.create('payment');
paymentElement.mount('#payment-element');
</script>
