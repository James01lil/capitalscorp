<?php
header('Content-Type: application/json');
$apiUrl = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=ff305e0511634795a859be4745fdddf5';

$response = file_get_contents($apiUrl);
echo $response;
?>