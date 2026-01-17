<?php
include "../MODEL/Database_conn.php"; // $conn

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

        $email_db = $conn->real_escape_string($email);
        $problem_db = $conn->real_escape_string($problem);

        $sql = "INSERT INTO farmers_help (Email, Description) 
                VALUES ('$email_db', '$problem_db')";

        if ($conn->query($sql) === TRUE) {
            $success = "Problem submitted successfully!";
            $email = $problem = "";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}

// ===== FETCH ALL PROBLEMS =====
$allProblems = [];
$sql_fetch = "SELECT * FROM farmers_help"; // fetch all
$result = $conn->query($sql_fetch);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $allProblems[] = $row;
    }
} else {
    $error = "Error fetching problems: " . $conn->error;
}
?>
