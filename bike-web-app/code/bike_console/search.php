<?php
	
	id_query();
	
	make_query();
	
	model_query();

function id_query()
	{
		
	include 'db_conn.php';
	
	echo "<form name'search_id_form' action='#' method='get'>";	
	echo "<input name='id_search' type='text' placeholder='search id'>";
	echo "<input type='submit'>";
	echo "</form>";
	
		if(isset($_GET['id_search']))
		{	
			$id_search = $_GET['id_search'];
	
			if($id_search)
			{
				$query = "SELECT * FROM tbl_bikes where id like '".$id_search."';";
				$result = mysqli_query($conn, $query);	
				
				print_table($result);
				
				//return $query; //query is in the return
			} 	
		}
	}
	
function make_query()
	{
		
	include 'db_conn.php';
	
	echo "<form name'search_make_form' action='#' method='get'>";	
	echo "<input name='make_search' type='text' placeholder='search make'>";
	echo "<input type='submit'>";
	echo "</form>";

	if(isset($_GET['make_search']))
		{	
			$make_search = $_GET['make_search'];
		
			if($make_search)
			{
				$query = "SELECT * FROM tbl_bikes where make like '".$make_search."';";
				$result = mysqli_query($conn, $query);	
				
				print_table($result);
			} 
		}
	}
	
	
function model_query()
	{
		
	include 'db_conn.php';
	
	echo "<form name'search_model_form' action='#' method='get'>";	
	echo "<input name='model_search' type='text' placeholder='search model'>";
	echo "<input type='submit'>";
	echo "</form>";
	
		if(isset($_GET['model_search']))
		{	
			$model_search = $_GET['model_search'];
		
			if($model_search)
			{
				$query = "SELECT * FROM tbl_bikes where model like '".$model_search."';";
				$result = mysqli_query($conn, $query);	
				
				print_table($result);
			} 
		}
	}

	
	
function print_table ($result)
	{		
			if (empty($result)==false)
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
			
				while (($row = mysqli_fetch_assoc($result)))
				{
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
	}
	
?>