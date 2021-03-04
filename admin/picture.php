
<?php 
require '../header.php';
require 'navigation.php'; 
?>
<style>
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="container picture">
    <div class="row">
      <div class="col-lg-6">
        <form method="post" action="pictureaction.php" enctype="multipart/form-data">
          <div class="form-group">
           <label for="exampleFormControlTextarea1">Address</label>
           <input type="text" required class="form-control" name="address" aria-describedby="emailHelp" placeholder="Please enter address" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Owner Name</label>
           <input type="text" required class="form-control" name="name" aria-describedby="emailHelp" placeholder="Please enter owner name" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Mobile Number</label>
           <input type="number" required class="form-control" aria-describedby="emailHelp" placeholder="Please enter mobile number" name="number" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Email Address</label>
           <input type="email" required class="form-control"  aria-describedby="emailHelp" placeholder="Please enter email address" name="email" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Amount</label>
           <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please enter estimated amount" name="amount" value="">
         </div>
         <!--  -->
            <div class="form-group">
           <label for="exampleFormControlTextarea1">Available Room</label>
           <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please enter available room" name="available_room">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Room size</label>
           <input type="text" required class="form-control" aria-describedby="emailHelp" placeholder="Please enter room size" name="room_size">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Description </label>
           <input type="textarea" required class="form-control"  name="description" value="">
         </div>
         <div class="form-group">
           <label for="exampleFormControlTextarea1">Image </label>
           <input type="file" required class="form-control"  name="aimage" value="">
         </div>
         <button type="submit" class="btn btn-primary" name="submit">submit</button>
       </form>
     </div>
   </div>
 </div>
</main>
</div>
</div>
<table id="customers">
  <tr>
    <th>Address</th>
    <th>Owner Name</th>
    <th>Mobile Number</th>
    <th>Email Address</th>
    <th>Amount</th>
    <th>Available Room</th>
    <th>Room size</th>
    <th>Description</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  <?php 
  require_once('../dbconnection.php');
  $sqlselect = "select * from house";
  $select=mysqli_query($conn, $sqlselect);
  if($select!=""):
    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);
    while ($row = mysqli_fetch_assoc($select)):
      ?>
      <tr>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["owner_name"]; ?></td>
        <td><?php echo $row["number"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["amount"]; ?></td>
        <td><?php echo $row["available_room"]; ?></td>
        <td><?php echo $row["room_size"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td><img src="<?php echo $path."/dataimg/".$row['image']; ?>" width="80" height="80" /></td>
        <td><a href="drawingedit.php?id=<?php echo $row["house_id"]; ?>">Edit</a> | <a href="drawingdelete.php?id=<?php echo $row["house_id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
      </tr>
      <?php 
    endwhile;
  endif;
  ?>
</table>
<?php require '../footer.php'; ?>