<?php
// Include validation at the very top
include 'register_valid.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration - AgroLink</title>
    <link rel="stylesheet" href="userregistration.css">
    <style>
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Account</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your full name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <label>Phone Number</label>
        <input type="text" name="phonenumber" placeholder="Enter your phone number" value="<?php echo $phonenumber; ?>">
        <span class="error"><?php echo $phoneErr; ?></span>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <span class="error"><?php echo $passwordErr; ?></span>

        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" placeholder="Confirm your password">
        <span class="error"><?php echo $confirmErr; ?></span>

        <button type="submit" id="button">Register</button>


        <p class="logintext">
            Already have an account? <a href="#">Login</a>
        </p>
    </form>
</div>

</body>
</html>
