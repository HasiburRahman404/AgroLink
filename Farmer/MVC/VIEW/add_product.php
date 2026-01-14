<?php
// Include validation at the top
include 'add_product_valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard - Add Product | AgroLink</title>
    <link rel="stylesheet" href="add_product.css">
    <style>
        .error { color: red; font-size: 0.9em; margin-top: 3px; display: block; }
        .success { color: green; font-size: 1em; text-align: center; margin-bottom: 15px; }
    </style>
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
            <li class="active"><a href="add_product_farmer.php">Add Product</a></li>
            <li><a href="my_products.php">My Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="earnings.php">Earnings</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="content add-product-page">

        <div class="form-box">

            <h2>Add Product</h2>

            <?php if(!empty($success)) { echo "<p class='success'>$success</p>"; } ?>
            <?php if(!empty($error)) { echo "<p class='error'>$error</p>"; } ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

                <label>Product Name</label>
                <input type="text" name="productName" placeholder="e.g., Fresh Tomatoes" value="<?php echo $productName; ?>">
                <span class="error"><?php echo $nameErr; ?></span>

                <label>Category</label>
                <select name="category">
                    <option>Select Category</option>
                    <option <?php if($category=="Vegetables") echo "selected"; ?>>Vegetables</option>
                    <option <?php if($category=="Fruits") echo "selected"; ?>>Fruits</option>
                    <option <?php if($category=="Grains") echo "selected"; ?>>Grains</option>
                    <option <?php if($category=="Dairy") echo "selected"; ?>>Dairy</option>
                </select>
                <span class="error"><?php echo $categoryErr; ?></span>

                <label>Price per Unit</label>
                <input type="text" name="price" placeholder="e.g., 5.50" value="<?php echo $price; ?>">
                <span class="error"><?php echo $priceErr; ?></span>

                <label>Available Quantity</label>
                <input type="text" name="quantity" placeholder="e.g., 150 kg" value="<?php echo $quantity; ?>">
                <span class="error"><?php echo $quantityErr; ?></span>

                <label>Description</label>
                <textarea name="description" placeholder="Describe your product..."><?php echo $description; ?></textarea>
                <span class="error"><?php echo $descriptionErr; ?></span>

                <label>Product Image</label>
                <input type="file" name="productImage">
                <span class="error"><?php echo $imageErr; ?></span>

                <button type="submit" id="button">Submit Product</button>
            </form>

        </div>

    </main>
</div>

</body>
</html>
