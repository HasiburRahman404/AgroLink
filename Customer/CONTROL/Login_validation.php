<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    
    if (empty($name) || empty($password)) {
        header("Location: ../VIEW/Login.php?error=Name and Password are required");
        exit();
    }

    else {

        
        $_SESSION['username'] = $name;
        $_SESSION['login_status'] = true;

        
        setcookie("username", $name, time() + (86400), "/");
        setcookie("login_status", "true", time() + (86400), "/");

        
        header("Location: ../VIEW/Fruits.php");
        exit();
    }
}
?>
