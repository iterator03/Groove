<h2>Recommended artists</h2>
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
?>
<?php

$sql="SELECT Count(*) FROM `liked_album`";
$res=mysqli_query($con,$sql);
$r=mysqli_num_rows($res);
if($r>4)
{
	$r=4;
}

$sql="SELECT * FROM `liked_album` WHERE `uid`='$uid' LIMIT $r ";

$t=mysqli_query($con,$sql);

echo mysqli_error($con);
while($row=mysqli_fetch_array($t,MYSQLI_ASSOC))
{
	
	$art_name=$row["art_name"];
	//echo $art_name;
	echo "<input type='hidden' value=".$art_name." id='get_ele'/>";
	

   echo "<script>
$(document).ready(function() {  var variable=document.getElementById('get_ele').value;
	
	console.log(variable);
		$.getJSON(\"http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=\"+variable+\"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=4&format=json&callback=?\", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			 $.each(json.similarartists.artist, function(i, item) {  
			  
				str=JSON.stringify(item.image[2]);
				var sln = str.length;
				str=str.slice(10,sln-17);
				
				html += \"<img src=\"+str+\" alt='aa' style='border-radius:20%;width:8%;padding:10px'><a href=\"+item.url+\" style='font-size:20px;margin-left:150px;'>\"+item.name+\"</a><hr>\"; 
			    $('#top_art').append(html);

			});  
	
	});
});

		</script>";
}
		?>