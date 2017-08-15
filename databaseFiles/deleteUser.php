
<?php 
$data = json_decode(file_get_contents("php://input")); 
include("config.php");

$id = $data->del_id;

$sql = "DELETE FROM user WHERE id = '$id'";
mysqli_query($conn, $sql);
$conn->close();
echo(true);
?>