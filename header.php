<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_header.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
	
	
</head>
<body>
	<div id="top">
		<nav>
		    <img src="images/logo.png" alt="GROOVE" id="logo">
			<ul>
				<li><a href="main.php">Home</a></li>
				<li><a href="recommended_art.php">Recommended</a></li>
				<li><a href="all_album.php">Albums</a></li>
				<li><a href="all_artist.php">Artists</a></li>
				<li><a href="user_dashboard.php">My Music</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<div class="row" id="search_row"> 
			<div class="col-md-6 col-md-offset-2">
			
				<input type="text" placeholder="Search your favourite track " id="ser">
			</div >
			<div class="col-md-2">
				<button class="btn" id="sub" onclick="fn()">Search</button>
			</div>
		</div>
		<br>
	</div>
</body>
</html>