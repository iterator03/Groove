
<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
</head>

<p id="songs_tab"></p>

<?php
//$user=$_SESSION["email"];

include("dbconfig.php");

/*$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
$uid=$row["uid"];

//echo $name;
*/
$uid=1;
$sql="SELECT * FROM `liked_artist` WHERE `uid`='$uid' ";

$t=mysqli_query($con,$sql);

echo mysqli_error($con);
while($row=mysqli_fetch_array($t,MYSQLI_ASSOC))
{
	$name=$row["name"];
	echo "<input type='hidden' value=".$name." id='get_ele'/>";
	echo "<p id='songs_tab'></p>";
   echo "<script>
$(document).ready(function() {  var variable=document.getElementById('get_ele').value;
	console.log(variable);
		$.getJSON(\"http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=\"+variable+\"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&format=json&callback=?\", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			  console.log(json);
			    var item_name=json.artist.name;
			    var item_url=json.artist.url;
				str=JSON.stringify(json.artist.image[1]);
				var sln = str.length;
				str=str.slice(10,sln-17);
				
				html += \"<img src=\"+str+\" alt='aa' style='border-radius:20%;width:8%'><a href=\"+item_url+\" style='font-size:20px;margin-left:150px;'>\"+item_name+\"</a><hr>\"; 
			    
$('#songs_tab').append(html); 
			});  
			
			


	
	});

		</script>";
}
		?>