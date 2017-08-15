<?php 
// Including database connections
include("config.php");
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from updated data
$id = mysqli_real_escape_string($con, $data->id);
$name = mysqli_real_escape_string($con, $data->name);
$email = mysqli_real_escape_string($con, $data->email);
$role = mysqli_real_escape_string($con, $data->role);
$target = mysqli_real_escape_string($conn, $data->target);
// mysqli query to insert the updated data
$query = "UPDATE user SET username='$name',emailId='$email',role='$role',target='$target' WHERE id=$id";
mysqli_query($conn, $query);
echo true;
?>