<?php
	$host= "localhost";
	$user= "Any";
	$pass= "";
	$db= "6470";

	$connect= mysqli_connect($host,$user,$pass,$db);

	//test if connection occurred successfully
	if (!$connect) {
		die('Database connection unsuccessful:'. mysqli_connect_error());
	}
	echo "<h4>Connection Successful!</h4>";


?>