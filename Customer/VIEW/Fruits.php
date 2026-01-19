<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AgroLink - Fruits</title>
    <link rel="stylesheet" href="../CSS/fruits.css">
</head>
<body>


<header class="top-header">
    <div class="logo">
        <img src="../images/logo.jpg" alt="AgroLink Logo">
        AgroLink
    </div>

    
    <div class="header-icons" style="display: flex; align-items: center; gap: 10px;">
    <!-- Cart Icon -->
    <a href="Purses.php" class="cart-icon">🛒</a>

    <!-- Logout Button -->
    <form action="../VIEW/home_page.php" method="GET">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</header>

<!-- Navigation Bar -->
<nav class="nav-bar">
    <div class="nav-links">
        <a class="verify-btn" href="../VIEW/home_page.php">Home</a>
        <a class="verify-btn" href="../VIEW/home_page.php#products">Products</a>
        <a class="verify-btn" href="../VIEW/home_page.php#featured-seller">Sellers</a>
        <a class="verify-btn" href="../VIEW/home_page.php#categories">Categories</a>
        <a class="verify-btn" href="../VIEW/home_page.php#about-box">About</a>
        <a class="verify-btn" href="../VIEW/home_page.php#contact">About Us</a>
        <a class="verify-btn" href="#contact">Contact Us</a>
    </div>

    
</nav>

<div class="container">
    <aside class="sidebar">
        <h3>Categories</h3>
        <ul>
            <li><button onclick="location.href='vegetable.php'" class="verify-btn">Vegetable</button></li>
            <li><button onclick="location.href='Dairy.php'" class="verify-btn">Dairy</button></li>
            <li><button onclick="location.href='Grains.php'" class="verify-btn">Grains</button></li>
        </ul>
    </aside>

    <main class="products-section">
        <h1>Shop</h1>
        <h2 class="tagline">Nurturing Nature, Feeding the World.</h2>
        <div class="products-grid">

            <!-- Example Product -->
            <div class="product-card">
                <span class="sale">Sale</span>
                <img src="../images/coconut.jpg" alt="Coconut">
                <p class="category">Coconuts</p>
                <h4>Best Quality Coconut for Wholesale</h4>
                <p class="price"><del>90.00৳</del> 85.00৳</p>
                <form action="Purses.php" method="POST">
                    <input type="hidden" name="product_name" value="Coconut">
                    <input type="hidden" name="price" value="85">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>

            <!-- Add other product cards as in your original page... -->
             <!-- Product 2 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/apple1.jpg" alt="Apple">
        <p class="category">Apple</p>
        <h4>Apple Price</h4>
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
        <img src="../images/banana1.jpg" alt="Banana">
        <p class="category">Banana</p>
        <h4>Banana</h4>
        <p class="price"><del>50.00৳</del> 40.00৳/dozon</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Banana">
            <input type="hidden" name="price" value="40">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 4 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/watermelon.jpg" alt="Watermelon">
        <p class="category">Watermelon</p>
        <h4>Watermelon</h4>
        <p class="price"><del>165.00৳</del> 160.00৳</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Watermelon">
            <input type="hidden" name="price" value="160">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 5 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Orange.jpg" alt="Orange">
        <p class="category">Orange</p>
        <h4>Orange</h4>
        <p class="price"><del>265.00৳</del> 260.00৳/kg</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Orange">
            <input type="hidden" name="price" value="260">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 6 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Pai2.jpg" alt="Pineapple">
        <p class="category">Pineapple</p>
        <h4>Pineapple</h4>
        <p class="price"><del>65.00৳</del> 60.00৳/kg</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Pineapple">
            <input type="hidden" name="price" value="60">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 7 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Mango.jpg" alt="Mango">
        <p class="category">Mango</p>
        <h4>Mango</h4>
        <p class="price"><del>265.00৳</del> 260.00৳/kg</p>

        <form action="Purses.php" method="POST">
            <input type="hidden" name="product_name" value="Mango">
            <input type="hidden" name="price" value="260">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    <!-- Product 8 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Guava1.jpg" alt="Guava">
        <p class="category">Guava</p>
        <h4>Guava</h4>
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

<!-- Contact Section -->
<section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>Dhaka, Bangladesh</p>
    <p>+880 1978621422</p>
    <p>agrolink@gmail.com</p>
</section>

<footer>
    <p>© 2025 AgroLink. All rights reserved.</p>
</footer>

<script src="../JS/fruit.js"></script>
</body>
</html>
