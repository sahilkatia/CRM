<?php 
// Including database connections
include("config.php");
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$id = mysqli_real_escape_string($conn, $data->cId);
$Cname = mysqli_real_escape_string($conn, $data->cName);
$cMode = mysqli_real_escape_string($conn, $data->cMode);
$cPrice = mysqli_real_escape_string($conn, $data->cPrice);
// mysqli query to insert the updated data
$query = "UPDATE courses SET cName='$Cname',cMode='$cMode',cPrice='$cPrice' WHERE id=$id";
mysqli_query($conn, $query);
echo true;
?>