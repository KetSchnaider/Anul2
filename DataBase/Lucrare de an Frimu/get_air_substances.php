<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$port = 3306;
$username = "root";
$password = "";
$dbname = "ecology_statistics";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT substance_name FROM air_statistics";

$result = $conn->query($sql);

$substance_name = array();
while ($row = $result->fetch_assoc()) {
    $substance_name[] = $row['substance_name'];
}

header('Content-Type: application/json');
echo json_encode($substance_name);

$conn->close();
?>
