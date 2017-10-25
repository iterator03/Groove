 <?php

//get uid
$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r);
$uid=$row["uid"];

$s=$_GET['song_name'];
echo $s;
include('dbconfig.php');

 $sql="DELETE FROM queue WHERE u_id='$uid' AND song_name='$s' ";

$r=mysqli_query($con,$sql);

//header('location:.php');


?>