<!DOCTYPE html>
<html> 
    <head>
		<title>Groove</title>
	    <meta charset="utf-8">
		<link rel="stylesheet" href="video_player.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	      <link rel="stylesheet" href="css/font-awesome.min.css">
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.js"></script>	
	</head>
	<body>
        <div id="sidebar">
        	
        	<div class="toggle-btn" onclick="toggle()">
        		<span></span>
        		<span></span>
        		<span></span>
        	</div>
        	<ul> 
        	<div class="panel panel-heading text-center text-danger" >QUEUE</div>
        	<li><i class="fa fa-music">&nbsp;&nbsp;FIRST SONG</i></li>
        	<li><i class="fa fa-music">&nbsp;&nbsp;FIRST SONG</i></li>
        </ul>
       </div>
         <div class="row">
		 <div class="col-md-offset-2 col-md-7">
         <iframe id="player" type="text/html" width="910" height="530"
  src="http://www.youtube.com/embed/M7lc1UVf-VE?rel=0&amp;fs=0&amp;showinfo=0&enablejsapi=1&origin=http://example.com"
  frameborder="0"></iframe></div></div>
		<div class="col-sm-8 col-md-8 col-md-offset-2">
  <div class="player">
   
    	
    		
           
      
      	<ul class="song">
		
      		<li><i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;<a href="artist.php">ARTIST&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li> <!--directs to artist page-->
      		<li><i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;<a href="album.php">ALBUM &nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li><!--directs to album page-->

      		<li><i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;<a target="blank" href="http://azlyrics.com">GET LYRICS&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li><!--directs to get lyrics-->
           
      		
      	</ul>
     
          
    


    <div class="player-body">
     
      <div class="album-info">
        <span class="album-title">
            Album name
          </span>
        <span class="song-title">
            song name
          </span>
        <span class="player-controls" id="control">
            <a href="main.php"><i class="fa fa-home"></i></a>
            <i class="fa fa-heart animated-hover"></i>  <!-- loved song-->
            <i class="fa fa-plus"></i>    <!-- add to playlist-->
            <i class="fa fa-share-alt"></i>
          </span>
      </div>
    </div>
   
  </div>
</div>
</div>
<!-- video link -->
<script>
function toggle()
{
	document.getElementById("sidebar").addClass('active');
}

</script


	</body>
</head>
</html>