
<?php
session_start();
	//declaring variables
	$db_host="localhost";
	$db_username="testuser";
	$db_passwd="password";

	$emailusedErr = $emailErr ="";


     $dbc=mysqli_connect('localhost','testuser','password','estatex')
     or die ("Server's are currently down. Please try again later \n");



	function generate_string($input, $strength )
	{
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $strength; $i++)
		{
			$random_character = $input[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
	    	}
	 
	    return $random_string;
	}

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	 
	
	$saltString=generate_string($permitted_chars, rand(5,10));
	$combined = $_POST['password'].$saltString;

	$encryptedPassword=hash("sha256",$combined);

echo "combined=$combined";
echo "<br>";
echo "ency=$encryptedPassword";
echo "<br>";

//can be removed but double checking 

		if (empty($_POST['email'])) 
		{
			$emailErr = "Email is required";
		}
		else
		{
			$query_email = "SELECT * FROM CostumerRecord where email ='".$_POST['email']."'";
	
			$result_email = mysqli_query($dbc, $query_email);

			if(mysqli_num_rows($result_email)>0)
			{
				//$_SESSION["emailUsed"]="1";
				$emailusedErr = "Email is not availabe try anotoher one";
				header('Location: /EstateX/Register.php');
			}
			else
			{
				$email = $_POST['email'];
			}
		}//Email check is done over here
		
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['pnumber'];
$address = $_POST['Address'];


		if(empty($emailusedErr))
		{
			$sql="INSERT INTO CostumerRecord VALUES(NULL,'$fname','$lname','$email','$phone','$address');";
   			$sql2="INSERT INTO LoginRecord VALUES (NULL,'$email','$saltString','$encryptedPassword','C');";
   
   			 $result=mysqli_query($dbc,$sql) or die ("Error Querying Database1");
   			 $result=mysqli_query($dbc,$sql2) or die ("Error Quering DataBase2");
				echo "You have successfuly registered\n";
			header('Location: /EstateX/Login.php');
		}

      
mysqli_close();


   
?>
	

