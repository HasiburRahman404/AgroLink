<?php include "../CONTROL/Registration_validation.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../CSS/Registration_Create.css">
</head>
<body>

<div class="container">
    <h1>AgroLink</h1>
    <h2>Create Account</h2>

    <?php if ($success != "") { ?>
        <div class="success"><?php echo $success; ?></div>
    <?php } ?>

    <form method="post" action="">
        <label>Full Name</label>
        <input type="text" name="fullname" value="<?php echo $fullname; ?>">
        <span class="error"><?php echo $errors['fullname']; ?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $errors['email']; ?></span>

        <label>Password</label>
        <input type="password" name="password">
        <span class="error"><?php echo $errors['password']; ?></span>

        <label>Retype Password</label>
        <input type="password" name="repassword">
        <span class="error"><?php echo $errors['repassword']; ?></span>

        <button type="submit" name="submit">Create Account</button>
        <?php if ($success != ""): ?>
    <button type="button" onclick="window.location.href='Login.php'">Login</button>
<?php else: ?>
    <button type="button" disabled style="opacity:0.5; cursor:not-allowed;">Login</button>
<?php endif; ?>

        
    </form>

</div>

</body>
</html>
