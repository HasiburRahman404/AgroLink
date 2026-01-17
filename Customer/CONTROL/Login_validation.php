<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    // Validation
     if (empty($name) || empty($password)) {
        header("Location: ../VIEW/Login.php?error=Name and Password are required");
        exit();
    }

    
    else {
        

      
        header("Location: ../VIEW/Fruits.php");
        exit();
    }

    // যদি future এ database check করতে চাও
    // else {
    //   login success code here
    // }

}

?>
