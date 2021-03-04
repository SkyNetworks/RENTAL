<?php 
require_once('../dbconnection.php');
if( isset( $_POST['submit'] ) ){

	$address = $_POST['address'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$amount = $_POST['amount'];
	$available_room = $_POST['available_room'];
	$room_size = $_POST['room_size'];
	$description = $_POST['description'];
	$image = $_FILES['aimage']['name'];
	$tempname = $_FILES['aimage']['tmp_name'];
	move_uploaded_file($tempname,"dataimg/$image");
	$sql = "INSERT INTO house (`address`, `owner_name`, `number`, `email`, `amount`, `available_room`, `room_size`, `description`, `image`) VALUES ('$address ','$name','$number','$email','$amount','$available_room','$room_size','$description','$image')";
	$result = mysqli_query($conn, $sql);
	 if($result){
		?>
	 	<script>
			alert ('success');
	 	</script>
		<?php 
	 	header("location:picture.php");
	 }else{
		header("location:index.php?error");
	 }
} 

?>