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

$sql = "SELECT DISTINCT * FROM year";

$result = $conn->query($sql);

$years = array();
while ($row = $result->fetch_assoc()) {
    $years[] = $row['year'];
    $yearsid[] = $row['year_id'];

}

header('Content-Type: application/json');
echo json_encode($years);

$conn->close();
?>
