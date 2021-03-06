<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
		<title>SOSA Console</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles" rel="stylesheet">
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
				<!--<p class="lead">Enter keywords to search the database...</p>-->
			</div> 
			<br> 
			<?php
			include 'db_con.php';
					$query = "SELECT * FROM tbl_item ORDER BY item_id DESC";
					$result = mysqli_query($conn, $query);
				echo "<table class='table'>";
					if ($result)
						{ 
						echo "<tr>";
						echo "<th>Item ID</th>";
						echo "<th>Description</th>";
						echo "<th>Sex</th>";
						echo "<th>Size</th>";
						echo "<th>Price(£)</th>";
						echo "<th>Stock</th>";
						echo "<th></th>";
						echo "</tr>";
						while ($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>".$row["item_id"]."</td>";
								echo "<td>".$row["item_desc"]."</td>"; 
								echo "<td>".$row["sex"]."</td>";
								echo "<td>".$row["item_size"]."</td>";
								echo "<td>".$row["item_price"]."</td>";
								echo "<td>".$row["stock_lvl"]."</td>";
								echo "<td><p> <a href='/delete.php?item_id=".$row["item_id"]."'> delete </a></p> <p> <a href='/update.php?item_id=".$row["item_id"]."'> edit </p></td>";
								echo "</tr>";
							}
						}
						else
						{
							echo "No reults";
						}
				echo "</table>";
			?>
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
