<!doctype html>
<?php
	$connect=mysqli_connect('localhost','testuser','password');
	
	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$password = $_POST['psw'];

		$query = "SELECT * FROM CostumerRecord WHERE email='".$email."'";
		$dbc = mysqli_query($connect,$query);
		if(mysqli_num_rows($dbc)>0)
		{
			$row = mysqli_fetch_array($dbc);
			$password_hash = $row['psw'];
			if(password_verify($password,$password_hash))
			{
					<h1 style="font-size:50px">Welcome</h1>
					<h1>Your credetianls have been validated</h3>
			}
			else
			{
					<h1 style="font-size:50px">Sorry</h1>
					<h1>Your credetianls were incorrect</h3>
			}
		}
	}
	else
	{
		echo "email in valid";
	}
?>
<html>
<head>
<meta charset="utf-8">

<title>Successful LogIn</title>
	<link rel="stylesheet" href="afterLogIn.css">
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

					<h1 style="font-size:50px">Welcome</h1>
					<h1>Your credetianls have been validated</h3>
				
					
					
				
			  </div>


<div class="slideshow">
  <div class="slideshow-image" style="background-image: url(afterLogIn1.jpg)"></div>
  <div class="slideshow-image" style="background-image: url(afterLogIn2.jpg)"></div>
  <div class="slideshow-image" style="background-image: url(afterLogIn3.jpg)"></div>
  <div class="slideshow-image" style="background-image: url(afterLogIn4.jpg)"></div>
</div>



</body>
<footer style="padding:10px;background-color: black;color:white; ">
		 <h4>   &copy;  Harshit Walia (N01264442), Sahil Sahil (N01273291)</h4>
</footer>
</html>
