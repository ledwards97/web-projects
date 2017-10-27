<?php

//include '../db_conn.php';

$search_id = $_GET['search_id'];

$search_id_query = "SELECT*FROM tbl_bikes WHERE id LIKE'".$search_id."';";
$search_id_result = mysqli_query($conn, $search_id_query);

if($search_id_result)
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
			
				while (($row = mysqli_fetch_assoc($search_id_result))) {
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


?>