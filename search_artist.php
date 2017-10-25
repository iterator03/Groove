<?php $name=$_GET["y"]; ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style_search.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script> 
	<script src="search_result.js"></script> 
	<link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
	<script>
		function fn(){
			var x=document.getElementById("ser").value;
			console.log(x);
			window.open("search_artist.php?y="+x+"","_self");
		
		}
		$(document).ready(function() {
		document.getElementById("ser").setAttribute("placeholder","Search your favourite artist");});
	</script>
</head>
<body>
	<?php include 'header.php';?>
	<div id="cont" class="container">
	    <h3 id="head_text">Search Results:</h3>
		<p id="display"></p>
	</div>
	<script> 
		$(document).ready(function() { 
			var x="<?php echo $name; ?>"; 
			var y="http://ws.audioscrobbler.com/2.0/?method=artist.search&artist="+x+"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=10&format=json&callback=?";
			console.log(y);
			
			$.getJSON(y, function(json) {  
			 //console.log(json.results[opensearch:totalResults]);
				var html = '';
				var	str='';	
				var sln = 0;
				var str2='';
				//html +=json;
				  
				$.each(json.results.artistmatches.artist, function(i, item) {  
					//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
					str=JSON.stringify(item.image[1]);
					str2=JSON.stringify(item.image[2]);
					var sln = str.length;
					str=str.slice(10,sln-18);
					var sln = str2.length;
					str2=str2.slice(10,sln-17);
					html += "<img src="+str +"><a href='artist.php?artist="+item.name+"&im="+str2+"' style='color:#fff;margin-left:20px;'>"+item.name+"</a></a><hr>"; 
				});  
				
				$('#display').append(html);  
			});  
		}); 	
	</script>
	
</body>
</html>