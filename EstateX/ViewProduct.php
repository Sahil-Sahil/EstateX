<html>
<head>
<style>
table {
  
  border-collapse: collapse;
  width: 50%;
  
}
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<title>View Products</title>
</head>
<body>
<h2>View Products</h2>
<table>
<tr>
<th>pid             </th>
<th>PlanetName      </th>
<th>LandType        </th>
<th>LandSize        </th>
<th>Prize           </th>
</tr>
<?php
	$db_host="localhost";
        $db_username="testuser";
	$db_passwd="password";
	    
 	$dbc=mysqli_connect('localhost','testuser','password','estatex')
	 or die ("Could not Connect! \n");

	$sql="SELECT * from Product;";


 	echo "Connection established. \n";
	
	$result=mysqli_query($dbc,$sql) or die ("Error Querying Database");
	/*while($row=mysqli_fetch_array($result)){
		echo '<br> ID: '.$row['pid'].' ....PlanetName: '.$row['PlanetName'].' ....LandType: '.$row['LandType'].' ....LandSize: '.$row['LandSize'].'      Prize: '.$row['Prize'].'<br/>';
	}*/
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
</body>
</html>
