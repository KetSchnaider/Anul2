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

$updatedData = json_decode(file_get_contents('php://input'), true);

try {
    $sql = "UPDATE air_statistics SET category_name = ?, substance_name = ?, data = ? WHERE air_id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sssi", 
        $updatedData['category_name'],
        $updatedData['substance_name'],
        $updatedData['data'],
        $selectedId
    );

    $stmt->execute();

    if ($stmt->error) {
        throw new Exception("Error executing statement: " . $stmt->error);
    }

    $stmt->close();

    header('Content-Type: application/json');
    echo json_encode(['message' => 'Row updated successfully', 'values' => array_values($updatedData)]);
} catch (Exception $e) {
    header('Content-Type: application/json', true, 500);
    echo json_encode(['message' => 'Error updating row: ' . $e->getMessage()]);
}

$conn->close();
?>
