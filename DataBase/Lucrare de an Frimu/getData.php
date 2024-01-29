<?php
$servername = "localhost";
$port = 3306;
$username = "root";
$dbname = "ecology_statistics";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT data,  FROM air_statistics WHERE category_name = 'Agenti economici'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $airStatistics = $result->fetch_assoc();
} else {
    $airStatistics = array("data" => 0);
}


$sql = "SELECT data FROM water_statistics WHERE year_id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $waterStatistics = $result->fetch_assoc();
} else {
    $waterStatistics = array("waste_volume" => 0);
}


$sql = "SELECT population FROM year WHERE year = 2017";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $population = $row["population"];
} else {
    $population = 0;
}


$sql = "SELECT sanitation_vehicles FROM zone WHERE zone_id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sanitationVehicles = $row["sanitation_vehicles"];
} else {
    $sanitationVehicles = 0;
}


$conn->close();


$response = array(
    "airStatistics" => $airStatistics,
    "waterStatistics" => $waterStatistics,
    "population" => $population,
    "sanitationVehicles" => $sanitationVehicles
);

echo json_encode($response);
?>
