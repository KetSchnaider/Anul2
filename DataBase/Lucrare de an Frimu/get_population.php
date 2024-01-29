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

$sql = "SELECT DISTINCT population FROM year";

$result = $conn->query($sql);

$population = array();
while ($row = $result->fetch_assoc()) {
    $population[] = $row['population'];
}

header('Content-Type: application/json');
echo json_encode($population);

$conn->close();
?>
