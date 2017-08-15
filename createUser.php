<?php
	include("config.php");
	
	// Fetching and decoding the inserted data
	$data = json_decode(file_get_contents("php://input")); 
	
	// Escaping special characters from submitting data & storing in new variables.
	$name = mysqli_real_escape_string($conn, $data->name);
	$email = mysqli_real_escape_string($conn, $data->email);
	$role = mysqli_real_escape_string($conn, $data->role);
	$password = mysqli_real_escape_string($conn, $data->password);
	$target = mysqli_real_escape_string($conn, $data->target);
	/*$courseassigned = mysqli_real_escape_string($conn, $data->courseassigned);
	$courseassigned = json_encode($courseassigned);*/

	$sql = "INSERT INTO user(username,emailId,role,password,target) VALUES('$name','$email','$role','$password','$target')";
	mysqli_query($conn, $sql);
	echo(true);
 ?>