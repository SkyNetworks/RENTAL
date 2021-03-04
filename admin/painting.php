
<?php 
require '../header.php';
require 'navigation.php'; 
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="container picture">
    <div class="row">
      <div class="col-lg-6">
        <form id="teacher">
          <input type="hidden" value="teacher" name="form_name">
          <div class="form-group">
           <label for="exampleFormControlTextarea1">Item lot number</label>
           <input type="text" required class="form-control" name="lot_number" aria-describedby="emailHelp" placeholder=" please enter item lot number" name="firstname" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Name of the artist</label>
           <input type="text" required class="form-control" name="name_artist" aria-describedby="emailHelp" placeholder="Please Enter name of the artist" name="firstname" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">First Name</label>
           <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please Enter First Name" name="firstname" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Last Name</label>
           <input type="text" required class="form-control"  aria-describedby="emailHelp" placeholder="
           Please Enter Last Name" name="lastname" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Location</label>
           <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please Enter Location" name="location" value="">
         </div>
         <input type="hidden" name="form_name" value="teacher">
         <button type="submit" class="btn btn-primary">submit</button>
       </form>
     </div>
   </div>
 </div>
</main>
</div>
</div>
<?php require '../footer.php'; ?>