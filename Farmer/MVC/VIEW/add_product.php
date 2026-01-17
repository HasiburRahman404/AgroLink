<?php
include '../CONTROL/add_product_valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer Dashboard - Add Product | AgroLink</title>
    <link rel="stylesheet" href="../CSSSTYLES/add_product.css">
    <style>
        .error { color: red; font-size: 0.9em; margin-top: 3px; display: block; }
        .success { color: green; font-size: 1em; text-align: center; margin-bottom: 15px; }
    </style>
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
            <li><a href="my_products.php">My Products</a></li>
            <li class="active"><a href="add_product.php">Add Product</a></li>
            <li><a href="Farmers_help.php">Farmers Help</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="earnings.php">Earnings</a></li>
        </ul>
    </aside>

    <main class="content add-product-page">

        <div class="form-box">

            <h2>Add Product</h2>

            <?php if(!empty($success)) { echo "<p class='success'>$success</p>"; } ?>
            <?php if(!empty($error)) { echo "<p class='error'>$error</p>"; } ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

                <label>Product Name</label>
                <input type="text" name="productName" placeholder="Enter product name" value="<?php echo $productName; ?>">
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
                <input type="text" name="price" placeholder="Price" value="<?php echo $price; ?>">
                <span class="error"><?php echo $priceErr; ?></span>

                <label>Available Quantity</label>
                <input type="text" name="quantity" placeholder="Quantity" value="<?php echo $quantity; ?>">
                <span class="error"><?php echo $quantityErr; ?></span>

                <label>Description</label>
                <textarea name="description" placeholder="Describe your product..."><?php echo $description; ?></textarea>
                <span class="error"><?php echo $descriptionErr; ?></span>

                <label>Product Image</label>
                <input type="file" name="productImage">
                <span class="error"><?php echo $imageErr; ?></span>

                <button type="submit" class="btn">Submit Product</button>
            </form>

        </div>

    </main>
</div>

</body>
</html>
