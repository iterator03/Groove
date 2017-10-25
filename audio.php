<?php $v=$_GET['y'];
$vid="http://www.youtube.com/embed/".$v."?rel=0&amp;fs=0&amp;showinfo=0&enablejsapi=1&origin=http://example.com"
 ?>
<!DOCTYPE html>
<html> 
    <head>
		<title>Groove</title>
	    <meta charset="utf-8">
		<link rel="stylesheet" href="audio_player.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	      <link rel="stylesheet" href="css/font-awesome.min.css">
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.js"></script>	
		<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.5.1.js">
		</script>
		<script src="https://connect.facebook.net/en_US/all.js">
		</script>
		<script type="text/javascript">
			 $(document).ready(function () {
				 $('#shareonfacebook').click(function (e) {
				 
				 e.preventDefault();
					 FB.ui(
					 {
						 method: 'feed',
						 name: 'DebugmodeEventPlans',
						 link: '<?php echo $vid; ?>',
						 caption: 'This is just for testing Purpose! Kindly Ignore',
						 description: 'Music Streaming Website!',
						 message: ''
					 });
				 });
			 });
		</script>
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
     

		<div class="col-sm-8 col-md-8 col-md-offset-2">
  <div class="player">
    <div class="player-head">
    	<div class="row">
    		<div class="col-sm-6 col-md-4 col-md-offset-2">
      <img src="images/mic.jpg" alt="cover" class="song-cover">
           </div>

           <div class="col-sm-6 col-md-4 col-md-offset-2">
      <div class="song_info">
      	<ul class="song">
      		<li><i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;<a href="artist.php">ARTIST&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li> <!--directs to artist page-->
      		<li><i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;<a href="album.php">ALBUM &nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li><!--directs to album page-->

      		<li><i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;<a target="_blank" href="http://azlyrics.com">GET LYRICS&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li><!--directs to get lyrics-->
           <li><i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;<a href="video.php">WATCH VIDEO&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></li>
      		
      	</ul>
      </div>
           </div>
    </div>
</div>

    <div class="player-body">
     
      <div class="album-info">
        <span class="album-title">
            Album name
          </span>
        <span class="song-title">
            song name
          </span>
        <span class="player-controls">
            <a href="main.php"><i class="fa fa-home"></i></a>
            <i class="fa fa-heart animated-hover"></i>  <!-- loved song-->
            <i class="fa fa-plus"></i>    <!-- add to playlist-->
			<button id="shareonfacebook" >ShareOnFaceBook</button>
 
			<script>
			FB.init({
			appId : '270535600061970'
			});
			</script>
          </span>
      </div>
    </div>
    <iframe id="player" type="text/html" width="840" height="30"
  src="<?php echo $vid ?>"
  frameborder="0"></iframe>
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