<?php
// Include database connection
include "Database_conn.php"; // your previous connection format

// Initialize variables
$name = $email = $phonenumber = $password = $confirmpassword = "";
$nameErr = $emailErr = $phoneErr = $passwordErr = $confirmErr = "";
$success = $error = "";

// Only run validation if form is submitted
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

    // ---------- Email ----------
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        if (!preg_match("/^(?=.*[@])(?=.*[.]).+$/", $email)) {
            $emailErr = "Email must contain @ and .";
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

    // ---------- Password ----------
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

    // ---------- Confirm Password ----------
    if (empty($_POST["confirmpassword"])) {
        $confirmErr = "Confirm your password";
    } else {
        $confirmpassword = $_POST["confirmpassword"];
        if ($password !== $confirmpassword) {
            $confirmErr = "Passwords do not match";
        }
    }

    // ---------- Insert into Database ----------
    if (
        empty($nameErr) &&
        empty($emailErr) &&
        empty($phoneErr) &&
        empty($passwordErr) &&
        empty($confirmErr)
    ) {

        // Hash password
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        // Your preferred format using $conn->query()
        $sql = "INSERT INTO farmer_information (UserName, Email, PhoneNumber, password) 
                VALUES ('$name', '$email', '$phonenumber', '$hashPassword')";

        if ($conn->query($sql) === TRUE) {
            $success = "Registration Complete";
            // Clear form fields
            $name = $email = $phonenumber = $password = $confirmpassword = "";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>
