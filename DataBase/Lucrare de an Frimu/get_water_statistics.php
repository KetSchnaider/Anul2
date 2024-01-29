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


$yearQuery = "SELECT DISTINCT year_id, year FROM year";
$yearResult = $conn->query($yearQuery);

if ($yearResult === false) {
    die("Error fetching years: " . $conn->error);
}

$years = [];
while ($yearRow = $yearResult->fetch_assoc()) {
    $years[$yearRow['year_id']] = $yearRow['year'];
}


$zoneQuery = "SELECT DISTINCT zone_id, zone_name FROM zone";
$zoneResult = $conn->query($zoneQuery);

if ($zoneResult === false) {
    die("Error fetching zones: " . $conn->error);
}

$zones = [];
while ($zoneRow = $zoneResult->fetch_assoc()) {
    $zones[$zoneRow['zone_id']] = $zoneRow['zone_name'];
}


$substanceQuery = "SELECT DISTINCT substance_name FROM water_statistics";
$substanceResult = $conn->query($substanceQuery);

if ($substanceResult === false) {
    die("Error fetching substance names: " . $conn->error);
}

$substances = [];
while ($substanceRow = $substanceResult->fetch_assoc()) {
    $substances[] = $substanceRow['substance_name'];
}


$sql = "SELECT DISTINCT year.year AS year, zone.zone_name AS zone, water_statistics.substance_name, MAX(water_statistics.data) AS data
FROM water_statistics
INNER JOIN zone ON water_statistics.zone_id = zone.zone_id
INNER JOIN year ON water_statistics.year_id = year.year_id";

$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

$data = [
    'labels' => ['year', 'zone', 'substance_name', 'data'],
    'values' => [],
    'years' => $years,
    'zones' => $zones,
    'substances' => $substances,
];

while ($row = $result->fetch_assoc()) {
    $data['values'][] = array_values($row);
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
