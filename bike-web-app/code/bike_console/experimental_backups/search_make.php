<?php
include 'db_conn.php';

//	echo "<form action='#' method='GET'>";
//	echo "<input name='search_id' type='text' placeholder='Search ID...' >";
//	echo "<input type='submit'";
//	echo "</form>";


	echo "<form action='#' method='GET'>";
	echo "<input name='search_make' type='text' placeholder='Search make...' >";
	echo "<input type='submit'";
	echo "</form>";
	
	
	if (((empty($_GET['search_id'])==false))||((empty($_GET['search_make'])==false)))
	{
	
	$search_id = $_GET['search_id'];
	
	$search_id_query = "SELECT * FROM tbl_bikes WHERE id LIKE '".$search_id."';";
	$search_id_result = mysqli_query($conn, $search_id_query);
	
	
	$search_make = $_GET['search_make'];
	
	$search_make_query = "SELECT * FROM tbl_bikes WHERE make LIKE '".$search_make."';";
	$search_make_result = mysqli_query($conn, $search_make_query);
	
	if (($search_id_result)||($search_make_result))
	{
		echo "<table>";
		echo "<tr>";
		echo "<th> ID --</th>";
		echo "<th> MAKE --</th>";
		echo "<th> MODEL --</th>";
		echo "<th> TYPE --</th>";
		echo "<th> GENDER --</th>";
		echo "<th> FRAME SIZE --</th>";
		echo "<th> WHEEL SIZE --</th>";
		echo "<th> COLOUR --</th>";
		echo "<th> STOCK --</th>";
		echo "<th> PRICE </th>";
		echo "</tr>";
		
			while(($row = mysqli_fetch_assoc($search_make_result)) || ($row = mysqli_fetch_assoc($search_make_result))){
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
					echo "<td> <a href='delete.php?id=".$row["ID"]."'> delete </a> </td>";
					echo "</tr>";
			}
		}
		else{
			echo "no search being made";
		}
	
	
	}
		else
		{
			include 'list.php';
		}
	


?>
