<?php

$host = "shuttle.proxy.rlwy.net";
$port = 51991;

$dbname = "railway";
$username = "root";
$password = "FwlIYEdygHGUaCxGYCUPrtVUxEhHaEqg";

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
