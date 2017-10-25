<?php

include ("dbconfig.php") ;
//include ("function.php");
if(isset($_POST["submit"]))
{

 /* $email = test_input($_POST["user"]);
  $pass = test_input($_POST["pass"]);
  */
  $email = $_POST["user"];
  $pass = $_POST["pass"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errmsg = "Invalid email format"; 
    }
  
  $q= "SELECT * FROM user_details WHERE email='$email' ";
  
  
  $r = mysqli_query($con,$q);
  echo mysqli_error($con);
  $row=mysqli_fetch_array($r,MYSQL_ASSOC);
  
 // echo $pass;
  if(MD5($pass)==$row["password"])
 {  
     session_start(); 
    $_SESSION['email']=$email;
    header("location:main.php");  
   
  }
 else
  {
   echo '<script language="javascript">';
echo 'alert("Password dont match")';
echo '</script>';

 
  }
 // header("location:index.php"); 
}
?>