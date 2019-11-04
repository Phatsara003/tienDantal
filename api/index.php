<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qquick";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer";
$query = mysqli_query($conn,$sql);

if (!$query) {

printf("Error: %s\n", $conn->error);
exit();
}
$resultArray = array();
while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
array_push($resultArray,$result);
}
mysqli_close($conn);
echo json_encode($resultArray);

?>
