<?php
include 'db_conn.php';

if ((empty($_GET['id'])==false))
	{	
		$id=$_GET['id'];
		echo $id;
		$delete_query = "DELETE FROM tbl_bikes WHERE  ID ='".$id."';";
		$delete_result = mysqli_query($conn, $delete_query);
	
		if($id) //id being set to 0 stops loop
		{
			$id=null;
			header("Location: index.php");
		}
	
	}
	
	
	/*	else{
			echo "no deleted data";
		}*/
		
	
?>