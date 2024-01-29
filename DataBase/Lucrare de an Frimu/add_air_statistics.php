<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $requestData = json_decode(file_get_contents("php://input"), true);

    if (empty($requestData["year_id"]) || empty($requestData["zone_id"]) || empty($requestData["category_name"]) || empty($requestData["substance_name"]) || !isset($requestData["data"])) {
        http_response_code(400); // Bad Request
        echo json_encode(["message" => "Invalid data provided"]);
        exit();
    }

    $servername = "localhost";
    $port = 3306;
    $username = "root";
    $password = "";
    $dbname = "ecology_statistics";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        http_response_code(500); // Internal Server Error
        echo json_encode(["message" => "Database connection failed"]);
        exit();
    }

    $yearExistsQuery = "SELECT 1 FROM year WHERE year_id = ?";
    $yearExistsStmt = $conn->prepare($yearExistsQuery);
    $yearExistsStmt->bind_param("i", $requestData["year_id"]);
    $yearExistsStmt->execute();
    $yearExistsResult = $yearExistsStmt->get_result();

    $zoneExistsQuery = "SELECT 1 FROM zone WHERE zone_id = ?";
    $zoneExistsStmt = $conn->prepare($zoneExistsQuery);
    $zoneExistsStmt->bind_param("i", $requestData["zone_id"]);
    $zoneExistsStmt->execute();
    $zoneExistsResult = $zoneExistsStmt->get_result();

    if ($yearExistsResult->num_rows === 1 && $zoneExistsResult->num_rows === 1) {
        $insertQuery = "INSERT INTO air_statistics (year_id, zone_id, category_name, substance_name, data) VALUES (?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertQuery);

        $insertStmt->bind_param("issss", $requestData["year_id"], $requestData["zone_id"], $requestData["category_name"],$requestData["substance_name"], $requestData["data"]);
        $insertStmt->execute();

        // Check for success
        if ($insertStmt->affected_rows > 0) {
            http_response_code(201); // Created
            echo json_encode(["message" => "Air statistics added successfully"]);
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode(["message" => "Failed to add air statistics"]);
        }

        $insertStmt->close();
    } else {
        http_response_code(404); // Not Found
        echo json_encode(["message" => "Specified year_id or zone_id not found"]);
    }

    $yearExistsStmt->close();
    $zoneExistsStmt->close();
    $conn->close();
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["message" => "Method not allowed"]);
}
?>
