<html>
<head>
    <link rel="stylesheet" href="user.css">


<title>User Page</title>
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

<br/><br/>
  <h1>Products </h1><br/>
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


<h2>Buy Products here</h2>
<form action = "transaction.php" method = "post">
<label for="PID">Enter the PID of the plot that you would like to buy: </label>
<input type="text" id="PID" name="PID" required /><br />
<input type="submit" value="Buy Now" name="submit" />
</form>


-------------------------------------------

  <h1>All transaction that ever took place for this particular user</h1><br/>
 <div class="table100 ver6 m-b-110">
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
		session_start();
		
		//echo "Connection established. \n";

		$db_host="localhost";
		$db_username="testuser";
		$db_passwd="password";
		    
	 	$dbc=mysqli_connect('localhost','testuser','password','estatex')
		 or die ("Could not Connect! \n");
		


		$tt=$_SESSION["EMAIL"];
		echo "$tt";
		$sql5="SELECT cid from CostumerRecord where email='$tt' ;";
		$result5=mysqli_query($dbc,$sql5) or die ("Error Querying Database");
		$row5=mysqli_fetch_array($result5);
		$aCID=$row5['cid'];
		echo "$aCID";

		$sql="SELECT * from Transaction where cid='$aCID';";


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


<br/><br/>





-----------------------------------------------




</body>
</html>
