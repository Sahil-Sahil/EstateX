<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="7;url=index.php" />
<title>Thanks for your feedback</title>
	<link rel="stylesheet" href="afterFeedback.css">
</head>
<body>

<div id="navbar">
                <a href="index.php">HOME</a>
					<a href="Explore.php">EXPLORE</a>
                    <a href="aboutUs.php">ABOUT US</a>
                    <a href="feedback_form.php">FEEDBACK</a>
					<a href="Login.php">LOGIN</a>
				</div>

<div class="feedback">
					<h1 style="font-size:50px">Thank You</h1>
					<h1>For Your Valuable Feedback</h3>
				
					
					<h3>Redirecting to homepage in <span id="countdowntimer">7 </span> seconds</h3>

					<script type="text/javascript">
						var timeleft = 7;
						var downloadTimer = setInterval(function(){
						timeleft--;
						document.getElementById("countdowntimer").textContent = timeleft;
						if(timeleft <= 0)
							clearInterval(downloadTimer);
						},1000);
					</script>
				
			  </div>


<div class="slideshow">
  <div class="slideshow-image" style="background-image: url(afterFeedback_pic1.jpg)"></div>
  <div class="slideshow-image" style="background-image: url(afterFeedback_pic2.jpg)"></div>
  <div class="slideshow-image" style="background-image: url(afterFeedback_pic3.jpg)"></div>
  <div class="slideshow-image" style="background-image: url(afterFeedback_pic4.jpg)"></div>
</div>

</body>
<footer style="padding:10px;background-color: black;color:white; ">
		 <h4>   &copy;  Harshit Walia (N01264442), Sahil Sahil (N01273291)</h4>
	</footer>
</html>
