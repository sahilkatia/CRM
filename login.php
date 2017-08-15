<?php 
	$server="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="crm";

	$conn = mysqli_connect($server,$dbusername,$dbpassword,$dbname);

	/*if(!$conn){
		die("Connection faild". mysqli_connect_error());
	}
	echo "Connected successfully";*/

	$name=$_POST['username'];
	$password = $_POST['password'];
	//$name= "admin";

	$sql = "SELECT * FROM user WHERE emailID = '$name' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array( $result );
	$role = $row['role'];
	$userid = $row['id'];

	if ($role == 'admin') {
		header('Location: admin.php?userid='.$userid);
	}elseif ($role=='marketing') {
		echo "Marketing Dashboard";
	}elseif ($role == "sales") {
		echo "Sales Dashborad";
	}else{
		echo "Invalid User.";
	}


?>