<?php
session_start();
include '../MODEL/database_connection.php';


$emailErr = $passwordErr = $confirmPasswordErr = $successMsg = "";
$disp_email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $disp_email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    
    if (empty($disp_email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($disp_email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    
    if (empty($password)) {
    $passwordErr = "New password is required";
     } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
    $passwordErr = "Password must be at least 8 characters,one letter, one number,one special character";
    }


    
    if (empty($confirm_password)) {
        $confirmPasswordErr = "Confirm password is required";
    } elseif ($password !== $confirm_password) {
        $confirmPasswordErr = "Passwords do not match";
    }

    
    if ($emailErr == "" && $passwordErr == "" && $confirmPasswordErr == "") {

        $safe_email = mysqli_real_escape_string($conn, $disp_email);

        $check_sql = "SELECT * FROM customer WHERE email='$safe_email'";
        $result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($result) > 0) {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE customer 
                           SET password='$hashedPassword' 
                           WHERE email='$safe_email'";

            if (mysqli_query($conn, $update_sql)) {
                $successMsg = "Password updated successfully. <a href='login.php'>Login now</a>";
            } else {
                $successMsg = "Something went wrong. Try again!";
            }

        } else {
            $emailErr = "Email not found!";
        }
    }
}
?>
