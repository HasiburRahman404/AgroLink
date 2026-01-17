
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
    
      <!--<a href="#">Courses</a>
      <a href="#">About us</a>
      <a href="#">Contact us</a>
      <button class="login-btn">LOG IN</button>-->
    </nav>
  </header>

 
  <div class="login-container">
    <div class="login-box">

    
      <div class="login-left">
        <img src="../images/agriculture-background.jpg" alt="Login Image">
        <div class="left-text">
          <h2>Welcome Back</h2>
          <p>Please log in using your personal information to stay connected with us.</p>
        </div>
      </div>

      
      <div class="login-right">
        <span class="close">&times;</span>
        <h2>LOGIN</h2>

        <form action="../CONTROL/Login_validation.php" method="POST">

  <!-- Error message -->
  <?php
    if (isset($_GET['error'])) {
      echo '<p class="error-msg">'. $_GET['error'] .'</p>';
    }
  ?>

  <input type="text" name="name" placeholder="Name">
  <input type="password" name="password" placeholder="Password">

  <a href="#" class="forgot">Forgot password?</a>

  <button type="submit" class="submit-btn">Log In</button>

</form>

        <p class="signup-text">
          Don’t have an account? <a href="#">Signup</a>
        </p>
      </div>

    </div>
  </div>

</body>
</html>
