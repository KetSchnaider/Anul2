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

$selectedCategory = isset($_GET['category']) ? $_GET['category'] : null;
$selectedId = isset($_GET['id']) ? $_GET['id'] : null;

if ($selectedCategory === 'air') {
    $sql = "DELETE FROM air_statistics WHERE air_id = ?";
} elseif ($selectedCategory === 'water') {
    $sql = "DELETE FROM water_statistics WHERE water_id = ?";
} elseif ($selectedCategory === 'waste') {
    $sql = "DELETE FROM waste_statistics WHERE waste_id = ?";
} else {
    die("Error: Invalid category specified");
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $selectedId);
$stmt->execute();

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode(['message' => 'Row deleted successfully']);
?>
