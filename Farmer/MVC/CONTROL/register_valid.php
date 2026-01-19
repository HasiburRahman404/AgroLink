<?php

include "../MODEL/Database_conn.php"; 


$name = $email = $phonenumber = $password = $confirmpassword = "";
$nameErr = $emailErr = $phoneErr = $passwordErr = $confirmErr = "";
$success = $error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
    if (empty($_POST["name"])) {
        $nameErr = "Full Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

  
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        if (!preg_match("/^(?=.*[@])(?=.*[.]).+$/", $email)) {
            $emailErr = "Email must contain @ and .";
        }
    }

    
    if (empty($_POST["phonenumber"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
        if (!preg_match("/^[0-9]{11}$/", $phonenumber)) {
            $phoneErr = "Enter a valid 11-digit phone number";
        }
    }

   
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

   
    if (empty($_POST["confirmpassword"])) {
        $confirmErr = "Confirm your password";
    } else {
        $confirmpassword = $_POST["confirmpassword"];
        if ($password !== $confirmpassword) {
            $confirmErr = "Passwords do not match";
        }
    }

   if (
    empty($nameErr) &&
    empty($emailErr) &&
    empty($phoneErr) &&
    empty($passwordErr) &&
    empty($confirmErr)
) {

    $conn = openConn(); 

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $result = addCustomer($conn, $name, $email, $phonenumber, $hashPassword);

    if ($result === TRUE) {
        $success = "Registration Complete";

        $name = $email = $phonenumber = $password = $confirmpassword = "";
    } else {
        $error = "Error: " . $conn->error;
    }

    $conn->close();
}

}
?>

