<?php

$errors = [
    'fullname'   => '',
    'username'   => '',
    'email'      => '',
    'password'   => '',
    'repassword' => ''
    

];
$success = "";


$fullname = $username = $email = '';


if (isset($_POST['submit'])) {

    
    $fullname   = trim($_POST['fullname']);
    $username   = trim($_POST['username']);
    $email      = trim($_POST['email']);
    $password   = $_POST['password'];
    $repassword = $_POST['repassword'];

    /*  Full Name  */
    if ($fullname == "") {
    $errors['fullname'] = "Full name is required.";
    } elseif (!preg_match("/^[A-Za-z]+( [A-Za-z]+)+$/", $fullname)) {
    $errors['fullname'] = "Name must contain at least two words using letters only.";
    }


    /*  Username  */
    /*
    if ($username == "") {
        $errors['username'] = "Username is required.";
    } elseif (!preg_match("/^[A-Za-z0-9_]{4,15}$/", $username)) {
        $errors['username'] = "Username must be 4–15 characters.";
    }
*/
    /* Email */
    if ($email == "") {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address.";
    }

    /*  Password  */
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

    /*  Retype Password  */
    if ($repassword == "") {
        $errors['repassword'] = "Please retype password.";
    } elseif ($password !== $repassword) {
        $errors['repassword'] = "Passwords do not match.";
    }

    
    if (
    $errors['fullname'] == "" &&
    $errors['username'] == "" &&
    $errors['email'] == "" &&
    $errors['password'] == "" &&
    $errors['repassword'] == ""
) {
    $success = "Registration Successful!";
        
        $fullname = $username = $email = "";
}

}
?>
