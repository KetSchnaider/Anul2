<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$selectedYear = $_GET['year'];
$selectedSubstance = $_GET['water_substance'];
$selectedZones = explode(',', $_GET['zones']);

$servername = "localhost";
$port = 3306;
$username = "root";
$password = "";
$dbname = "ecology_statistics";

$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT zone.zone_name, SUM(water_statistics.data) AS total_data
        FROM water_statistics 
        INNER JOIN zone ON water_statistics.zone_id = zone.zone_id 
        WHERE water_statistics.year_id = (SELECT year_id FROM year WHERE year = '$selectedYear')";

if ($selectedSubstance != "") {
    $sql .= " AND water_statistics.substance_name = '$selectedSubstance'";
}

if (!empty($selectedZones)) {
    $zonesCondition = implode("','", $selectedZones);
    $sql .= " AND zone.zone_name IN ('$zonesCondition')";
}

$sql .= " GROUP BY zone.zone_name";

$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

$data = [
    'labels' => [],
    'values' => [],
    'totalAmount' => 0, 
];

while ($row = $result->fetch_assoc()) {
    $data['labels'][] = $row['zone_name'];
    $data['values'][] = $row['total_data'];

    $data['totalAmount'] += $row['total_data'];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
