<!DOCTYPE html>

<html>
	<head>
	<title>REGISTER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js">
	</script>
	
	<script src="register.js">
		
	</script>	
	
	<link rel="stylesheet" href="register.css">
	<style> .error1 {color:#FF0000;} </style>
	</head>
	<body>

	<div class="navbar">
        <!--          <a href="index.php">HOME</a>
					<a href="Explore.php">EXPLORE</a>
                    <a href="aboutUs.php">ABOUT US</a>
                    <a href="feedback_form.php">FEEDBACK</a>-->
					<a href="Login.php">LOGIN</a>
					<!--<a href="Register.php">REGISTER</a>-->
					
				</div>
		

					
					<form   method="post" class="modal-content animate"  name=Registration_form  action="RegisterServerSide.php">
				  
					
							<div class="container">
							<div class="vl">
			
							<span class="error1">* </span>
							<label for="fname"><b>First Name</b></label>
							<input type="text" name="fname" id="fname" placeholder="Enter Your FirstName" required />
							<label class="error" for="fname" id="fnameFLetter_error">*User FirstName must begin with a letter<br></label>
							<label class="error" for="fname" id="fnameSpChar_error">*User FirstName should only contain letters <br></label>
							<span class="error1">* </span>
							<label for="lname"><b>Last Name</b></label>
							<input type="text" name="lname" id="lname" placeholder="Enter Your LastName" required />
							<label class="error" for="lname" id="lnameFLetter_error">*User LastName must begin with a letter<br></label>
							<label class="error" for="lname" id="lnameSpChar_error">*User LastName should only contain letters<br></label>
							<span class="error1">* </span>
							<label for="email"><b>Email</b></label>
							<input type="text" name="email" id="email" placeholder="Enter Your Email Address" required />
							<label class="error" for="email" id="email_error">*Email must be filled <br></label>

							<!--<?php echo $_SESSION["emailusedErr"];?>-->
													
							<span class="error1">* </span>
							<label for="pnumber"><b>Phone Number</b></label>
							<input type="text" placeholder="Enter Your Phone Number" name="pnumber" id="pnumber" required />
							<label class="error" for="pnumber" id="pnumber_spChar_error">*PhoneNumbershould not have one ! or * in it<br></label>
							
							<label for="Address"><b>Address</b></label>
							<input type="text" name="Address" id="Address" onkeyup='check();' placeholder="Enter Your Address"required/>
							<label class="error" for="Address" id="address_error">*Address must be filled <br></label>

							<span class="error1">* </span>
							<label for="pass">Password<br></label>
							<input name="password" id="pass" type="password" onkeyup='check();' placeholder="Enter Your Password"required/>
							<label class="error" for="pass" id="addressemthy_error">Complete the requirments <br></label>

							<span class="error1">* </span>
							<label for="cpass"> Confirm password </label> 
							<input type="password" name="confirm_password" id="cpass"  onkeyup='check();' placeholder="Confrim Your Password" required/>  <span id='message'></span>
							<h3>Requirements</h3>
							<p>User name must begin with a letter and should only contain numbers and letters.
							<br> Password should be 8 to 16 characters long with atleast one digit.
							<br>Password should also have one ! or * in it and should begin with a letter.</p>
							
							
						
							
							
							<button class="button" value="submit" type="submit">Register</button>
							
							
							</div>
		
						</div>

				  </form>
				  
		
	</body>
	<footer style="padding:10px;background-color: black;color:white; ">
		 <h4>   &copy;  Harshit Walia (N01264442), Sahil Sahil (N01273291)</h4>
	</footer>
</html>
