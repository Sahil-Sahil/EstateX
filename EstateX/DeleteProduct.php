<!DOCTYPE html>
<html>
	<head>
	<title>Add Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js">
	</script>
	<style> .error {color:#FF0000;} </style>
	</head>
	<body>
<?php


	$PID = $_POST['PID'];
	echo "$PID";
       $db_host="localhost";
       $db_username="testuser";
       $db_passwd="password";
	    
 	$dbc=mysqli_connect('localhost','testuser','password','estatex')
	 or die ("Could not Connect! \n"); 

	$sql="delete from Product where pid='$PID';";
	
 	echo "Connection established. \n";
	
	$result=mysqli_query($dbc,$sql) or die ("Error Querying Database");

	 mysqli_close();
	header('Location: /EstateX/Admin.php');
	
?>
</body>
</html>
