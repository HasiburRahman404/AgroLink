<?php
include '../CONTROL/login_valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Login - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/login.css">
    <style>
        .error { color: red; font-size: 13px; margin: 5px 0; }
    </style>
</head>
<body>

<div class="login-page">

    <!-- LEFT PANEL -->
    <div class="left-panel">
        <div class="logo-container">
            <img src="../images/logo.png" alt="AgroLink Logo" class="logo">
            <h1>AgroLink</h1>
        </div>
        <p>Connecting Farmers and Customers</p>
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-panel">
        <div class="container">
            <h2>Login</h2>

            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <label>Email</label>
                <input type="email" name="email"
                       value="<?php echo htmlspecialchars($disp_email); ?>">
                <span class="error"><?php echo $emailErr; ?></span>

                <label>Password</label>
                <input type="password" name="password"
                       placeholder="Enter your password">
                <span class="error"><?php echo $passwordErr; ?></span>

                <div class="remember">
                    <input type="checkbox" name="remember" value="1" <?php echo $checked; ?>>
                    <label>Remember me</label>
                </div>

                <div>
                    <a href="Forget_password.php">Forget password?</a>
                </div>
                  
            <?php if (!empty($loginError)) { ?>
                <div class="error"><?php echo $loginError; ?></div>
            <?php } ?>

                <button type="submit" id="button">Login</button>
                

                <p class="logintext">
                    Don’t have an account?
                    <a href="userregistration.php">Register</a>
                </p>

            </form>
        </div>
    </div>

</div>

</body>
</html>
