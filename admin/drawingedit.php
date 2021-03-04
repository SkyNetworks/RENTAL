<?php if(!session_start()){
  session_start() ;
}else {
  if($_SESSION['level'] == 2){
    ?>
    <?php 
    require '../header.php';
    require 'navigation.php'; 
    require_once('../dbconnection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM house WHERE house_id=$id";
    $select1=mysqli_query($conn, $sql);
    if($select1!=""):
      $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
      $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);
      while ($row1 = mysqli_fetch_assoc($select1)):
        ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="container picture">
            <div class="row">
              <div class="col-lg-6">
                <form method="POST" action="drawingupdate.php" enctype="multipart/form-data">
                  <div class="form-group">
                   <label for="exampleFormControlTextarea1">Address</label>
                   <input type="text" required class="form-control" name="address" aria-describedby="emailHelp" value="<?php echo $row1["address"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Owner Name</label>
                   <input type="text" required class="form-control" name="owner_name" aria-describedby="emailHelp"  value="<?php echo $row1["owner_name"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Mobile Number</label>
                   <input type="number" required class="form-control" aria-describedby="emailHelp"  name="number" value="<?php echo $row1["number"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Email Address</label>
                   <input type="text" required class="form-control"  aria-describedby="emailHelp"  name="email" value="<?php echo $row1["email"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Amount</label>
                   <input type="text" required class="form-control" aria-describedby="emailHelp"  name="amount" value="<?php echo $row1["amount"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Available Room</label>
                   <input type="text" required class="form-control" aria-describedby="emailHelp"  name="available_room" value="<?php echo $row1["available_room"]; ?>">
                 </div>
                 <!--  -->
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Room size</label>
                   <input type="text" required class="form-control" aria-describedby="emailHelp"  name="room_size" value="<?php echo $row1["room_size"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Description </label>
                   <input type="textarea" required class="form-control"  name="description" value="<?php echo $row1["description"]; ?>">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Image </label>

                   <input type="file" name="aimage"> <img src="<?php echo $path."/dataimg/".$row1['image']; ?>" height="50"><input type="hidden" name="aimage" value="<?php echo $row1["image"];  ?>">
                 </div>
                 <input type="hidden" name="id" value="<?php echo $row1["house_id"]; ?>">
                 <input type="submit" class="btn btn-primary"  name="submit" value="Update">
               </form>
             </div>
           </div>
         </div>
       </main>
       <?php
     endwhile;
   endif;
   ?>
 </div>
</div>

<?php require '../footer.php'; ?>
<?php } else {
  header('Location: ../index.php');
}

} ?>