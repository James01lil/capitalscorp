<?php
session_start();

require 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM myuser WHERE id = ?");
$stmt->execute([$id]);

header("Location: panel.php");
?>
