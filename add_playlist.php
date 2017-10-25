<?php
$playlist=$_GET['playlist'];
$song_id=$_GET['song_id'];

include('dbconfig.php');

 //get uid
 
 $user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];

// if playlist of the user already included add to that playlist otherwise create a new one

$sql="SELECT * FROM playlist_user WHERE playlist_name='$playlist' AND uid='$uid' ";
$r=mysqli_query($con,$sql);

if(mysqli_num_rows($con)>0)
{
	//get pid
	$sql="SELECT * FROM playlist_user WHERE playlist_name='$playlist' AND uid='$uid' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
  $pid=$row["p_id"];
	$sql="INSERT INTO playlist_song(`pid`,`song_id`) VALUES('$pid','$song_id') ";
$r=mysqli_query($con,$sql);
}

else
{
	$sql="INSERT INTO playlist_user(`playlist_name`,`uid`) VALUES('$playlist','$uid') ";
$r=mysqli_query($con,$sql);

$sql="SELECT * FROM playlist_user WHERE playlist_name='$playlist' AND uid='$uid' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
  $pid=$row["p_id"];
	$sql="INSERT INTO playlist_song(`pid`,`song_id`) VALUES('$pid','$song_id') ";
$r=mysqli_query($con,$sql);


}
?>