<?php

$host = "shuttle.proxy.rlwy.net";
$port = 58278;
$db   = "railway";
$user = "root";
$pass = "PQryxEVboPKAucKonLsDIqjIKumuPeeE";

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
?>
