<?php

$dbhost = "shuttle.proxy.rlwy.net";
$dbport = 51991;

$dbuser = "root";
$dbpass = "FwlIYEdygHGUaCxGYCUPrtVUxEhHaEqg";
$dbname = "railway";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if (!$con) {
    die("failed to connect: " . mysqli_connect_error());
}
?>
