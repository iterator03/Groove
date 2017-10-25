<?php
include('dbconfig.php');
include('function.php');
$email=test_input($_GET["email"]);


 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errmsg = "Invalid email format"; 
    }
    $q= "INSERT INTO `user_details` (`name`, `email`, `password`) VALUES ('fbuser' , '$email' ,'fb' )";
  
  $r = mysqli_query($con,$q);
   if(mysqli_affected_rows($con))
  {  
     session_start(); 
    $_SESSION['email']=$email;
    //header("location:main.php");  
   
  }


?>