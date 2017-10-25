
<?php

session_start();

include ("dbconfig.php") ;
//include ("function.php") ;
if(isset($_POST["submit"]))
{
 /* $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $pass = test_input($_POST["psw"]);
  $cpass = test_input($_POST["psw-repeat"]);*/
  
    $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["psw"];
  $cpass = $_POST["psw-repeat"];
  	
    if($name==""||$email==""||$pass=""||$cpass=="")
    {
      echo "Fill all fields";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo "Only letters and white space allowed"; 
}

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format"; 
    }
  
  $q= "INSERT INTO `user_details` (`name`, `email`, `password`) VALUES ('$name' , '$email' ,MD5('$pass') )";
  
  $r = mysqli_query($con,$q);
   if(mysqli_affected_rows($con))
  {  
     session_start();	
		$_SESSION['email']=$email;
		header("location:main.php");	
	 
  }
  else
  {
       echo '<script language="javascript">';
echo 'alert("Sorry for inconvenience!!You are not registered")';
echo '</script>';
  }
}
?>