

  
<?php
$song_id=$_GET["mbid"];
$name=$_GET["name"];
$url=$_GET["url"];
$ar=$_GET["artist"];

include('dbconfig.php');
/*$user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];*/
$uid=1;
$sql="INSERT INTO `liked_song` (`song_id`,`name`,`art_name`,`uid`) VALUES ('$song_id', '$name','$ar','$uid')";

mysqli_query($con,$sql);

echo mysqli_error($con);


	header("location:artist.php?artist=".$ar."&im=".$url);

?> 