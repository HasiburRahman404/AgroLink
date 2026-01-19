<?php
include '../CONTROL/my_product_valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Products - AgroLink Farmer</title>
    <link rel="stylesheet" href="../CSSSTYLES/my_product.css">
</head>
<body>

<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="../CONTROL/farmerlogout.php" class="logout">Logout</a>
</header>

<div class="container">

    
    <aside class="sidebar">
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="farmerprofile.php">Profile</a></li>
             <li ><a href="my_products.php">My Products</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="Farmers_help.php">Farmers Help</a></li>
            <li><a href="order.php">Orders</a></li>
            
           
        </ul>
    </aside>

   
    <main class="content">

       
        <div class="my-products-header">
            <h1>My Products</h1>

            <div style="display: flex; gap: 10px; align-items: center;">

                
                <form method="post" action="my_products.php" style="display: flex; gap: 10px;">
                    <input type="number" name="discount" placeholder="Discount %" min="1" max="90" required>
                    <button type="submit" name="apply_discount" class="btn">Discount</button>
                </form>

                
                <form method="post" action="my_products.php" style="display: flex; gap: 5px;">
                    <input type="text" name="search" placeholder="Search Product" value="<?= htmlspecialchars($searchTerm) ?>" required>
                    <button type="submit" name="search_product" class="btn">Search</button>
                </form>

                
                <a href="add_product.php" class="btn">Add Product</a>
            </div>
        </div>

       
        <table class="product-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price (tk)</th>
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
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($row['ProductName']) ?>">
                                <button type="submit" name="remove_product" class="remove-btn">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align:center;">No products added yet.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

    </main>
</div>

</body>
</html>
