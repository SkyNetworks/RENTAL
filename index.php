<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>
<section class="register-block">
  <div class="container">
   <div class="row">
    <div class="col-md-4 register-sec">
      <h2 class="text-center">Register Now</h2>
      <form class="register-form"  id="register1" >
        <input type="hidden" value="user" name="form_name">
        <div class="form-group">
          <label  class="text-uppercase">Fullname</label>
          <input type="text" class="form-control" placeholder="Please Enter UserName"  name="fullname" required>
        </div>
        <div class="form-group">
          <label  class="text-uppercase">Email</label>
          <input type="email" class="form-control" placeholder="Please Enter Email" name="email" required>
        </div>

        <div class="form-group">
          <label  class="text-uppercase">Password</label>
          <input type="password" class="form-control" placeholder="Please Enter Password" name="password" required>
        </div>
        <button type="submit"  class="btn btn-register float-right">Submit</button>
      </form>
    </div>
    <div class="col-md-8 banner-sec">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="assets/images/1.jpg">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
              <h2>ADS ROOM</h2>
             
            </div>	
          </div>
        </div>
      </div>	   
    </div>
  </div>
</div>
</div>
</section>
<?php require 'footer.php'; ?>