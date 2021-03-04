<?php 
if(!session_start())
{
	session_start()	;
}
else
{
	if($_SESSION['level'] == 2)
	{

		require '../header.php';
		require 'navigation.php'; 
		require '../footer.php';

	}
	else 
	{
		header('Location: ../index.php');
	}
	
}
?>