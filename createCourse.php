<?php
	include("config.php");
	
	// Fetching and decoding the inserted data
	$data = json_decode(file_get_contents("php://input")); 

	//echo $data;
	
	// Escaping special characters from submitting data & storing in new variables.
	$cName = mysqli_real_escape_string($conn, $data->cName);
	$cMode = mysqli_real_escape_string($conn, $data->cMode);
	$cPrice = mysqli_real_escape_string($conn, $data->cPrice);
	
	/*$cName = "Sumit";
	$cPrice = "$100";
	$cMode = "Self-Priced";*/
	$sql = "INSERT INTO courses(cName,cMode,cPrice) VALUES ('$cName','$cMode','$cPrice')";
	//$sql = "INSERT INTO courses(cName,cMode,cPrice) VALUES('$cName','$cMode','$cPrice')";
	mysqli_query($conn, $sql);
	echo(true);
 ?>