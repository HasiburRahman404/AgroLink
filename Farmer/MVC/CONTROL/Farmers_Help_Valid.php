<?php
// Include database connection (your previous format)
include "Database_conn.php"; // make sure this file defines $conn

// ===== INITIALIZE VARIABLES =====
$email = $problem = "";
$emailErr = $problemErr = "";
$success = $error = "";

// ===== FORM SUBMISSION =====
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---------- Email ----------
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        if (!preg_match("/^(?=.*[@])(?=.*[.]).+$/", $email)) {
            $emailErr = "Email must contain @ and .";
        }
    }

    // ---------- Problem ----------
    if (empty($_POST["problem"])) {
        $problemErr = "Problem description is required";
    } else {
        $problem = htmlspecialchars(trim($_POST["problem"]));
        
    }

    // ---------- Insert into Database ----------
    if (empty($emailErr) && empty($problemErr)) {

        // Escape input for safety
        $email_db = $conn->real_escape_string($email);
        $problem_db = $conn->real_escape_string($problem);

        $sql = "INSERT INTO farmers_help (Email, Description) 
                VALUES ('$email_db', '$problem_db')";

        if ($conn->query($sql) === TRUE) {
            $success = "Problem submitted successfully!";
            // Clear form fields
            $email = $problem = "";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>
