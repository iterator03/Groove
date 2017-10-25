<!DOCTYPE html>
<html> 
    <head>
		<title>Groove</title>
	    <meta charset="utf-8">
		<link rel="stylesheet" href="Index_style.css">
	    <link rel="stylesheet" href="Groove/css/font-awesome.css">
	   
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.js"></script>	
	    <style>
	    input
{
	height: 20px;
	border-radius: 5px;
	box-shadow: 2px 2px 1px;
	margin-bottom: -4px;
}
#inp1,#inp2{
	height: 20px;
	border-radius: 5px;
	box-shadow: 2px 2px 1px;	height: 20px;
	border-radius: 5px;
	box-shadow: 2px 2px 1px;
}

#foot{
    border-top: 2px solid #231919;
    /* margin: 0px 50px 20px 50px; */
    padding-top: -20px;
    height: 50px;
    text-align: center;
    color: whitesmoke;
    font-size: 15px;
    font-family: sans-serif;
    box-shadow: 2px 2px 5px grey;
    border-radius: 4px;
  
}
#cancel{
	background:white;
}
.clearfix {
    width: 500px;
    margin: 0;
    -webkit-margin-top-collapse: discard;}
    p{
    	font-family: monospace;
    	font-size: 15px;
    }
    span #errmsg
    {
    	color:red;
    	font-family: sans-serif;
    }
    #sign
    {
    	margin-left:40%;
    	margin-top:30px;
    	float:left;
    }
	    </style>
	</head>
	<body background= "images/Wall1.jpg">
		<header>
		    <div id="name">Groove.♫♬♭♪♩</div>



			<div id="login">
         <form method="post" action="login.php">
		 <script src="js/jquery.validate.js"></script>
			        	<script src="login.js"></script>
				<input id="inp1" name="user" placeholder="Username" type="text">
				<input id="inp2" name="pass" placeholder="Password" type="password">
				<input type="submit" value="login" id="log" name="submit" style="height:25px"></form> 
			</div>
				<button onclick="document.getElementById('signmodal').style.display='block'" id="sign">Sign Up</button>
				

				<div id="signmodal" class="modal">
			        <span onclick="document.getElementById('signmodal').style.display='none'" class="close" title="Close Modal">&cross;</span>
			        <form class="modal-content animate" action="register.php" method="post" id="signupform">
			        	  <script src="js/jquery.validate.js"></script>
			        	<script src="register.js"></script>

                     
				        <div class="container" id="set_it">

					        <p><label><b>Name</b></label><br>
					        <input type="text" name="name" required></p>
							<p><label><b>Email</b></label><br>
					        <input type="text" name="email" required></p>
					        <p><label><b>Password</b></label><br>
					        <input type="password" name="psw" required></p>
					        <p><label><b>Confirm Password</b></label><br>
					        <input type="password" name="psw-repeat" required></p>
					        </tr>
                  <span id="errmsg" style="color:red;font-family: sans-serif;"></span>
					        <div class="clearfix">
							  <ul id="ok">
						        <li><button id="cancel" type="button" onclick="document.getElementById('signmodal').style.display='none'" class="cancelbtn btn-info" style="background:lightgrey;height:24px;color:black;box-shadow:1px 1px black">Cancel</button></li>
						        <li><input type="submit" value="submit" id="but" name="submit" class="btn btn-danger"/></li>
					          </ul>
							  <ul style="clear:both;"></ul>
							</div>
				        </div>
			        </form>
			       
		        </div>


				<script>
                    var modal = document.getElementById('signmodal');
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
                 
			</div>
			<!-- for guest -->
			<button id="guest">Continue as Guest</button>
   

		</header>
	    <div id="main">
		    <div class="panel"></div>
		    <!-- <iframe src="" width="480" height="201" frameBorder="0" class="giphy-embed" allowFullScreen></iframe> -->
		</div>
		<footer><div id="foot" class="panel">
			<p style="margin-top:0px;">&copy; Groove Music Ltd. 2017</p></div>
		</footer>
	</body>
</html>