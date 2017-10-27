<?php
	include"db_con.php";
	$id=$_GET['item_id'];
	echo $id;
	$query = "DELETE FROM tbl_item WHERE item_id='".$id."';";
	$result = mysqli_query($conn, $query);
	header("Location: products.php");
?>