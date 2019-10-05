
<?php
        

	$db_host="localhost";
	$db_username="testUser";
	$db_passwd="password";
 	$dbc=mysqli_connect('localhost','testuser','password','estatex')
	or die ("Could not Connect! \n");
	
	$user=$_post["uname"];
	$user_pass=$_post["psw"];
	
	$salt="select saltString from CostumerRecord where fname=[`$user`];";

 	echo "Connection established. \n";
	mysqli_close();
?>
