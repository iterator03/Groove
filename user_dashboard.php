
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_main.css">
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
	<style>
	#sub{
		height:400px;
		width:350px;
		color:cyan;
		background: none;
	border:2px 2px 2px black;
		margin:20px;
		padding:5px;
	
	}
	#ul_container{
		    height: 300px;
    width: 260px;
   background-color: #3a1919;
    margin: auto auto;
    margin-top: 44px;
    box-shadow: 9px 7px 4px #2b0303;
    padding: 10px;
	padding-right:-10px;
    border-radius: 6px;
	}
	#ul_1{
			padding-left:0;
	}
	#ul_1 li{
		margin:0 auto;
		margin-top:18px;
	
	}
	li.gap{
	    height: 45px;

    text-align: center;
    padding: 10px;
	padding-left:0px;
   <!-- background-color: #420303;-->
   background-color:green;
    text-shadow: 1px 1.5px 12px ghostwhite;
    margin: 37px;
    
    color: #e1e6df;
    font-size: large;
    font-family: cursive;

	}
	#frame_container{
		    width: auto;
    height: 345px;
    background-color: whitesmoke;
    padding: 10px;
   
    margin: 0 auto;
    margin-top: 48px;
    border-top: 8px solid darkgrey;
   
    border-radius: 8px;
	}
	a
	{
		color:white;
	}
	a:active{
		color:white;
	}
	a:visited{color:white;}
    
#ifr
{
	height:100%;
	width: 100%;
	padding: 5px;
	border:none;

}
	</style>
</head>
<body>
	<div id="main">
		<?php include('header.php');?>
		
		<br>
<div class="row">
<div class="col-sm-4 col-md-2">
	<div id="sub">
	    <div id="ul_container">
		<ul type="none" id="ul_1">
		<li class="gap"><a href="liked_songs.php" target="frame">Liked Songs</a></li>
		<li class="gap"><a href="liked_albums.php" target="frame">Liked Albums</a></li>
		<li class="gap"><a href="try1.php" target="frame">Liked Artists</a></li>
		<li class="gap"><a href="playlist.php" target="frame">Playlists</a></li>
		</ul>
		</div>
	
	</div>	
</div>
<div class="col-sm-1"></div>
<div class="col-sm-12 col-md-8">
	<div id="frame_container">
	<iframe src="" name="frame" id="ifr"></iframe>
	
    </div>
		
</div>
	</div>
	<?php include('footer.php');
	?>
	
</div>
</body>
</html>