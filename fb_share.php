<html>
<head>
<title>
Share on Facebook
</title>
<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.5.1.js">
</script>
<script src="https://connect.facebook.net/en_US/all.js">
</script>
<script type="text/javascript">
 $(document).ready(function () {
 $('#shareonfacebook').click(function (e) {
 alert('hello9');
 e.preventDefault();
 FB.ui(
 {
 method: 'feed',
 name: 'DebugmodeEventPlans',
 link: 'www.google.com',
 caption: 'This is just a test share! Kindly Ignore',
 description: 'Music Streaming Website?',
 message: ''
 });
 });
 });
</script>
</head>
<body>
<button id="shareonfacebook" >ShareOnFaceBook</button>
 
<script>
FB.init({
appId : '270535600061970'
});
</script>
</body>
</html>