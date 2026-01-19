<?php
session_start();
include "../MODEL/Database_conn.php"; 

$conn = openConn();



$requesters_result = $conn->query("SELECT * FROM requesters_information");


$delivery_result = $conn->query("SELECT * FROM delivery_address");
?>
