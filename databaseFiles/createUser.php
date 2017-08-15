<?php
	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $name = $request->name;
    $password = $request->password;
    $email = $request->email;
    $role = $request->role;
    /*$course = $request->course;
    $target = $request->target;*/
    
    //echo $name;

	$server="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="crm";

	$conn = mysqli_connect($server,$dbusername,$dbpassword,$dbname);

	if(!$conn){
		die("Connection faild". mysqli_connect_error());
	}

	$sql = "INSERT INTO user(username,emailId,role,password) VALUES('$name','$email','$role','$password')";
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$conn->close();
 ?>