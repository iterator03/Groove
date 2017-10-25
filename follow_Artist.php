<?php
$art_id=$_GET["mbid"];

$art_name=$_GET["art_name"];

include('dbconfig.php');
$user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];
//$uid=1;
$sql="INSERT INTO `liked_artist` (`artist_id`, `name`, `uid`) VALUES ('$art_id', '$art_name', '$uid');";

mysqli_query($con,$sql);

echo mysqli_error($con);


	header("location:artist.php");

?> 