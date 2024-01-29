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

$sql = "SELECT air_statistics.air_id, year.year AS year, zone.zone_name AS zone, air_statistics.category_name, air_statistics.substance_name, air_statistics.data
        FROM air_statistics
        INNER JOIN zone ON air_statistics.zone_id = zone.zone_id
        INNER JOIN year ON air_statistics.year_id = year.year_id";

$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

$data = [
    'labels' => ['air_id', 'year', 'zone', 'category_name', 'substance_name', 'data'],
    'values' => [],
];

while ($row = $result->fetch_assoc()) {
    $data['values'][] = array_values($row);
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
