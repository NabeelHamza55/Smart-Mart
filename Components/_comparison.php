<?php

?>
<br>
<div class="container">
     <h4 class="display-4">Compare Products</h4>
</div>
<div class="container">
     .<div class="jumbotron">
          <div class="row">
               <div class="col-md-6 compare-form border-right">
                    <form action="">
                         <div class="form-group">
                              <input type="text" id="object1_btn" value="<?php echo $_GET['name']; ?>" name="object_1" autocomplete="off" required>
                              <label for="name" class="lable-name"> <span class="content-name">Enter First Product</span> </label>
                         </div>
                    </form>
                    <div class="row">
                         <div class="col-12">
                         <div id="suggestion1" class="d-none">
                         
                         </div>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 border-left">
                    <form action="">
                         <div class="form-group">
                              <input type="text" id="object2_btn" name="object_2" autocomplete="off" required>
                              <label for="name" class="lable-name"> <span class="content-name">Enter Second Product</span> </label>
                         </div>
                    </form>
                    <div class="row">
                         <div class="col-12">
                         <div id="suggestion2 class=" d-none">
                         
                         </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="container">
     <div class="jumbotron">
          <div class="row">
               <div class="col-6 border-right">
                    <div class="" id="object1">

                    </div>
               </div>
               <div class="col-6 border-left">
                    <div class="" id="object2">

                    </div>
               </div>
          </div>
     </div>
</div>