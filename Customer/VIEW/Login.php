<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/Login.css">
</head>
<body>

<header class="navbar">
    <div class="logo">
        <img src="../images/logo.jpg" alt="AgroLink Logo">
        <span>AgroLink</span>
    </div>

    <nav>
        <a href="home_page.php">Home</a>
    </nav>
</header>

<div class="login-container">
    <div class="login-box">

        
        <div class="login-left">
    <img id="slideshow" src="../images/agriculture-background.jpg" alt="Login Image">
    <div class="left-text">
        <h2>Welcome Back</h2>
        <p>Please log in using your personal information.</p>
    </div>
</div>

<script src="../JS/slideshow.js"></script>


      
        <div class="login-right">
            <h2>LOGIN</h2>

            
            <?php
            if (isset($_GET['error'])) {
                echo '<p class="error-msg">' . $_GET['error'] . '</p>';
            }
            ?>

            <form action="../CONTROL/Login_validation.php" method="POST">

                
                <input type="email" name="email" placeholder="Email" required>

                
                <input type="password" name="password" placeholder="Password" required>

                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>

                <a href="forget.php" class="forgot">Forgot password?</a>

                <button type="submit" class="submit-btn">Log In</button>

            </form>

            <p class="signup-text">
                Don’t have an account? <a href="Registration_Create.php">Signup</a>
            </p>
        </div>

    </div>
</div>

</body>
</html>
