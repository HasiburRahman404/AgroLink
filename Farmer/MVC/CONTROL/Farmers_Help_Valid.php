<?php
include "../MODEL/Database_conn.php";

$email = $problem = "";
$emailErr = $problemErr = "";
$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_problem"])) {

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["email"]);
        if (!preg_match("/^(?=.*[@])(?=.*[.]).+$/", $email)) {
            $emailErr = "Email must contain @ and .";
        }
    }

    // Validate Problem
    if (empty($_POST["problem"])) {
        $problemErr = "Problem description is required";
    } else {
        $problem = trim($_POST["problem"]);
    }

    // Insert into database if no errors
    if (empty($emailErr) && empty($problemErr)) {
        $email_db = $conn->real_escape_string($email);
        $problem_db = $conn->real_escape_string($problem);

        $sql = "INSERT INTO farmers_help (Email, Description)
                VALUES ('$email_db', '$problem_db')";

        if ($conn->query($sql)) {
            $success = "Problem submitted successfully!";
            $email = $problem = "";
        } else {
            $error = "Database error!";
        }
    }
}
?>
