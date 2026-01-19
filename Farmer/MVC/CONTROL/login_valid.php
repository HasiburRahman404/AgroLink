<?php
session_start();
include '../MODEL/Database_conn.php';


$emailErr = $passwordErr = "";
$email = "";
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        $emailErr = "Email is required";
    }

    if (empty($password)) {
        $passwordErr = "Password is required";
    }

 if (empty($emailErr) && empty($passwordErr)) {

    $conn = openConn(); // use your existing function

    $result = getFarmerByEmail($conn, $email);

    if ($result && $result->num_rows === 1) {

        $row = $result->fetch_assoc();
        $db_password = $row['Password']; // column name must match DB

        if (password_verify($password, $db_password)) {

            // Set session values
            $_SESSION["username"] = $row["UserName"];
            $_SESSION["email"]    = $row["Email"];
            $_SESSION["number"]   = $row["PhoneNumber"];

            // Remember me
            if (isset($_POST['remember'])) {
                setcookie("cookie_email", $email, time() + (60 * 60 * 24 * 30), '/');
                setcookie("cookie_rem", "1", time() + (60 * 60 * 24 * 30), '/');
            }

            header("Location: ../VIEW/admin_dashboard.php");
            exit();

        } else {
            $loginError = "Incorrect password!";
        }

    } else {
        $loginError = "Email not found!";
    }

    $conn->close();
}

}
?>
