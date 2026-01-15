<?php
// Include database connection
include "../MODEL/Database_conn.php";

// Fetch all products
$sql = "SELECT * FROM products ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Products - AgroLink Farmer</title>
    <link rel="stylesheet" href="../CSS STYLES/my_product.css">
</head>
<body>

<!-- ===== TOP NAVBAR ===== -->
<header class="topbar">
    <div class="logo">AgroLink <span>Farmer</span></div>
    <a href="#" class="logout">Logout</a>
</header>

<!-- ===== MAIN CONTAINER ===== -->
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
            <div>
                <a href="add_product_farmer.php" class="btn">Add Product</a>
            </div>
        </div>

        <table class="product-table">
            <tr>
                
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (৳)</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Image</th>
                
            </tr>

            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                      
                        <td><?php echo htmlspecialchars($row['ProductName']); ?></td>
                        <td><?php echo htmlspecialchars($row['Category']); ?></td>
                        <td><?php echo htmlspecialchars($row['Price']); ?></td>
                        <td><?php echo htmlspecialchars($row['Quantity']); ?></td>
                        <td><?php echo htmlspecialchars($row['Description']); ?></td>
                        <td>
                            <?php if(!empty($row['Image'])): ?>
                                <img src="uploads/<?php echo $row['Image']; ?>" alt="Product Image">
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" style="text-align:center;">No products added yet.</td>
                </tr>
            <?php endif; ?>

        </table>

    </main>
</div>

</body>
</html>
