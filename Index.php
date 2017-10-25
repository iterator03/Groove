<!DOCTYPE html>
<html> 
    <head>
		<title>Groove</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="Index_style.css">
	    <link rel="stylesheet" href="css/font-awesome.css">
		<script src="js/jquery.validate.js"></script>
	    <script src="js/jquery.js"></script>
		<script src="js/register.js"></script>
		<script src="js/bootstrap.js"></script>
        <script src="js/typed.js"></script>	
		<script src="fb.js"></script>	
		<link href="https://fonts.googleapis.com/css?family=Poppins|Nova+Flat" rel="stylesheet">
	</head>
	<body background= "images/Wall1.jpg">
		<header>
		    <div id="login" class="row">
			<form class="form-inline">
				<!-- Site LOGO -->
			    <div id="name" class="col-md-3"><h3 id="logo" style="font-family: 'Poppins', sans-serif;">Groove</h3></div>
				<!-- Login Form-->
				         <form method="post" action="login.php">
				<div class="col-md-offset-2 col-md-2" style="padding: 10px;"><input id="inp1" name="user" placeholder="Username" type="text"></div>
				<div class=" col-md-2" style="padding: 10px;"><input id="inp2" name="pass" placeholder="Password" type="password"></div>
				<div class="col-md-1" id="lin" style="padding: 10px;"><input type="submit" value="login" id="log" name="submit" style="height:25px"></div></form> 
				
								<div class="col-md-1" style="padding: 10px;" id="fb1"><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button></div>
				<!-- Sign Up Modal Window -->
				<div class="col-md-1" style="padding: 10px;">
					<button onclick="document.getElementById('signmodal').style.display='block'" id="sign">Sign Up</button>
					<div id="signmodal" class="modal">
						<span onclick="document.getElementById('signmodal').style.display='none'" class="close" title="Close Modal">&cross;</span>
						<!-- Sign Up Form -->
						<form class="modal-content animate" action="register.php" method="post" id="signupform">
							<script src="js/validate.js"></script>
							<script src="register.js"></script>
							<div class="container">
								<p><label><b>Name</b></label><br>
								<input type="text" name="name" required></p>
								<p><label><b>Email</b></label><br>
								<input type="text" name="email" required></p>
								<p><label><b>Password</b></label><br>
								<input type="password" name="psw" required></p>
								<p><label><b>Confirm Password</b></label><br>
								<input type="password" name="psw-repeat" required></p>
								<span id="errmsg"></span>
								<br>
								<div class="clearfix row">
									<div class="col-md-4"><button type="button" onclick="document.getElementById('signmodal').style.display='none'" class="cancelbtn">Cancel</button></li></div>
									<div class="col-md-4"><input type="submit" value="Submit" id="but" name="submit"></div>
								</div>
								<!-- Closes the modal if user clicks anywhere outside the window -->
								<script>
									var modal = document.getElementById('signmodal');
									window.onclick = function(event) {
										if (event.target == modal) {
											modal.style.display = "none";
										}
									}
								</script>
							</div>
						</form>
						
					</div>
				</div>
			</form>
			</div>
		</header>
		
		<!-- Typed.js plugin -->
	    <script>
     	    document.addEventListener('DOMContentLoaded', function(){
				Typed.new('.txt', {
					strings: ["In Mood for some Awesome Music..!! <br> You are at the right place.! <br> MNNIT's #1 Music Website!! <br> @ Groove"],
					typeSpeed: 40
				});
			});
		</script>
		<div class="row" id="main">
			<div class="txt col-md-7"></div>
			<!--Guest Login -->
			<div class="col-md-4" id="guest"><h2>Not A Member..!</h2><a href=""><img src="images/guest.jpg" class="thumbnail" alt="Guest"></a></div>
        </div>
		<footer>
			<p>&copy; Groove Music Ltd. 2017</p>
		</footer>
	</body>
</html>