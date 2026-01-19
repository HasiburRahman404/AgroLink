<?php
session_start();
require_once "../MODEL/database_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    
    if (empty($email) || empty($password)) {
        header("Location: ../VIEW/Login.php?error=Email and Password are required");
        exit();
    }

    
    $sql = "SELECT * FROM customer WHERE Email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        header("Location: ../VIEW/Login.php?error=Database error");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

   
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        
        if ($password == $row['Password']) {

            $_SESSION['name']  = $row['Name'];
            $_SESSION['email'] = $row['Email'];

           
            if (isset($_POST['remember'])) {
                setcookie("cookie_email", $email, time() + (86400 * 30), "/");
            }

            header("Location: ../VIEW/Fruits.php");
            exit();

        } else {
            header("Location: ../VIEW/Login.php?error=Incorrect Password");
            exit();
        }

    } else {
        header("Location: ../VIEW/Login.php?error=User not found");
        exit();
    }
}
?>
