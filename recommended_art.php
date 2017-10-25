
<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	

	<script>
		function fn(){
			var x=document.getElementById("ser").value;
			console.log(x);
			window.open("search.php?y="+x+"","_self");
		}
	</script>
	
</head>
<?php include('header.php');?>


		<div class="row" id="top_art"> 
			<?php include('rec_artist.php'); ?>
		</div>
		<hr>
<?php
include("dbconfig.php");
/*$user=$_SESSION["email"];



$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
$uid=$row["uid"];
*/
//echo $name;

$uid=1;
?>
<h2>Recommended Songs</h2>

<?php
//Recommended Songs
$sql="SELECT Count(*) FROM `liked_song`";
$res=mysqli_query($con,$sql);
$r=mysqli_num_rows($res);
if($r>4)
{
	$r=4;
}
$sql="SELECT * FROM `liked_song` WHERE `uid`='$uid' LIMIT $r ";

$t=mysqli_query($con,$sql);

echo mysqli_error($con);
while($row=mysqli_fetch_array($t,MYSQLI_ASSOC))
{
	
	$song_name=$row["name"];
	$art_name=$row["art_name"];
	echo "<input type='hidden' value=".$song_name." id='get_ele'/>";
	echo "<input type='hidden' value=".$art_name." id='get_el'/>";
	echo "<p id='songs_tab'></p>";

   echo "<script>
$(document).ready(function() {  var variable=document.getElementById('get_ele').value;
	
	var va=document.getElementById('get_el').value;
	console.log(variable);
		$.getJSON(\"http://ws.audioscrobbler.com/2.0/?method=track.getsimilar&artist=\"+va+\"&track=\"+variable+\"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=4&format=json&callback=?\", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			 $.each(json.similartracks.track, function(i, item) {  
			  
				str=JSON.stringify(item.image[2]);
				var sln = str.length;
				str=str.slice(10,sln-17);
				
				html += \"<img src=\"+str+\" alt='aa' style='border-radius:20%;width:8%;padding:10px'><a href=\"+item.url+\" style='font-size:20px;margin-left:150px;'>\"+item.name+\"</a><hr>\"; 
			    $('#songs_tab').append(html);

			});  
	
	});
});

		</script>";
}


?>

<?php include('footer.php');?>