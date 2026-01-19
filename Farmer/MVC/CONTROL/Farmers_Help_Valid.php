<?php
include "../MODEL/Database_conn.php";

$email = $problem = "";
$emailErr = $problemErr = "";
$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_problem"])) {

 
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["email"]);
        if (!preg_match("/^(?=.*[@])(?=.*[.]).+$/", $email)) {
            $emailErr = "Email must contain @ and .";
        }
    }

 
    if (empty($_POST["problem"])) {
        $problemErr = "Problem description is required";
    } else {
        $problem = trim($_POST["problem"]);
    }

   
    if (empty($emailErr) && empty($problemErr)) {

        $conn = openConn(); 

        $result = addFarmerProblem($conn, $email, $problem);

        if ($result === TRUE) {
            $success = "Problem submitted successfully!";
            $email = $problem = "";  // Clear fields
        } else {
            $error = "Database error: " . $conn->error;
        }

        $conn->close();
    }
}
?>
