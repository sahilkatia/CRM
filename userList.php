<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	include("config.php");
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
	//$row = mysqli_fetch_array( $result );

	$outp=[];
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $outp[] = $row;
	    }
	} else {
	    $outp = "0 results";
	}
	$conn->close();
	$recoards = json_encode($outp);
	echo($recoards);
?>