<?php 
require_once('../dbconnection.php');
$id = $_GET['id'];
$sql = "DELETE FROM house WHERE house_id=$id";
$result = mysqli_query($conn, $sql);
if( $result ){
	header("Location: picture.php");
} else {
	echo "<script>alert('failed to delete');</script>";
}
?>