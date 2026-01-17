<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ../VIEW/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Profile - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/farmerprofile.css">
</head>
<body>


<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="../CONTROL/farmerlogout.php" class="logout">Logout</a>
</header>

<div class="layout">

  
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
        <div class="profile-wrapper">
            <h1> My Profile</h1>

            <div class="profile-card">
                <div class="profile-row">
                    <label>Name</label>
                    <span><?= htmlspecialchars($_SESSION["username"]); ?></span>
                </div>

                <div class="profile-row">
                    <label>Email</label>
                    <span><?= htmlspecialchars($_SESSION["email"]); ?></span>
                </div>

                <div class="profile-row">
                    <label>Phone Number</label>
                    <span><?= htmlspecialchars($_SESSION["number"]); ?></span>
                </div>

                <div class="profile-row">
                    <a href="editprofile.php" class="edit-btn">Edit Profile</a>
                </div>
            </div>
        </div>
    </main>

</div>

</body>
</html>
