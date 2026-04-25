<?php
$host = "localhost";         // or your host (e.g. fdb1028.awardspace.net)
$dbname = "capisdlj_capitalscorp";   // your actual database name
$username = "capisdlj_capitalscorp"; // your MySQL username
$password = "THEhybrid3002#"; // your MySQL password

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>