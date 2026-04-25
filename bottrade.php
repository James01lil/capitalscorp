<?php
// Generate two random values
$rise = rand(100, 98799) / 10; // e.g., 10.0 to 99.9
$low = rand(700, 9799) / 10;   // e.g., 5.0 to 89.9

echo json_encode([
  "rise" => $rise,
  "low" => $low
]);
?>
