<?php
session_start();
include "../MODEL/Database_conn.php";

// Protect page


// Initialize values (prefill from session)
$name = $_SESSION["username"] ?? "";
$phonenumber = $_SESSION["number"] ?? "";

$nameErr = $phoneErr = "";
$success = "";

// Run only when form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---------- Full Name ----------
    if (empty($_POST["name"])) {
        $nameErr = "Full Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // ---------- Phone Number ----------
    if (empty($_POST["phonenumber"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
        if (!preg_match("/^[0-9]{11}$/", $phonenumber)) {
            $phoneErr = "Enter a valid 11-digit phone number";
        }
    }

    // ---------- Update Database ----------
    if (empty($nameErr) && empty($phoneErr)) {

        $email = $_SESSION["email"];

        $sql = "UPDATE farmer_information 
                SET UserName='$name', PhoneNumber='$phonenumber'
                WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["username"] = $name;
            $_SESSION["number"] = $phonenumber;
            $success = "Profile updated successfully";
        }
    }
}
?>
