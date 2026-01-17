<?php
// Always start session if validation uses it
session_start();

// Include validation / logic file
include '../CONTROL/my_product_valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Products - AgroLink Farmer</title>

    <!-- FIXED CSS PATH -->
    <link rel="stylesheet" href="../CSS STYLES/my_product.css">
</head>
<body>

<!-- ===== TOPBAR ===== -->
<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="../CONTROL/farmerlogout.php" class="logout">Logout</a>
</header>

<div class="container">

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
        <ul>
            <li><a href="farmer_dashboard.php">Dashboard</a></li>
            <li><a href="add_product_farmer.php">Add Product</a></li>
            <li class="active"><a href="my_products.php">My Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="earnings.php">Earnings</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="content">

        <div class="my-products-header">
            <h1>My Products</h1>
            <a href="add_product_farmer.php" class="btn">Add Product</a>
        </div>

        <table class="product-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price (৳)</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['ProductName']) ?></td>
                        <td><?= htmlspecialchars($row['Category']) ?></td>
                        <td><?= htmlspecialchars($row['Price']) ?></td>
                        <td><?= htmlspecialchars($row['Quantity']) ?></td>
                        <td><?= htmlspecialchars($row['Description']) ?></td>

                        <td>
                            <?php if (!empty($row['Image'])): ?>
                                <img src="uploads/<?= htmlspecialchars($row['Image']) ?>" alt="Product Image">
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>

                        <td>
                            <form method="post" action="my_products.php">
                                <input type="hidden" name="product_name"
                                       value="<?= htmlspecialchars($row['ProductName']) ?>">
                                <button type="submit" name="remove_product" class="remove-btn">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align:center;">
                        No products added yet.
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

    </main>
</div>

</body>
</html>
