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

$sql = "SELECT DISTINCT category_name FROM air_statistics";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $categories = array();

    while ($row = $result->fetch_assoc()) {
        $categories[] = $row['category_name'];
    }

    echo json_encode($categories);
} else {
    echo json_encode(array());
}

$conn->close();

?>
