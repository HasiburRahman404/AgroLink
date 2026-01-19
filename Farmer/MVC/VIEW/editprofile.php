<?php

include "../CONTROL/editprofile_valid.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/editprofile.css">
    <style>
        .error { color: red; font-size: 13px; }
        .success { color: green; font-size: 14px; }
    </style>
</head>
<body>

<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="farmerlogout.php" class="logout">Logout</a>
</header>

<div class="layout">

    <aside class="sidebar">
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="farmerprofile.php">Profile</a></li>
             <li class="active"><a href="my_products.php">My Products</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="Farmers_help.php">Farmers Help</a></li>
            <li><a href="order.php">Orders</a></li>
            
        </ul>
    </aside>

    <main class="content">
        <h1> Update Profile</h1>

      
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="profile-card">

            <?php if (!empty($success)) { ?>
                <div class="success"><?php echo $success; ?></div>
            <?php } ?>

            <div class="profile-row">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter full name"
                       value="<?php echo htmlspecialchars($name); ?>">
                <div class="error"><?php echo $nameErr; ?></div>
            </div>

            <div class="profile-row">
                <label>Phone Number</label>
                <input type="text" name="phonenumber" placeholder="Enter phone number"
                       value="<?php echo htmlspecialchars($phonenumber); ?>">
                <div class="error"><?php echo $phoneErr; ?></div>
            </div>

            <button type="submit" class="btn">Update Profile</button>

        </form>
    </main>

</div>

</body>
</html>
