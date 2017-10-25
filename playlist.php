	<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_main.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
	
	</head>
	<style>
	.btn{
		width:150px;
		margin-top:10px;
	}
	#just
	{
		float: left;
	}
	#img{
		padding: 4px;
		margin-left: -20px;
	}
	#just{
		height: 50px;
		width:100%;
	}
#lis li{
	width:auto;
}
ul.addon li{
	color:blue;
}
iframe{
	-moz-border-radius: 12px;
  -webkit-border-radius: 12px;
  border-radius: 12px;

  -moz-box-shadow: 4px 4px 14px #000;
  -webkit-box-shadow: 4px 4px 14px #000;
  box-shadow: 4px 4px 14px #000;

  -moz-transform:rotate(20deg);
  -webkit-transform:rotate(20deg);
  -o-transform:rotate(20deg);
  -ms-transform:rotate(20deg);
  filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.2);

}

.head{
	color:black;
	font-family: sans-serif;
	text-shadow: 1px 1.2px 2px grey;
}
	</style>
	<body>
		<div id="just"></div>
	<div class="row">
	<div class="col-sm-8 col-md-4 col-md-offset-2">

		<!--fetch playlist-->
<?php
// get uid
include('dbconfig.php');
/*$user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];
*/
$uid=1;


//get all playlists of user and display it
 $sql="SELECT * FROM playlist_user WHERE uid='$uid' ";
$r=mysqli_query($con,$sql);
?>
<ul class="list-type addon">

<?php 
while($row=mysqli_fetch_assoc($r))
{
	echo "<li class='list-group-item head' style:'color:black;'><i class='fa fa-caret-down'></i>&nbsp;&nbsp;".$row["playlist_name"]."&nbsp;<i class='fa fa-caret'></i>";
	echo "<ul>";
	$pid=$row["p_id"];
	$n=$row["playlist_name"];
	 $sl="SELECT * FROM playlist_song WHERE `pid`='$uid' ";
$rr=mysqli_query($con,$sl);
    while($row1=mysqli_fetch_assoc($rr))
    {
    	echo "<li style='float:left;list-style:none;'><i class='fa fa-music'></i>&nbsp;&nbsp;".$row1["song_name"]."</li>";
    	echo "<li style='float:right;list-style:none'><a href='delete_playlist.php?playlist_id=".$pid."&playlist_song=".$row1["song_name"]."'><i class='fa fa-minus-circle'></i></li><br/>";

    }
echo "</ul>";
    echo "</li>";
}
?>

</ul>
	</div>
	

			<div class="col-sm-2 col-md-3"><img src="images/playlist.jpg" id="img"/>
			
		</div>

	</body>
	</html>