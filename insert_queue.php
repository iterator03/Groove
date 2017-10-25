<?php
$song_name=$_GET["song_name"];
include('config.php');
//get user_id
$user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r,MYSQL_ASSOC);
$uid=$row["uid"];


$sql="INSERT INTO `queue` (`u_id`, `song_name`, `played`) VALUES ('$uid', '$song_name', '0')";
mysqli_query($con,$sql);

?>