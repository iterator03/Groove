
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style_all_album.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script> 
	<script src="search_result.js"></script> 
	<script src="all_album_fetch.js"></script> 
	<link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
	<script>
		function fn(){
			var x=document.getElementById("ser").value;
			console.log(x);
			window.open("search_album.php?y="+x+"","_self");
		}
		$(document).ready(function() {
		document.getElementById("ser").setAttribute("placeholder","Search your favourite album");});
	</script>
</head>
<body>
	<?php include 'header.php';?>
	<div id="cont" class="container-fluid">
	    <h3 id="head_text">All Albums:</h3>
		<div id="all_alb" ></div>
	</div>

	
</body>
</html>