<?php $album=$_GET["album"];
	  $artist=$_GET["artist"];
	  
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Album</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_album.css">
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
<body>
	<div id="main">
		<?php include 'header.php';?>
	    <div class="container" id="cont">
			<div class="jumbotron"> 
				<div id="jumbo" class="row">
				</div>
			</div>
			<div id="track_block">
				<h3>Tracks:</h3><br>
				<div id="tracks" ></div>
			</div>
		</div>
		
	</div>
    <script>
		$(document).ready(function() {  
		
		    var al="<?php echo $album;?>";
	        var ar="<?php echo $artist;?>";
			$.getJSON("	", function(json) {  
				var html = '';
				var	str='';	
				var sln = 0;
				var j='';
				//html +=json;
				str=JSON.stringify(json.album.image[2])
				var sln = str.length;
				str=str.slice(10,sln-17); 
				j+="<div class='col-md-3'><img src="+str+" ></div><div class='col-md-7'><p style='font-size:30px;margin-left:40px'>Album:"+al+"</p><p style='font-size:30px;margin-left:40px'>Artist:"+ar+"</p></div>";
				$('#jumbo').append(j);
				$.each(json.album.tracks.track, function(i, item) {  
					//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
					
					html += "<a href='practice.php?song="+item.name+"&mbid="+item.mbid+"'>"+item.name+"</a><b></b><hr>"; 

					//html+="<a href='follow_Song.php?mbid="+item.mbid+"&name="+item.name+"'>Liked</a>";
				});  
				
				$('#tracks').append(html);  
			});  
		});
	</script>
	<?php include 'footer.php' ?>
</body>
</html>