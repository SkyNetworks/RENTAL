<?php
require 'dbconnection.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if($_POST['form_name']=='user')
  {


    extract($_POST);
    $sql = "INSERT INTO `user`(`fullname`, `email`, `password`,`level`) VALUES ('$fullname','$email','$password',1)";
    $result = mysqli_query($conn, $sql);
    if($result) 
    {
     echo 'success';
   }
   else
   {
    echo 'failed';
  }
}
}
?>