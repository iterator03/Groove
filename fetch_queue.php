<?php
include('config.php');

//get uid
$user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];

$sql="SELECT * FROM `queue` WHERE `u_id`='$uid'";
$r=mysqli_query($con,$u);
while($row=mysqli_fetch_assoc($r))
{
	
}


?>