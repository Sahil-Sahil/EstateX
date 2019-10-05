
<?php
session_start();

     	$db_host="localhost";
        $db_username="testuser";
	$db_passwd="password";
	$_SESSION["EMAIL"]=$_POST['email'];

	$connect=mysqli_connect('localhost','testuser','password','estatex') or die ("Could not Connect! \n");

	$query_email = "SELECT * FROM LoginRecord where email ='".$_POST['email']."'";
	
	$result_email = mysqli_query($connect, $query_email)  or die ("Error Querying Database1") ;
	
	$rownum = mysqli_num_rows($result_email);


		if((mysqli_num_rows($result_email))>0)
		{
			$dbc = mysqli_query($connect,$query_email);
			$row=mysqli_fetch_array($dbc);

			$salt=$row['saltString'];
			$enc=$row['encryptedPassword'];
			$combined=$_POST['psw'].$salt;

			$conf = hash("sha256",$combined);


			if($conf===$enc)
			{
				if(($row['AscessLevel'])==A)
				{
					header('location: /EstateX/Admin.php');
				}
				else
				{
					header('location: /EstateX/Explore.php');
				}
				echo "<h1>Welcome</h1><h3>Your credetianls have been validated</h1>";
			}
			else
			{
				header('location: /EstateX/Login.php');
				echo "<h1>Sorry</h1><h3>Your credetianls are not valid</h1>";
			}


		}
		else
		{
			echo "bc";
		}

	mysqli_close();
?>	

