<?php

include "../CONTROL/forget_validation.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password - AgroLink</title>
    <link rel="stylesheet" href="../CSS/forget.css">

    <style>
        .error { color: red; font-size: 13px; }
        .success { color: green; font-size: 14px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Reset Your Password</h2>

    <form method="POST" action="">
        
        <label>Email</label>
        <input type="email" name="email"
               value="<?php echo htmlspecialchars($disp_email ?? ''); ?>"
               placeholder="Enter your email">
        <span class="error"><?php echo $emailErr ?? ''; ?></span>

        <label>New Password</label>
        <input type="password" name="password" placeholder="Enter new password">
        <span class="error"><?php echo $passwordErr ?? ''; ?></span>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm password">
        <span class="error"><?php echo $confirmPasswordErr ?? ''; ?></span>

        <span class="success"><?php echo $successMsg ?? ''; ?></span>

        <button type="submit">Reset Password</button>
    </form>
</div>

</body>
</html>
