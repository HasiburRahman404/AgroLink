<?php
session_start();
include '../MODEL/Database_conn.php'; // Database connection

// Initialize variables
$emailErr = $passwordErr = $confirmPasswordErr = $successMsg = "";
$disp_email = "";

// Only process form if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $disp_email = trim($_POST['email']);
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // ===== EMAIL VALIDATION =====
    if (empty($disp_email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($disp_email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // ===== PASSWORD VALIDATION =====
    if (empty($password)) {
        $passwordErr = "New password is required";
    } elseif (strlen($password) < 6) {
        $passwordErr = "Password must be at least 6 characters";
    }

    // ===== CONFIRM PASSWORD VALIDATION =====
    if (empty($confirm_password)) {
        $confirmPasswordErr = "Confirm password is required";
    } elseif ($password !== $confirm_password) {
        $confirmPasswordErr = "Passwords do not match";
    }

    // ===== FINAL CHECK & UPDATE PASSWORD =====
    if ($emailErr == "" && $passwordErr == "" && $confirmPasswordErr == "") {

        // Escape email
        $safe_email = mysqli_real_escape_string($conn, $disp_email);

        // Check if email exists
        $sql_check = "SELECT * FROM farmer_information WHERE email='$safe_email'";
        $result = $conn->query($sql_check);

        if ($result->num_rows > 0) {
            // Email exists, update password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql_update = "UPDATE farmer_information SET password='$hashedPassword' WHERE email='$safe_email'";

            if ($conn->query($sql_update) === TRUE) {
                $successMsg = "Password updated successfully. You can now <a href='login.php'>login</a>.";
            } else {
                $successMsg = "Error updating password. Please try again.";
            }

        } else {
            $emailErr = "Email not found!";
        }
    }
}
?>
