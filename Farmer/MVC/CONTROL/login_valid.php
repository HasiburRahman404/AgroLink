<?php
session_start();
include '../MODEL/Database_conn.php';

$emailErr = $passwordErr = $loginError = "";
$email = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email    = trim($_POST['email'] ?? "");
    $password = trim($_POST['password'] ?? "");

    if (empty($email)) {
        $emailErr = "Email is required";
    }

    if (empty($password)) {
        $passwordErr = "Password is required";
    }

    if (empty($emailErr) && empty($passwordErr)) {

        $conn = openConn();
        $result = getFarmerByEmail($conn, $email);

        if ($result && $result->num_rows === 1) {

            $row = $result->fetch_assoc();

            if (password_verify($password, $row['Password'])) {

                $_SESSION["username"] = $row["UserName"];
                $_SESSION["email"]    = $row["Email"];
                $_SESSION["number"]   = $row["PhoneNumber"];

                /* Remember Me */
                if (isset($_POST['remember'])) {
                    setcookie("cookie_email", $email, time() + (86400 * 30), "/");
                    setcookie("cookie_rem", "1", time() + (86400 * 30), "/");
                } else {
                    setcookie("cookie_email", "", time() - 3600, "/");
                    setcookie("cookie_rem", "", time() - 3600, "/");
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


$disp_email = !empty($email) ? $email : ($_COOKIE['cookie_email'] ?? "");
$checked = isset($_COOKIE['cookie_rem']) ? "checked" : "";
?>