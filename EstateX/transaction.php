<!DOCTYPE html>
<html>
	<head>
	<title>Add Transaction</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js">
	</script>
	<style> .error {color:#FF0000;} </style>
	</head>
	<body>
<?php
	session_start();

	$PID = $_POST['PID'];
	

       $db_host="localhost";
       $db_username="testuser";
       $db_passwd="password";
	    
 	$dbc=mysqli_connect('localhost','testuser','password','estatex')
	 or die ("Could not Connect! \n"); 
	
	$tt=$_SESSION["EMAIL"];
		echo "$tt \n";
		$sql5="SELECT cid from CostumerRecord where email='$tt' ;";
		$result5=mysqli_query($dbc,$sql5) or die ("Error Querying Database");
		$row5=mysqli_fetch_array($result5);
		$aCID=$row5['cid'];
		echo "$aCID";

	//$sql="INSERT INTO Transaction VALUES (NULL,$aCID,$PID,NULL) where $PID in (select pid from Product) ;";
	$sql="INSERT INTO Transaction VALUES (NULL,$aCID,$PID,NULL)  ;";
	//$sql="show tables;";
 	echo "Connection established. \n";
	
	$result=mysqli_query($dbc,$sql) or die ("Error Querying Database");

echo "Connection established. \n";
	 mysqli_close();
	header('Location: /EstateX/user.php');

	
?>
</body>
</html>
