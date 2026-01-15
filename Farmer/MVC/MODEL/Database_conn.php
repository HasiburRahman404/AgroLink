<?php
$host = "localhost";   // Server name
$user = "root";        // DB username
$pass = "";            // DB password
$dbname = "farmer";      // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set charset to avoid encoding issues
//$conn->set_charset("utf8");

?>
