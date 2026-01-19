<?php
include "../MODEL/database_connection.php";

$errors = [
    'fullname'   => '',
    'email'      => '',
    'password'   => '',
    'repassword' => ''
];

$success = "";

$fullname = $username = $email = '';

if (isset($_POST['submit'])) {

    $fullname   = trim($_POST['fullname']);
    $email      = trim($_POST['email']);
    $password   = $_POST['password'];
    $repassword = $_POST['repassword'];

    
    if ($fullname == "") {
        $errors['fullname'] = "Full name is required.";
    } elseif (!preg_match("/^[A-Za-z]+( [A-Za-z]+)+$/", $fullname)) {
        $errors['fullname'] = "Name must contain at least two words using letters only.";
    }

    
    if ($email == "") {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address.";
    }

    
    if ($password == "") {
        $errors['password'] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Minimum 8 characters required.";
    } elseif (!preg_match("/[0-9]/", $password)) {
        $errors['password'] = "Must include a number.";
    } elseif (!preg_match("/[A-Za-z]/", $password)) {
        $errors['password'] = "Must include a letter.";
    } elseif (!preg_match("/[@$!%*#?&]/", $password)) {
        $errors['password'] = "Must include a special character.";
    }


    if ($repassword == "") {
        $errors['repassword'] = "Please retype password.";
    } elseif ($password !== $repassword) {
        $errors['repassword'] = "Passwords do not match.";
    }

    
    if (
        
        $errors['fullname'] == "" &&
        $errors['email'] == "" &&
        $errors['password'] == "" &&
        $errors['repassword'] == ""
    ) {

        
        $sql = "INSERT INTO customer (Name, Email, Password)
                VALUES ('$fullname', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $success = "Registration Successful!";
            $fullname = $email = "";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>
