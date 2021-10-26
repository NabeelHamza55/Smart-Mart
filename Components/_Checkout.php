<div class="container-fluid p-5">
     <div class=" container jumbotron round_border">
          <div class="row">
               <div class="col-lg-6 border-right border-dark">
                    <form action="" method="POST" class="">
                         <div class="form-group">
                              <input type="text" name="name" autocomplete="off" required>
                              <label for="name" class="lable-name"> <span class="content-name">Name</span> </label>
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['username']; ?>
                         </div>

                         <div class="form-group">
                              <input type="email" name="email" autocomplete="off" required>
                              <label for="email" class="lable-name"> <span class="content-name">Email</span> </label>
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['email']; ?>
                         </div>

                         <div class="form-group">
                              <input type="text" name="phone_no" autocomplete="off" required>
                              <label for="phone_no" class="lable-name"> <span class="content-name">Phone_No</span>
                              </label>
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['subject']; ?>
                         </div>

                         <div class="form-group">
                              <input type="text" name="address" autocomplete="off" required>
                              <label for="address" class="lable-name"> <span class="content-name">Address</span>
                              </label>
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['subject']; ?>
                         </div>

                         <div class="form-check">
                              <input class="form-check-input" type="radio" value="cod" name="cod"
                                   id="cod">
                              <label class="form-check-label" for="flexRadioDefault1">
                                   Cash on Delivery
                              </label>
                         </div>
                          <br>
                         <div class="form-group h-100">
                              <div><button type="submit" name="order_pay" class="wbutton">Send</button></div>
                         </div>
                    </form>
               </div>
               <div class="col-lg-6">

               </div>
          </div>
     </div>
</div>