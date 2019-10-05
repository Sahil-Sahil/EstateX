<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<script src="Explore.js" type="text/javascript"></script>
	
    <!-- Title -->
	
	<title>Explore</title>

	<link rel="stylesheet" href="Explore.css">
	


</head>
<body>	


<header>
	<img src="Explore_milkyway.jpg" >
	<!-- Nav Start-->

			<div class="navbar">
						<a href="index.php">HOME</a>
						<a href="Explore.php">EXPLORE</a>
						<a href="aboutUs.php">ABOUT US</a>
						<a href="feedback_form.php">FEEDBACK</a>
						<a href="Login.php">LOGIN</a>
						<a href="user.php">USER PAGE</a>
					</div>

		
		<!--Explore Page-1 Text -->

		<div class="ex-1-txt">
		
			<h1>Looking For New <span style="color:#ff8f00;font-weight:bold">HOME</span><h1>
			<p>True You'r <span style="color:#f78a8a;font-weight:bold">DREAM</span> of living on another <span style="color:#817ab3;font-weight:bold">PLANET</span> </p>
			</div>

	</header>



	  
	<div class="row">
					<h1>Currently Offering</h1>            
			 </div>  

	<!--Planet Cards-->

	<div class="slide active">
		<div class="card">
			  <div class="card-img" id="img01"></div>
			  <div class="card-content">
					<p class="card-theme">Space </p>
					<h2 class="card-header">Mars</h2>
					<p class="card-para">"Mars tugs at the human imagination like no other planet. With a force mightier than gravity, it attracts the eye to the shimmering red presence in the clear night sky."</p>
					
					
					<p class="card-para">Select the type of terrain you would like to buy your plot on :</p>
					<div class="search_categories">
						<div class="select">
							<select id="selectTerrainMars" name="selectTerrainMars">
							<option value="op1" selected="selected">______</option>
							 <option value="op2">Dust Devil Tracks</option>
							 <option value="op3">Dark Slope Streaks</option>
							 <option value="op4">Sand Dunes</option>   
							 <option value="op5">Medusae Fossae Formation</option>
							
							 <option value="op6">Craters</option> 							 
							</select>
						</div>
					</div>
					
					<p class="card-para">Select the size of your plot:</p>
					<div class="search_categories">
						<div class="select">
							<select id="selectSizeMars">
							<option value="op1" selected="selected">____sq feet</option>
							 <option value="op2">10,000 sq feet</option>
							 <option value="op3">20,000 sq feet</option>
							 <option value="op4">30,000 sq feet</option>    
							</select>
						</div>
					</div>
					
					<input type="button" class="bt_explore" value="Select" onclick="selectMars()" />-->
					<!--<input type="button" class="bt_explore" value="Select" onclick="header('Location: /EstateX/user.php');" />-->
					
				
					<p class="card-para" id="priceMars" style="color:white;">Price: $$$$ </p>
					
					
					<button id="user" class="bt_explore" onClick="location.href='/EstateX/user.php';">Buy Now</button>
					<!--<button id="buyNow1" class="bt_explore" >Buy Now</button>-->

					<p class="card-para" id="redirect1" style="color:white;"></p>
		  
			  </div>
		</div>
		  </div>
		  <div class="slide">
				<div class="card">
					  <div class="card-img" id="img02"></div>
					  <div class="card-content">
							<p class="card-theme">Space</p>
							<h2 class="card-header">Moon</h2>
							<p class="card-para">Vacations away from pole outposts would offer up sights unlike anything on Earth. Decorating the moon's vast lava plains are large impact-borne "mountains," the tallest of which is 3.4 miles (5.5 kilometers) high, about the size of Mount Saint Elias on the border of Alaska and Canada — the perfect adventure for lunar spelunkers.</p>
							
							<p class="card-para">Select the type of terrain you would like to buy your plot on :</p>
						<div class="search_categories">
						<div class="select">
							<select id="selectTerrainMoon" name="selectTerrainMoon">
							<option value="op1" selected="selected">______</option>
							 <option value="op2">Maria</option>
							 <option value="op3">Highlands</option>
							 <option value="op4">Sand Dunes</option>   
							 <option value="op5">Rilles</option>
							 <option value="op6">Ray Craters</option>
							 <option value="op7">Craters</option> 							 
							</select>
						</div>
					</div>
						
							
							
							
							<p class="card-para">Select the size of your plot:</p>
							<div class="search_categories">
								<div class="select">
									<select id="selectSizeMoon">
									<option value="op1" selected="selected">____sq feet</option>
									 <option value="op2">10,000 sq feet</option>
									 <option value="op3">20,000 sq feet</option>
									 <option value="op4">30,000 sq feet</option>    
									</select>
								</div>
							</div>
							
							<input type="button" class="bt_explore" value="Select" onclick="selectMoon()" />
							
						
							<p class="card-para" id="priceMoon" style="color:white;">Price: $$$$ </p>

							<!--<button id="buyNow2" class="bt_explore">Buy Now</button>-->
							<button id="user2" class="bt_explore" onClick="location.href='/EstateX/user.php';">Buy Now</button>

							<p class="card-para" id="redirect2" style="color:white;"></p>
					  </div>
				</div>
		  </div>
	  <div class="slide">
			<div class="card">
				  <div class="card-img" id="img03"></div>
				  <div class="card-content">
						<p class="card-theme">Space</p>
						<h2 class="card-header">Venus</h2>
						<p class="card-para">Venus is the second planet from the Sun and is the second brightest object in the night sky after the Moon. Named after the Roman goddess of love and beauty, Venus is the second largest terrestrial planet and is sometimes referred to as the Earth's sister planet due the their similar size and mass</p>
						
						<p class="card-para">Select the type of terrain you would like to buy your plot on :</p>
						<div class="search_categories">
						<div class="select">
						<select id="selectTerrainVenus" name="selectTerrainVenus">
						<option value="op1" selected="selected">______</option>
						 <option value="op2">Alpha Regio</option>
						 <option value="op3">Aphrodite Terra</option>
						 <option value="op4">Beta Regio</option>   
						 <option value="op5">Ishtar Terra</option>
						 <option value="op6">Mountain Belts</option>
						 <option value="op7">Craters</option> 	
						<option value="op8">Coronae</option>   
						
						</select>
					</div>
				</div>
						
						
						<p class="card-para">Select the size of your plot:</p>
						<div class="search_categories">
							<div class="select">
								<select id="selectSizeVenus">
								<option value="op1" selected="selected">____sq feet</option>
								 <option value="op2">10,000 sq feet</option>
								 <option value="op3">20,000 sq feet</option>
								 <option value="op4">30,000 sq feet</option>    
								</select>
							</div>
						</div>
						
						<input type="button" class="bt_explore" value="Select" onclick="selectVenus()" />
						
					
						<p class="card-para" id="priceVenus" style="color:white;">Price: $$$$ </p>
						
						

						<!--<button id="buyNow3" class="bt_explore">Buy Now</button>-->
						<button id="user2" class="bt_explore" onClick="location.href='/EstateX/user.php';">Buy Now</button>

						<p class="card-para" id="redirect3" style="color:white;"></p>
				  </div>
			</div>
	  </div>
		  <div class="prevnext">
				<button class="pn-btn" id="prev"></button>
				<button class="pn-btn" id="next"></button>
		  </div>
		  
			 <div class="row">
					<h1>Development so far..</h1>            
			 </div>

	  <div class="slideshow-container">
			<div class="mySlides">
					<img src="Explore_moon2.jpeg" >
			</div>
			<div class="mySlides">
					<img src="Explore_moon1.jpg" >
			</div>
			<div class="mySlides">
					<img src="Explore_mars3.jpg" >
			</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	  </div>
		  
		  
		<footer style="padding:10px;background-color: black;color:white; ">
			 <h4>   &copy;  Harshit Walia (N01264442), Sahil Sahil (N01273291)</h4>
		</footer>
			 
		<script src="Explore.js" type="text/javascript"></script>
</body>
	

</html>
