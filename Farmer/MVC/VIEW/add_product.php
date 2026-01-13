<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="add_product.css">
</head>
<body>

<!-- Navigation -->
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.png" alt="AgroLink Logo" class="logo-img">
            AgroLink
        </div>
        <ul class="nav-links">
            <li><a href="#products">Products</a></li>
            <li><a href="#featured-seller">Sellers</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#about-box">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <a class="btn" href="#">Login</a>
            <a class="btn primary" href="#">Sign Up</a>
        </div>
    </nav>
</header>

<!-- Hero -->
<section class="hero">
    <h1>List your product for sale</h1>
    <p>Join thousands of farmers selling directly to buyers. It's fast, free, and easy!</p>
</section>

<!-- Add Product Section -->
<section class="add-product">
    <div class="container">
        <h2>Add Your Product</h2>

        <form>
            <label>Product Name</label>
            <input type="text" placeholder="e.g., Fresh Tomatoes">

            <label>Category</label>
            <select>
                <option>Select Category</option>
                <option>Vegetables</option>
                <option>Fruits</option>
                <option>Grains</option>
                <option>Dairy</option>
            </select>

            <label>Price per Unit</label>
            <input type="text" placeholder="e.g., 5.50">

            <label>Available Quantity (kg/dozen/etc)</label>
            <input type="text" placeholder="e.g., 150">

            <label>Product Description</label>
            <textarea placeholder="Describe your product..."></textarea>

            <label>Product Image</label>
            <input type="file">

            <button type="submit" class="primary-btn">Submit Product</button>
        </form>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>Dhaka, Bangladesh</p>
    <p>+880 1978621422</p>
    <p>agrolink@gmail.com</p>
</section>

<footer>
    <p>© 2025 AgroLink. All rights reserved.</p>
</footer>

</body>
</html>
