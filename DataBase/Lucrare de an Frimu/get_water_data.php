<?php
$servername = "localhost";
$port = 3306;
$username = "root";
$password = "";
$dbname = "ecology_statistics";
$selectedYear = isset($_GET['year']) ? $_GET['year'] : null;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT water_statistics.water_id, year.year AS year, zone.zone_name AS zone, water_statistics.substance_name, water_statistics.data
        FROM water_statistics
        INNER JOIN zone ON water_statistics.zone_id = zone.zone_id
        INNER JOIN year ON water_statistics.year_id = year.year_id
        WHERE year.year = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $selectedYear);
$stmt->execute();

$result = $stmt->get_result();

if ($result === false) {
    die("Error: " . $conn->error);
}

$data = [
    'labels' => ['water_id', 'year', 'zone', 'substance_name', 'data'],
    'values' => [],
];

while ($row = $result->fetch_assoc()) {
    $data['values'][] = array_values($row);
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
