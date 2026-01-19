<?php
session_start();
include "../MODEL/Database_conn.php";

$conn = openConn();


$review_result = $conn->query("SELECT * FROM userreview ");
?>
