<?php


 // delete every entry from queue
 
 //get uid
 include('dbconfig.php');

 $sql="DELETE FROM playlist_song WHERE pid='$pid' AND song_name='$s' ";

$r=mysqli_query($con,$sql);

 include('dbconfig.php');

 $sql="DELETE FROM queue WHERE u_id='$uid' ";

$r=mysqli_query($con,$sql);

session_unset();
session_destroy();
echo "THANKS FOR USING OUR SERVICES :-)";
header('location:index.php');
?>