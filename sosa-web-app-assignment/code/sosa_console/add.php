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
			.sub_container input #btn_submit {
			width: 50%;
			clear: both;
				float: center;
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
								<li><a href="index.php">	Search		</a></li>
								<li><a href="add.php">		Add Product	</a></li>
								<li><a href="products.php">	Product List</a></li>
							</ul>
						</div>
				</div>
			</div>
		<div class="container">
			<div class="starter-template">
				<h1>Stock Management System</h1>
				<p class="lead">Add products to SOSA database...</p>
					<form name="search_form" action="add.php" method="get">
						<div 	class="sub_container">
							<label>Enter Description: </label> 
							<input name="input_desc" type="text">
		
							<br><br>
		
							<label>Select Gender: </label> 
							<select class="selectpicker" name="input_sex">
								<option>M      </option>
								<option>F      </option>
							</select>
						
							<br><br>
						
							<label>Select Size:   </label>     
							<select class="selectpicker" name="input_size">
								<option>XS     </option>
								<option>S      </option>
								<option>M      </option>
								<option>L      </option>
								<option>XL     </option>
							</select>
								
							<br><br>
							
							<label>Enter Price:</label> 
							<input name="input_price" type="text" placeholder="0.00">
								
							<br><br>
								
							<label>Enter Stock Amount:</label> 
							<input name="input_stock" type="text">
						
							<br><br>			
							
							<input id="btn_submit" name="btn_sub" type="submit" class="btn btn-Success">
						</div>
					</form>			
				</div>  
			<div>
				<?php
					if(isset($_GET['btn_sub']))
					{
							
						include 'db_con.php';
						
						$desc = $_GET['input_desc'];
						$sex= $_GET['input_sex'];
						$size= $_GET['input_size'];
						$price= $_GET['input_price'];
						$stock= $_GET['input_stock'];
									
						//echo $price;
						
						if (($price>0)and($stock>0))
						{	
							$query = "INSERT INTO tbl_item (item_desc, sex, item_size, item_price, stock_lvl) VALUES ( '".$desc."', '".$sex."', '".$size."', ".$price.", ".$stock.");";
							$result = mysqli_query($conn, $query);
						}
						
						if ($result)
						{
							echo "<br><br>";
							echo "<p class='lead'>Data added successfully</p>";
						}
						else if (!$result)
						{		
							echo "<br><br>";
							echo "<p class='lead'>Entry has failed. Ensure price and stock inputs are not negative values.</p>";	
						}
					}
				?>
			</div>
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