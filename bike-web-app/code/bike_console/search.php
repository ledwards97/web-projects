<?php
include 'db_conn.php';

	echo "<p> Search Bike Make... </p>";
	
	echo "<form action='#' method='GET'>";
	echo "<input name='search' type='text' placeholder='search make'>";
	echo "<input name='search_model' type='text' placeholder='search_model'>";
	echo "<input type='submit'>";
	echo "</form>";
	
	if ((empty($_GET['search'])==false) || (empty($_GET['search_model'])==false)) //check and  confirms undefined
	{	
		//echo "Results found for: ".$search = $_GET['search'];
		
		
		$search = $_GET['search'];
		
		$search_query = "SELECT * FROM tbl_bikes where make like '".$search."';";
		$search_result = mysqli_query($conn, $search_query);
		
		
		$search_model = $_GET['search_model'];
		
		$search_model_query = "SELECT * FROM tbl_bikes where model like '".$search_model."';";
		$search_model_result = mysqli_query($conn, $search_model_query);
		
		//LOOP - IF BOTH FIELDS FILLED DO AND
		
		
		if (($search_result)||($search_model_result))
			{
				echo "<table>";
				echo "<tr>";
				echo "<th> ID --		</th>";
				echo "<th> MAKE --		</th>";
				echo "<th> MODEL --		</th>";
				echo "<th> TYPE --		</th>";
				echo "<th> GENDER --	</th>";
				echo "<th> FRAME SIZE --</th>";
				echo "<th> WHEEL SIZE --</th>";
				echo "<th> COLOUR --	</th>";
				echo "<th> STOCK --		</th>";
				echo "<th> PRICE 		</th>";
				echo "</tr>";
			
				while (($row = mysqli_fetch_assoc($search_result)) || ($row = mysqli_fetch_assoc($search_model_result))) {
						echo "<tr>";
						echo "<td>".$row["ID"]							."</td>";
						echo "<td>".$row["make"]						."</td>";
						echo "<td>".$row["model"]						."</td>";
						echo "<td>".$row["bike_type"]					."</td>";
						echo "<td>".$row["gender"]						."</td>";
						echo "<td>".$row["frame_size_inches"] 			."</td>";
						echo "<td>".$row["wheel_size_inches"] 			."</td>";
						echo "<td>".$row["colour"] 						."</td>";
						echo "<td>".$row["stock"] 						."</td>";
						echo "<td>".$row["price"] 						."</td>";
						echo "</tr>";
				}
			}
		else
		{
			echo "<p> NO RESULTS! </p>";
		}
	}
	else
	{
		include 'list.php';
	}
	

	
	
?>
