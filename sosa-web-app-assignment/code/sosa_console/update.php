<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
		<title>SOSA Console</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles" rel="stylesheet">

		<style type="text/css">
			.sub_container {
				width: 290px;
				clear: both;
			}
			.sub_container input {
				width: 50%;
				clear: both;
				float: right;
			}
			.sub_container select {
				width: 50%;
				clear: both;
				float: right;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-inverse">
			<div class="container-fluid ">
				<a href="index.php" class="navbar-brand">SOSA CONSOLE</a> 
					<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li ><a href="index.php">Search</a></li>
						<li ><a href="add.php">Add Product</a></li>
						<li ><a href="products.php">Product List</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="starter-template">
				<h1>Stock Management System</h1>
				<p class="lead">Update details...</p>
			</div>
	
			<?php
				$id=$_GET['item_id'];
				//echo $id;
				include"update_script";
				include"db_con.php";			
					$desc	= ""; //initialise variables
					$sex	= "";
					$size	= "";
					$price	= 0;
					$stock	= 0;	
				
				$sql1 = "SELECT * FROM tbl_item WHERE item_id='".$id."';";
				$result1 = mysqli_query($conn, $sql1);
				
				if($result1)
				{
					while ($row = mysqli_fetch_assoc($result1))
					{
						$desc	= $row['item_desc']; 
						$sex	= $row['sex'];
						$size	= $row['item_size'];
						$price	= $row['item_price'];
						$stock	= $row['stock_lvl'];	
					}
				}

				$query = "UPDATE tbl_item SET item_desc='".$desc."', sex ='".$sex."', item_size='".$size."', item_price=".$price.", stock_lvl=".$stock." WHERE item_id='".$id."';";
				$result2 = mysqli_query($conn, $query);	
			?>
			<form name="search_form" 	action="update_script.php" method="get">
				<input name="item_id" type="hidden" value="<?php echo $id;?>">
					<div 	class="sub_container">
						<label>Edit Description: </label>
						<input name="input_desc" 	value="<?php echo $desc;?>" 	type="text">
						
						<br><br>
		
						<label>Edit Gender: </label>
						<select class="selectpicker" name="input_sex">
							<option value="<?php echo $sex;?>"> Current: <?php echo $sex;?></option>
							<option>M</option>
							<option>F</option>
						</select>
		
						<br><br>
		
						<label>Edit Size: </label>
						<select class="selectpicker" name="input_size" value="<?php echo $size;?>" >
							<option value="<?php echo $size;?>"> Current: <?php echo $size;?> </option>
							<option>XS</option>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
		
						<br><br>
		
						<label>Edit Price: </label>
						<input name="input_price"	value="<?php echo $price;?>" 	type="text" placeholder="0.00">
		
						<br><br>
		
						<label>Edit Stock: </label>
						<input name="input_stock"	value="<?php echo $stock;?>" 	type="text">
		
						<br><br>
		
						<input type="submit" class="btn btn-Success">
					</div>			
			</form>
		</div><!-- /.container -->
		
			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
			<script src="../../dist/js/bootstrap.min.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>













