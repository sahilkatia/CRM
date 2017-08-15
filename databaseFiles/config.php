<?php 
	$dbserver="localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "crm";

	$conn = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname);

	if(!$conn){
		die("Connection faild". mysqli_connect_error());
	}

?>