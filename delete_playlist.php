 <?php

$pid=$_GET['playlist_id'];
$s=$_GET['playlist_song'];
echo $s;
include('dbconfig.php');

 $sql="DELETE FROM playlist_song WHERE pid='$pid' AND song_name='$s' ";

$r=mysqli_query($con,$sql);

header('location:playlist.php');


?>