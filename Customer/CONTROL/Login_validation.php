<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    
     if (empty($name) || empty($password)) {
        header("Location: ../VIEW/Login.php?error=Name and Password are required");
        exit();
    }

    
    else {
        

      
        header("Location: ../VIEW/Fruits.php");
        exit();
    }

    
}

?>
