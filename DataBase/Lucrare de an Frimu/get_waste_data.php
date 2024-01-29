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

$sql = "SELECT waste_statistics.waste_id, year.year AS year, zone.zone_name AS zone, waste_statistics.category_name, waste_statistics.data
        FROM waste_statistics
        INNER JOIN zone ON waste_statistics.zone_id = zone.zone_id
        INNER JOIN year ON waste_statistics.year_id = year.year_id";

$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

$data = [
    'labels' => ['waste_id', 'year', 'zone', 'category_name', 'data'],
    'values' => [],
];

while ($row = $result->fetch_assoc()) {
    $data['values'][] = array_values($row);
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
