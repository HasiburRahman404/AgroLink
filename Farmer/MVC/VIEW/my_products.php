<?php

// Include the validation file at the very top
include '../CONTROL/my_product_valid.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Products - AgroLink Farmer</title>
    <link rel="stylesheet" href="../CSS STYLES/my_product.css">
</head>
<body>

<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="#" class="logout">Logout</a>
</header>

<div class="container">

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

    <main class="content">

        <div class="my-products-header">
            <h1>My Products</h1>
            <a href="add_product_farmer.php" class="btn">Add Product</a>
        </div>

        <table class="product-table">
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (৳)</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['ProductName']); ?></td>
                        <td><?php echo htmlspecialchars($row['Category']); ?></td>
                        <td><?php echo htmlspecialchars($row['Price']); ?></td>
                        <td><?php echo htmlspecialchars($row['Quantity']); ?></td>
                        <td><?php echo htmlspecialchars($row['Description']); ?></td>

                        <td>
                            <?php if (!empty($row['Image'])): ?>
                                <img src="uploads/<?php echo $row['Image']; ?>" width="80">
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>

                        <td>
                            <form method="post" action="my_products.php">
                                <input type="hidden" name="product_name"
                                       value="<?php echo $row['ProductName']; ?>">
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

        </table>

    </main>
</div>

</body>
</html>
