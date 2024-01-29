<?php
$servername = "localhost";
$port = 3306; 
$username = "root";
$password = "";
$dbname = "ecology_statistics";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT sanitation_vehicle FROM zone";

$result = $conn->query($sql);

$sanitation_vehicles = array();
while ($row = $result->fetch_assoc()) {
    $sanitation_vehicles[] = $row['population'];
}

header('Content-Type: application/json');
echo json_encode($sanitation_vehicles);

$conn->close();
?>
