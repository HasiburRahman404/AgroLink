

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password - AgroLink</title>
    <link rel="stylesheet" href="../CSS STYLES/Forget_password.css">
    <style>
        .error { color: red; font-size: 13px; margin-top: 3px; }
        .success { color: green; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>

<div class="login-page">

    <!-- LEFT GREEN SECTION -->
    <div class="left-panel">
        <div class="logo-container">
            <img src="../images/logo.png" alt="AgroLink Logo" class="logo">
            <h1>AgroLink</h1>
        </div>
        <p>Connecting Farmers and Customers</p>
    </div>

    <!-- RIGHT FORGET PASSWORD SECTION -->
    <div class="right-panel">
        <div class="container">
            <h2>Reset Password</h2>

            <!-- Include validation file -->
            <?php include '../CONTROL/forget_password_valid.php'; ?>

            <form method="post" action="">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($disp_email ?? ''); ?>">
                <span class="error"><?php echo $emailErr ?? ''; ?></span>

                <label>New Password</label>
                <input type="password" name="password" placeholder="Enter your new password">
                <span class="error"><?php echo $passwordErr ?? ''; ?></span>

                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm new password">
                <span class="error"><?php echo $confirmPasswordErr ?? ''; ?></span>

                <span class="success"><?php echo $successMsg ?? ''; ?></span>

                <button type="submit" id="button">Reset Password</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
