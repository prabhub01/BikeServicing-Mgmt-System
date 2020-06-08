<?php

$dbServername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tvs";

$conn = mysqli_connect($dbServername, $dbusername, $dbpassword, $dbname );
if (!$conn) {
	echo "Establishing Database Error";
}