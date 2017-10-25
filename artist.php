<?php 
	  $artist=$_GET["artist"];
	  $url=$_GET["im"];
	  
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artist</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_artist.css">
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
			<div class="jumbotron row">
					<div class="col-md-4">
						<img src="<?php echo $url;?>" alt="image">
					</div>
					<div class="col-md-4">
						<h2 id="name"><?php echo $artist;?></h2>
						<h3 id="artist_cat"><?php echo $artist;?> </h3>
						
					</div>
			</div>
			<script src="artist.js"></script>
			<div class="tab">
				<button class="tablinks" onclick="document.getElementById('artist_cat').innerHTML='<?php echo $artist;?> Songs';opentab(event, 'Songs')" id="defaultOpen">Top Songs</button>
				<button class="tablinks" onclick="document.getElementById('artist_cat').innerHTML='<?php echo $artist;?> Albums';opentab(event, 'Albums')">Top Albums</button>
			</div>
			<div id="Songs" class="tabcontent">
			    <p id="songs_tab"></p>
			</div>

			<div id="Albums" class="tabcontent">
			    <p id="album_tab"></p> 
			</div>
		</div>
	</div>
    <script>  
	// Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
	$(document).ready(function() {  
	    var ar="<?php echo $artist;?>";
		var imm="<?php echo $url;?>";
		$.getJSON("http://ws.audioscrobbler.com/2.0/?method=artist.getTopTracks&artist="+ar+"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=100&format=json&callback=?", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			  
			$.each(json.toptracks.track, function(i, item) {  
				//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
				str=JSON.stringify(item.image[2])
				var sln = str.length;
				str=str.slice(10,sln-17);
				
				html += "<img src='images/music.jpg' alt='aa' style='border-radius:20%;width:8%'><a href='practice.php?mbid="+item.mbid+"&song="+item.name+"' style='font-size:20px;margin-left:150px;'>"+item.name+"</a><a href='follow_Song.php?mbid="+item.mbid+"&name="+item.name+"&artist="+ar+"&url="+imm+"' style='float:right'>Like this Song</a><hr>"; 
			      html+="";

			});  
			
			$('#songs_tab').append(html); 


	




		}); 
        $.getJSON("http://ws.audioscrobbler.com/2.0/?method=artist.getTopAlbums&artist="+ar+"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=100&format=json&callback=?", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			  
			$.each(json.topalbums.album, function(i, item) {  
				//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
				str=JSON.stringify(item.image[2])
				var sln = str.length;
				str=str.slice(10,sln-17);
			
				html += "<img src='images/music.jpg' alt='aa' style='border-radius:20%;width:8%'><a href='album.php?album="+item.name+"&artist="+ar+"&url="+imm+"' style='font-size:20px;margin-left:150px;'>"+item.name+"</a><a href='follow_album.php?mbid="+item.mbid+"&alb_name="+item.name+"&art_name="+ar+"&url="+imm+"' style='float:right'>Like this Album</a><hr><hr>"; 
			});  
			
			$('#album_tab').append(html);  
		}); 		
		
	}); 
</script> 
<?php include 'footer.php' ?>
</body>
</html>