<?php

//when song stops playing then get a signal and make played=1;
//after this if user not select a song to be played then play one song from queue whose played=0; if played=0;song not found then play played=1 song

//status = 1 when user intervention is not there
$sig=$_GET['status'];
include('config.php');
if($sig==1)
{
	// get uid
	$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r);
$uid=$row["uid"];

//get songs from queue whose played=0
$u="SELECT * FROM queue WHERE `played`='0' ";
$r=mysqli_query($con,$u);
if(mysqli_num_rows($r)==0)
{
$row=mysqli_fetch_array($r);
$song_name=$row["song_name"];
//add code to play this song
}
else
{
	$u="SELECT * FROM queue WHERE `played`='1' ";
	$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r);
$song_name=$row["song_name"];
	//add code to play this song
}
}
?>