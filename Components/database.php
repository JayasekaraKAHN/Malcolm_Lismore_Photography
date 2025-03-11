<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "malcolm_lismore";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>