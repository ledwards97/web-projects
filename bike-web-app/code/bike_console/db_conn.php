<?php
 $host = '127.0.0.1';
 $username ='root';
 $password = '';
 $db_name = 'bikes';
 
 $conn = mysqli_connect($host, $username, $password, $db_name);
	mysqli_select_db($conn, $db_name);
	
	/*if ($conn)
	{
		echo "<p></p>";
		
	}
	else{
		echo "<p> connection not found </p>";
	}*/
?>
