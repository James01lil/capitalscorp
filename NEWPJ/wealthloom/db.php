<?php
$host = 'fdb1028.awardspace.net';
$user = '4557525_yonelscoin';
$pass = 'THEhybrid3002#';
$db   = '4557525_yonelscoin';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>