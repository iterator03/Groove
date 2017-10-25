<?php
$song_id=$_GET['song_id'];
$song_name=$_GET['song_name'];

include('dbconfig.php');

 //get uid
 
 $user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];

//get count of entries in played table
$u="SELECT COUNT(*) FROM played";
$r=mysqli_query($con,$u);

if($r>=100)
{
	//delete first song and add this
	$sql="DELETE FROM `played' LIMIT=1";
	$r=mysqli_query($con,$sql);
}

$sql="INSERT INTO `played` (`uid`, `song_id`, `song_name`) VALUES ('$uid', '$song_id', '$song_name')";
$r=mysqli_query($con,$sql);

$sql="INSERT INTO `queue` (`u_id`, `song_name`, `played`) VALUES ('$uid', '$song_name', '1')";
mysqli_query($con,$sql);
// insert redirect page url

header('location:');

?>