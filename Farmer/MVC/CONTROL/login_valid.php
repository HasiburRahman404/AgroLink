<?php
session_start();
include 'Database_conn.php';

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
        $sql = "SELECT password FROM farmer_information WHERE Email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                // Session variables
                $_SESSION['email'] = $email;
               // $_SESSION['loggedin'] = true;

                header(); // Redirect after login
                exit();
            } else {
                $loginError = "Incorrect password!";
            }
        } else {
            $loginError = "Email not found!";
        }
    }
}
?>
