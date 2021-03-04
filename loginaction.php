<?php
require_once 'dbconnection.php';
if(!session_start())
{
	session_start();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$query="select * from user where email='$email' and password='$password'";
//echo $query;
$result = mysqli_query($conn, $query);
//$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if($row)
{
	$_SESSION['level']=$row['level'];
	$_SESSION['uid'] = $row['user_id']; 
	if($row['level']==1)
	{
		header("location:user/index.php");
	}
	elseif($row['level']==2)
	{
		header("location:admin/index.php");
	}
	else
	{
		header("location: index.php");

	}
}
?>