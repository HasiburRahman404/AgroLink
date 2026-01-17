<?php
include '../CONTROL/Farmers_Help_Valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Help Hub - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/Farmers_Help.css">
    <style>
        .error { color: red; font-size: 13px; }
        .success { color: green; font-size: 14px; margin-bottom: 10px; }
    </style>
</head>
<body>

<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="#" class="logout">Logout</a>
</header>

<div class="container">

    <aside class="sidebar">
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="farmerprofile.php">Profile</a></li>
             <li class="active"><a href="my_products.php">My Products</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="Farmers_help.php">Farmers Help</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="earnings.php">Earnings</a></li>
        </ul>
    </aside>

    <main class="content">
        <h1>🌾 Farmer Help Hub</h1>

        <?php 
        if (!empty($success)) echo "<p class='success'>$success</p>";
        if (!empty($error)) echo "<p class='error'>$error</p>";
        ?>

        <div class="help-form">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>

                <label>Problem Description</label>
                <textarea name="problem" rows="4"><?php echo $problem; ?></textarea>
                <span class="error"><?php echo $problemErr; ?></span>

                <button type="submit">Submit Problem</button>
            </form>
        </div>

       
        

    </main>

</div>

</body>
</html>
