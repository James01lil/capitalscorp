<?php

$dbhost = "localhost";
$dbuser = "capisdlj_capitalscorp";
$dbpass = "THEhybrid3002#";
$dbname = "capisdlj_capitalscorp";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
