<?php if(!session_start()){
  session_start() ;
}else {
  if($_SESSION['level'] == 2){
    ?>
<?php
require_once('../dbconnection.php');
if($_POST){
 $address = $_POST['address'];
  $name = $_POST['owner_name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $amount = $_POST['amount'];
  $available_room = $_POST['available_room'];
  $room_size = $_POST['room_size'];
  $description = $_POST['description'];
  $sqlupdate = "UPDATE `house` SET 
  `address`='$address',
  `owner_name`='$name',
  `number`='$number',
  `email`='$email',
  `amount`='$amount',
  `available_room`='$available_room',
  `room_size`='$room_size',
  `description`='$description'
  WHERE house_id='".$_POST['id']."'";
  var_dump($sqlupdate);
  $result = mysqli_query($conn, $sqlupdate);

  if($result){
   header("location: picture.php");
 } else {
  echo '<script>alert("failed");</script>';
}
}
?>
<?php } else {
  header('Location: ../index.php');
}

} ?>