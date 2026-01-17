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
    <link rel="stylesheet" href="../CSS STYLES/farmerprofile.css">
</head>
<body>

<!-- ===== TOPBAR ===== -->
<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="../CONTROL/farmerlogout.php" class="logout">Logout</a>
</header>

<div class="layout">

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
        <ul>
            <li onclick="location.href='admin_dashboard.php'">Dashboard</li>
            <li onclick="location.href='my_products.php'">My Products</li>
            <li onclick="location.href='orders.php'">Orders</li>
            <li onclick="location.href='farmers_help.php'">Farmers Help</li>
            <li class="active">Profile</li>
        </ul>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="content">
        <div class="profile-wrapper">
            <h1>👤 My Profile</h1>

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
