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

$sql = "SELECT DISTINCT * FROM zone";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $zones = array();

    while ($row = $result->fetch_assoc()) {
        $zones[] = $row['zone_name'];
        $zonesid[] = $row['zone_id'];
    }

    echo json_encode($zones);
} else {
    echo json_encode(array());
}

$conn->close();

?>
