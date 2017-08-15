
<?php 
include("config.php");
$data = json_decode(file_get_contents("php://input")); 
$query = "DELETE FROM user WHERE id = $data->del_id";
mysqli_query($conn, $query);
//$conn->close();
echo true;
?>