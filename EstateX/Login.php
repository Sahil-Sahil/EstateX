<!DOCTYPE html>

<html>
	<head>
	<title>Log in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js">
	</script>
	<script src="Login.js"></script>

	<link rel="stylesheet" href="Login.css">
	<style> .error1 {color:#FF0000;} </style>
	</head>
	<body>

	<!--<div class="navbar">
                  <a href="index.php">HOME</a>
		<a href="Explore.php">EXPLORE</a>
                    <a href="aboutUs.php">ABOUT US</a>
                    <a href="feedback_form.php">FEEDBACK</a>
					<a href="Login.php">LOGIN</a>
					
				</div>-->
		

					
					
				  <form  class="modal-content animate"  name="logIn_form" action="FinalValidate.php" method="post">
					
							<div class="container">
							<div class="vl">
				
							<span class="error1">* </span>
							<label for="email"><b>Email</b></label>
							<input type="text" name="email" id="email" placeholder="Enter email" />
							<span class="error"><?php  echo $emailErr;?></span><br>
							<label class="error" for="email" id="Email_error">Email is required<br></label>

							<span class="error1">* </span>
							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" id="psw" >
							<span class="error"><?php echo $pswErr;?></span><br>
							<label class="error" for="psw" id="psw_error">Password is required<br></label>

	  
							<button class="button" type="submit">Sign In</button>
					<h3><center><a href="/EstateX/Register.php">Click here</a> to Register as New User</center></h3>
							</div>
		
						</div>

				  </form>
				  
		
	</body>
	<footer style="padding:10px;background-color: black;color:white; ">
		 <h4>   &copy;  Harshit Walia (N01264442), Sahil Sahil (N01273291)</h4>
	</footer>
</html>
