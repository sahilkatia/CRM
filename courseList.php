<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	include("config.php");
	$sql = "SELECT * FROM courses";
	$res = mysqli_query($conn, $sql);
	//$row = mysqli_fetch_array( $result );

	$courseP=[];
	if (mysqli_num_rows($res) > 0) {
	    // output data of each row
	    while($r = mysqli_fetch_assoc($res)) {
	        $courseP[] = $r;
	    }
	} else {
	    $courseP = "0 results";
	}
	//mysqli_close($conn);
	$course = json_encode($courseP);
	echo($course);
?>