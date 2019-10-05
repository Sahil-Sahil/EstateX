<html>
<head>
    <link rel="stylesheet" href="Admin.css">


<title>Admin Page</title>
</head>
<body>
<header>
<!-- Nav Start -->
    <nav>
   
        <div class="navbar">
                <a href="index.php">HOME</a>
                <a href="Explore.php">EXPLORE</a>
                <a href="aboutUs.php">ABOUT US</a>
                <a href="feedback_form.php">FEEDBACK</a>
                <a href="Login.php">LOGIN</a>

               
                </div>
    </nav>

</header>



<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Add New Products</h1>
    </div>
    <div class="form-content">
      <form action = "Product.php" method = "post">
        <div class="form-group">
        <label for="PlanetName">Planet name:</label>
        <input type="text" id="PlanetName" name="PlanetName" required="required" /><br />
        </div>
        <div class="form-group">
          <label for="LandType">Land Type:</label>
                <input type="text" id="LandType" name="LandType" required="required" /><br />
        </div>
        <div class="form-group">
          <label for="LandSize">Land Size:</label>
                <input type="text" id="LandSize" name="LandSize" required="required" /><br/>
        </div>
        <div class="form-group">
         <label for="Prize">Prize:</label>
                <input type="text" id="Prize" name="Prize" required="required" /><br/>
        </div>
       
        <div class="form-group">
          <button type="submit">Add Product</button>
        </div>
      </form>
    </div>
  </div>

</div>

<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Delete existing Products</h1>
    </div>
    <div class="form-content">
      <form action = "DeleteProduct.php" method = "post">
        <div class="form-group">
        <label for="PID">Product ID:</label>
        <input type="text" id="PID" name="PID" required="required" /><br />
        </div>
       
        <div class="form-group">
          <button type="submit">Delete Product</button>
        </div>
      </form>
    </div>
  </div>

</div>


<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Alter Products</h1>
    </div>
    <div class="form-content">
      <form action = "ProductAlter2.php" method = "post">
	 <div class="form-group">
        <label for="PlanetName">Exixting Product ID:</label>
        <input type="text" id="ePID" name="ePID" required="required" /><br />
        </div>
        <div class="form-group">
        <label for="PlanetName">New Planet name:</label>
        <input type="text" id="NewPlanetName" name="NewPlanetName" required="required" /><br />
        </div>
        <div class="form-group">
          <label for="LandType">New Land Type:</label>
                <input type="text" id="NewLandType" name="NewLandType" required="required" /><br />
        </div>
        <div class="form-group">
          <label for="LandSize">New Land Size:</label>
                <input type="text" id="NewLandSize" name="NewLandSize" required="required" /><br/>
        </div>
        <div class="form-group">
         <label for="Prize">New Price:</label>
                <input type="text" id="NewPrize" name="NewPrize" required="required" /><br/>
        </div>


       
        <div class="form-group">
          <button type="submit">Alter Product</button>
        </div>
      </form>
    </div>
  </div>

</div>

<br/><br/>
  <h1>Products Available To Customers</h1><br/>
 <div class="table100 ver6 m-b-110">
 
                    <table data-vertable="ver6">
                        <thead>
                            <tr class="row100 head">
                                
                                <th class="column100 column2" data-column="column2">pid</th>
                                <th class="column100 column3" data-column="column3">PlanetName</th>
                                <th class="column100 column4" data-column="column4">LandType</th>
                                <th class="column100 column5" data-column="column5">LandSize</th>
                                <th class="column100 column6" data-column="column6">Price</th>
                            </tr>
                        </thead>
                            <?php
                                $db_host="localhost";
                                $db_username="testuser";
                                $db_passwd="password";
                                   
                                $dbc=mysqli_connect('localhost','testuser','password','estatex')
                                 or die ("Could not Connect! \n");

                                $sql="SELECT * from Product;";


                                //echo "Connection established. \n";
                               
                                $result=mysqli_query($dbc,$sql) or die ("Error Querying Database");
                           
                                while($row=mysqli_fetch_array($result)){
                                        echo "<tr>";
                                        echo "<td>" . $row['pid'] . "</td>";
                                        echo "<td>" . $row['PlanetName'] . "</td>";
                                    echo "<td>" . $row['LandType'] . "</td>";
                                    echo "<td>" . $row['LandSize'] . "</td>";           
                                    echo "<td>" . $row['Prize'] . "</td>";
                                        echo "</tr>";
                                }
                               
                                 mysqli_close();
                            ?>
                       
                    </table>
                </div>


<br/><br/>

   <h1>All Transactions</h1><br/>
<div class="table100 ver6 m-b-110">
 
                    <table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2">Trasaction ID</th>
								<th class="column100 column3" data-column="column3">Customer ID </th>
								<th class="column100 column4" data-column="column4">Product ID</th>
								<th class="column100 column5" data-column="column5">Price </th>
								<th class="column100 column6" data-column="column6">Transaction Time </th>
							</tr>
						</thead>
                            <?php
						$db_host="localhost";
						$db_username="testuser";
						$db_passwd="password";
						    
					 	$dbc=mysqli_connect('localhost','testuser','password','estatex')
						 or die ("Could not Connect! \n");
						


						$sql="SELECT * from Transaction ;";


					 	//echo "Connection established. \n";
						
						$result=mysqli_query($dbc,$sql) or die ("Error Querying Database");
						
						while($row=mysqli_fetch_array($result)){
					    		echo "<tr>";
					    		echo "<td>" . $row['tid'] . "</td>";
					    		echo "<td>" . $row['cid'] . "</td>";
							echo "<td>" . $row['pid'] . "</td>";

							$xx=$row['pid'];
							$dbc2=mysqli_connect('localhost','testuser','password','estatex')
							 or die ("Could not Connect! \n");
							$sql2="SELECT * from Product where Product.pid='$xx';";
							$result2=mysqli_query($dbc2,$sql2) or die ("Error Querying Database");
							while($row2=mysqli_fetch_array($result2))
							{
								echo "<td>" . $row2['Prize'] . "</td>";
							}   	
					
							echo "<td>" . $row['TransactionTIME'] . "</td>";
					    		echo "</tr>";
						}
							       
                                 mysqli_close();
                            ?>
                       
                    </table>
                </div>



 


</body>
</html>
