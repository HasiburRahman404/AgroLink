<?php include "../CONTROL/Registration_validation.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../CSS/CreateA.css">
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
<!--
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
    <span class="error"><?php echo $errors['username']; ?></span>
-->
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
</form>

</div>

</body>
</html>
