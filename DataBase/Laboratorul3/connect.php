<?php

$servername = "127.0.0.1";
$port = 3307; 
$username = "root";
$password = "admin";
$database = "Lab3";

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
