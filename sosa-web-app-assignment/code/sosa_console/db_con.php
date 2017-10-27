<?php
	$host = '127.0.0.1';
	$username = 'i7439021';
	$password = '17f245e0d60fcd82e4690c84a87d6e22';
	$db_name = $username;
	
	$conn = mysqli_connect($host, $username, $password, $db_name);
	mysqli_select_db($conn, $db_name);
	
	/*if($conn)
	{
		echo "<p>success</p>";
	}
	else
	{
		echo "<p>no connection found</p>";
	}*/
?>