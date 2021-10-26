<!-- Content Area -->
<div class="container-fluid">
     <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-6 ls-content m-4">

               <!-- Heading -->

               <div class="container">
                    <h1>Got Question</h1>
                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac
                        urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed.</p>
               </div>

               <!-- Contact Us Form -->

                
               <div class="container">
                    <hr>
                    <form action="" method="POST" class="">
                         <div class="form-group">
                              <input type="text" name="name" autocomplete="off" required>
                              <label for="name" class="lable-name"> <span class="content-name">Name</span> </label>                    
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['username']; ?></div>
                         
                         <div class="form-group">
                              <input type="email" name="email" autocomplete="off" required>
                              <label for="email" class="lable-name"> <span class="content-name">Email</span> </label>                                    
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['email']; ?></div>

                         <div class="form-group">
                              <input type="text" name="subject" autocomplete="off" required>
                              <label for="subject" class="lable-name"> <span class="content-name">Subject</span> </label>                                    
                         </div>
                         <div class="text-warning lead" style="font-size: smaller;"><?php  echo $errors['subject']; ?></div>
                         
                         <div>
                              <label for="msg"> Discription  </label><br>
                              <textarea class="w-100 p-1" type="text" name="msg" autocomplete="off" required></textarea>
                         </div>

                         <div class="form-group h-100">
                              <div><button type="submit" name="signup" class="wbutton">Send</button></div>
                         </div>
                         </form>
               </div>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-8 rs-content container m-4">
                <!-- Quick Links Block -->
               <div class="quick-nav list-group container">
                    <h4>Quick links</h4>
                    <li class="list-group-item"><a href="../INDEX.php">Home</a></li>
                    <li class="list-group-item"><a href="#">Shop</a></li>
                    <li class="list-group-item"><a href="#">Cart</a></li>
                    <li class="list-group-item"><a href="#">About US</a></li>
                    <li class="list-group-item"><a href="#">Contact US</a></li>
               </div>
                <br>
                <hr>
                <br>
                <!-- Latest Collection Block -->
               <div class="quick-nav list-group container">
                    <h4>Latest Collection</h4>
                    <li class="list-group-item"><a href="#">Home</a></li>
                    <li class="list-group-item"><a href="#">Shop</a></li>
                    <li class="list-group-item"><a href="#">Cart</a></li>
                    <li class="list-group-item"><a href="#">About US</a></li>
                    <li class="list-group-item"><a href="#">Contact US</a></li>
               </div>
          </div>
     </div>
</div>
<div class="space-box">
    </div>