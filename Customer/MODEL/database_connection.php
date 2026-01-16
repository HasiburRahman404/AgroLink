<?php


$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "agrolink"; 

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>