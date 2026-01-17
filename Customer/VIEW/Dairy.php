
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Dairy.css">
</head>
<body>

<!-- Top Header -->
<header class="top-header">
    <div class="logo">
        <img src="../images/logo.jpg" alt="AgroLink Logo">
        AgroLink</div>
    <div class="header-icons">
        <span>🔍</span>
        <span>🛒</span>
        <span>👤</span>
    </div>
</header>

<!-- Navigation Bar -->
<nav class="nav-bar">

 <div class="nav-links">
   <!-- Using inline onclick -->
<button class="verify-btn" onclick="window.location.href='../VIEW/home_page.php'">Home</button>

    <button class="verify-btn">Products</button>
    <button class="verify-btn">Sellers</button>
    <button class="verify-btn">Categories</button>
    <button class="verify-btn">About</button>
    <button class="verify-btn">About Us</button>
</div>


    <div class="nav-buttons">
        <button class="verify-btn">Become a Verified Supplier</button>
        <button class="partner-btn">Our Partners</button>
    </div>

</nav>


<!-- Main Content -->
<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Categories</h3>
        <ul>
            <li>
    <button onclick="location.href='vegetable.php'" class="verify-btn">
        Vegetable
    </button>
</li>

            <li><button onclick="location.href='Fruits.php'" class="verify-btn">fruits</li>
</button>
            <li><button onclick="location.href='Grains.php'" class="verify-btn">Grains</li>
</button>
        </ul>
    </aside>

    <!-- Products Section -->
    <main class="products-section">
        <h1>Shop</h1>
        <h2 class="tagline">Quality dairy, traditional taste, trusted nutrition.</h2>

        <div class="products-grid">

    <!-- Product 1 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Milk1.jpg" alt="Milk">
        <p class="category">Milk</p>
        <h4>Milk</h4>
        <p class="price"><del>90.00৳</del> 85.00৳</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Coconut">
            <input type="hidden" name="price" value="85">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Aarong-dairy-butter.jpg" alt="Aarong-dairy-butter">
        <p class="category">Aarong-dairy-butter</p>
        <h4>Aarong-dairy-butter Price</h4>
        <p class="price"><del>280.00৳</del> 255.00৳/kg</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Apple">
            <input type="hidden" name="price" value="255">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    

    <!-- Product 3 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Nescafe.jpg" alt="Nescafe">
        <p class="category">Nescafe</p>
        <h4>Nescafe</h4>
        <p class="price"><del>165.00৳</del> 160.00৳</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Watermelon">
            <input type="hidden" name="price" value="160">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    
   

    <!-- Product 4 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Cheese.jpg" alt="Cheese">
        <p class="category">Cheese</p>
        <h4>Cheese</h4>
        <p class="price"><del>265.00৳</del> 260.00৳/kg</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Mango">
            <input type="hidden" name="price" value="260">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 5 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Aarong-Sour-yogurt.jpg" alt="Aarong Sour yogurt">
        <p class="category">Aarong Sour yogurt</p>
        <h4>Aarong Sour yogurt</h4>
        <p class="price"><del>95.00৳</del> 85.00৳/kg</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Guava">
            <input type="hidden" name="price" value="85">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

</div>

    </main>
</div>

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
