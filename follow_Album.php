  
<?php
$url=$_GET['url'];
$alb_id=$_GET["mbid"];
$alb_name=$_GET["alb_name"];
$art_name=$_GET["art_name"];

include('dbconfig.php');
include('dbconfig.php');



$uid=1;

$sql="INSERT INTO `liked_album` (`album_id`, `alb_name`, `art_name`, `uid`) VALUES ('$alb_id', '$alb_name', '$art_name', '$uid');";

mysqli_query($con,$sql);

echo mysqli_error($con);


	header("location:artist.php?im=".$url."&artist=".$art_name);

?> 