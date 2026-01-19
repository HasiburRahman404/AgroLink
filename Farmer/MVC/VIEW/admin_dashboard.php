<?php
session_start();


if (!isset($_SESSION["email"])) {
    header("Location: ../VIEW/login.php");
    exit();}
include "../MODEL/Database_conn.php";

$conn = openConn();
$review_result = $conn->query("SELECT review FROM userreview");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard - AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/admin_dashboard.css">
</head>
<body>

<!-- TOP BAR -->
<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="../CONTROL/farmerlogout.php" class="logout">Logout</a>
</header>

<!-- MAIN LAYOUT -->
<div class="container">

    <!-- SIDEBAR -->
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
        <h1>My Products</h1>

        
        <div class="cards">
            <div class="card">
                <a href="../../../Customer/VIEW/Vegetable.php">
             <img src="../images/vegetables.jpg" alt="Vegetables">
             </a>

                <h2>Vegetables</h2>
                <p>Freshly harvested organic vegetables.</p>
            </div>

            <div class="card">
                <a href="../../../Customer/VIEW/Fruits.php">
                <img src="../images/apple1.jpg" alt="Fruits"></a>
                <h2>Fruits</h2>
                <p>Seasonal fruits straight from the farm.</p>
            </div>

            <div class="card">
                <a href="../../../Customer/VIEW/Grains.php">
                <img src="../images/rice.jpg" alt="Grains"></a>
                <h2>Grains</h2>
                <p>High-quality grains for all needs.</p>
            </div>
        </div>

        
        <div class="review-box">
            <h2>Customer Reviews</h2>

            <table class="review-table">
                <thead>
                    <tr>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($review_result && $review_result->num_rows > 0): ?>
                        <?php while ($row = $review_result->fetch_assoc()): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['review']) ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td>No reviews available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </main>

</div>

</body>
</html>
