 <?php
	include"db_con.php";
	//echo $_GET['item_id'];
	
	$price_check = $_GET['input_price'];
	$stock_check = $_GET['input_stock'];
	
	if (($price_check > 0)and($stock_check > 0))
				{
					$query = "UPDATE tbl_item SET item_desc='".$_GET['input_desc']."', sex ='".$_GET['input_sex']."', item_size='".$_GET['input_size']."', item_price=".$_GET['input_price'].", stock_lvl=".$_GET['input_stock']." WHERE item_id='".$_GET['item_id']."';";
					$result = mysqli_query($conn, $query);
				}
	
	if ($result)
	{
		header("Location: products.php");
	}
	else if (!$result)
	{	
		echo "<p>Entry has failed. Ensure price and stock inputs are not negative values.</p>";
		echo "<p> <a href='products.php'> Click here to relocate to products list. </a> </p>";
	}
?>