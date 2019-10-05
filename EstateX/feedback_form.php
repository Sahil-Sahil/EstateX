<!DOCTYPE html>
<html>
	<head>
	<title>Feedback Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js">
	</script>
	
	<script src="feedback_form.js">
		
	</script>	
	
	<link rel="stylesheet" href="feedback_form.css">
	
	</head>
	<body>
	<div id="navbar">
	    <a href="index.html">HOME</a>
		<a href="Explore.php">EXPLORE</a>
		<a href="aboutUs.php">ABOUT US</a>
		<a href="feedback_form.php">FEEDBACK</a>
		<a href="Login.php">LOGIN</a>
		
	</div>

		
	 <form  class="modal-content animate"  name=feedback_form action="afterFeedback.php">

		<div class="container">
		<div class="vl">

		<label for="firstname">First Name</label>
		<input type="text" name="firstname" id="firstname" placeholder="John"/>
		<label class="error" for="firstname" id="firstname_error">*This field is required.<br></label>
		<label class="error" for="firstname" id="firstnameNumber_error">*First name should not contain a number<br></label>
		
		<label for="lastname">Last Name</label>
		<input type="text" name="lastname" id="lastname" placeholder="Doe"/>
		<label class="error" for="lastname" id="lastname_error">*This field is required.<br></label>
		<label class="error" for="lastname" id="lastnameNumber_error">*Last name should not contain a number<br></label>
			
		<label for="email">Email</label>
		<input type="email" name="email" id="email" placeholder="john@doe.com"/>
		<label class="error" for="email" id="email_error">*This field is required<br></label>

						
							

		<label>What other planets would you like to buy property on?</label><br><br>
		  <input type="radio" name="otherPlanet" value="Saturn" checked="checked"> Saturn
		  <input type="radio" name="otherPlanet" value="Jupiter"> Jupiter
		  <input type="radio" name="otherPlanet" value="Uranus"> Uranus
		  <input type="radio" name="otherPlanet" value="Neptune"> Neptune <br><br>
		  
	  
		 <label>How was your buying experience?</label><br><br>
		 
				Extremely Disappointed
			  <input type=radio  name=satisfaction value="1">
				<input type=radio  name=satisfaction value="2">
				<input type=radio  name=satisfaction value="3">
				<input type=radio  name=satisfaction value="4">
				<input type=radio  name=satisfaction value="5">
				<input type=radio  checked=6 name=satisfaction value="6">
			   
				<input type=radio  checked=10 name=satisfaction value="10">
				 Extremely Satisfied<br><br>
				 
		 <label>What is your age group?</label><br><br>
		 
				<input type=radio  name=age value="1"> Less than 18
				<input type=radio  name=age value="2">18-25
				<input type=radio  name=age value="3">25-40
				<input type=radio  name=age value="4">40-60
				<input type=radio  name=age value="5">Greater than 60
				<br><br>
		  
		 <label>How likely would you recommend us to your friends?</label><br><br>
		 
		 
				Not Likely At All
				<input type=radio  name=recommend value="1">
				<input type=radio  name=recommend value="2">
				<input type=radio  name=recommend value="3">
				<input type=radio  name=recommend value="4">
				<input type=radio  name=recommend value="5">
				<input type=radio  name=recommend value="6">
				<input type=radio  name=recommend value="7">
				<input type=radio  name=recommend value="8">
				<input type=radio  name=recommend value="9">
				<input type=radio  checked=10 name=recommend value="10">
				 Most Likely<br><br>
				 
		<label for="feedback1">Suggestions:</label>
		<textarea id="feedback1" name="feedback1" placeholder="Write something.." style="height:50px"></textarea>

		<label>Susbscribe to our news letter
		 <input type="checkbox" checked="checked">
		  
		</label>
		<br>

		<button class="button" type="submit">Submit</button>
		
		</div>

</div>

</form>
  
  <footer style="padding:10px;background-color: black;color:white; ">
	<h4>   &copy;  Harshit Walia (N01264442), Sahil Sahil (N01273291)</h4>
	</footer>
		
	</body>
</html>
