<?php
	include "db_conn.php";
			
	echo "<h2> Add Bike Record...  <h2>";
	
	echo	"<form action='#' method='GET'>	";
		echo	"<input name='add_make' 		type='text' placeholder='Make...		'>"; 
		echo	"<input name='add_model' 		type='text' placeholder='Model...		'>";
		echo	"<input name='add_type'			type='text' placeholder='Discipline...	'>";
		echo	"<input name='add_gender'		type='text' placeholder='Gender...		'>";
		echo	"<input name='add_frame' 		type='text' placeholder='Frame Size...	'>";
		echo	"<input name='add_wheel' 		type='text' placeholder='Wheel Size...	'>";
		echo	"<input name='add_colour'		type='text' placeholder='Colour...		'>";
		echo	"<input name='add_stock'		type='text' placeholder='Stock...		'>";
		echo	"<input name='add_price' 		type='text' placeholder='Price...		'>";
		echo	"<input type='submit'>			";
	echo	"</form>                        ";
	
	
	
	//if ( (empty($_GET['add_make'])==false) && (empty($_GET['add_model'])==false) && (empty($_GET['add_type'])==false) && (empty($_GET['add_gender'])==false) && (empty($_GET['add_frame'])==false)  && (empty($_GET['add_wheel'])==false) && (empty($_GET['add_colour'])==false) && (empty($_GET['add_stock'])==false) && (empty($_GET['add_price'])==false) ) //check and  confirms undefif ( (empty($_GET['add_make'])==false) && (empty($_GET['add_model'])==false) && (empty($_GET['add_type'])==false) && (empty($_GET['add_gender'])==false) && (empty($_GET['add_frame'])==false)  && (empty($_GET['add_wheel'])==false) && (empty($_GET['add_colour'])==false) && (empty($_GET['add_stock'])==false) && (empty($_GET['add_price'])==false) ) //check and  confirms undefined
	
	if ( (empty($_GET['add_make'])==false))
	{

	$make	= $_GET['add_make'	];
	$model  = $_GET['add_model'	];
	$type   = $_GET['add_type'	];
	$gender = $_GET['add_gender'];
	$frame  = $_GET['add_frame'	];
	$wheel  = $_GET['add_wheel'	];
	$colour = $_GET['add_colour'];
	$stock  = $_GET['add_stock'	];
	$price  = $_GET['add_price'	];
	
	$add_query = "INSERT INTO tbl_bikes (make, model, bike_type, gender, frame_size_inches, wheel_size_inches, colour, stock, price) VALUES  ('".$make."', '".$model."', '".$type."', '".$gender."', '".$frame."', '".$wheel."', '".$colour."', ".$stock.", ".$price.");";
	$add_result = mysqli_query($conn, $add_query);
	
		if($add_result)
		{
			echo "data succesfully added";
		}
		else
		{
			
			echo "data failed to add";
		}
	
	
	}
?>	
	
</body>



