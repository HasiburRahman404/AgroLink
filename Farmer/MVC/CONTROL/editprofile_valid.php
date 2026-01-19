<?php
session_start();
include "../MODEL/Database_conn.php";


$name = $_SESSION["username"] ?? "";
$phonenumber = $_SESSION["number"] ?? "";


$nameErr = $phoneErr = "";
$success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    if (empty($_POST["name"])) {
        $nameErr = "Full Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }


    if (empty($_POST["phonenumber"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
        if (!preg_match("/^[0-9]{11}$/", $phonenumber)) {
            $phoneErr = "Enter a valid 11-digit phone number";
        }
    }

   
    if (empty($nameErr) && empty($phoneErr)) {

        $conn = openConn(); 
        $email = $_SESSION["email"];

        $result = updateFarmerProfile($conn, $email, $name, $phonenumber);

        if ($result === TRUE) {
            $_SESSION["username"] = $name;
            $_SESSION["number"] = $phonenumber;
            $success = "Profile updated successfully";
        } else {
            $success = "Database error: " . $conn->error;
        }

        $conn->close();
    }
}
?>
