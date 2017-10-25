
<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
</head>

<style>
ul li{
	color:black;
	font-family: monospace;
	letter-spacing: 1.2px;
text-shadow: 1px 1.2px 1px;
}
ul#adjust li
{
	
}
</style>
<?php
$user=$_SESSION["email"];

include("dbconfig.php");

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
$uid=$row["uid"];

//echo $name;

$uid=1;
$sql="SELECT * FROM `liked_song` WHERE `uid`='$uid' ";

$t=mysqli_query($con,$sql);

echo mysqli_error($con);
?>
<ul type="none" id="adjust">
	<?php
while($row=mysqli_fetch_array($t,MYSQLI_ASSOC))
{  
    echo "<li><img src='images/music.jpg' style='height:100px;padding:10px;padding-left:20px'><a href=' '>"
    .$row["name"]."</a></li>";
  echo "<br/>";
}
?>
</ul>