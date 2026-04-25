<?php

$dbhost = "shuttle.proxy.rlwy.net";
$dbport = 58278;

$dbuser = "root";
$dbpass = "PQryxEVboPKAucKonLsDIqjIKumuPeeE";
$dbname = "railway";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if (!$con) {
    die("failed to connect: " . mysqli_connect_error());
}
?>
