
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Vegetable.css">
</head>
<body>


<header class="top-header">
    <div class="logo">
        <img src="../images/logo.jpg" alt="AgroLink Logo">
        AgroLink
    </div>

    
    <div class="header-icons" style="display: flex; align-items: center; gap: 10px;">
    
    <a href="Purses.php" class="cart-icon">🛒</a>

    
    <form action="../VIEW/home_page.php" method="GET">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</header>


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
            <li>
    <button onclick="location.href='Fruits.php'" class="verify-btn">
        Fruits
    </button>
</li>

            <li><button onclick="location.href='Dairy.php'" class="verify-btn">Dairy</li>
</button>
            <li><button onclick="location.href='Grains.php'" class="verify-btn">Grains</li>
</button>
        </ul>
    </aside>

    <!-- Products Section -->
    <main class="products-section">
        <h1>Shop</h1>
        <h2 class="tagline">Rooted in the land, delivering fresh vegetables for generations</h2>

        <div class="products-grid">

    <!-- Product 1 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Tomato1.jpg" alt="tomato">
        <p class="category">Tomato</p>
        <h4>Best Quality Tomato  </h4>
        <p class="price"><del>100.00৳</del> 95.00৳</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Tomato">
    <input type="hidden" name="price" value="95">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Beguni.jpg" alt="Brinjal">
        <p class="category">Brinjal</p>
        <h4>Brinjal Price</h4>
        <p class="price"><del>80.00৳</del> 65.00৳/kg</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Brinjal">
    <input type="hidden" name="price" value="65">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 3 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/broccoli.jpg" alt="Broccoli">
        <p class="category">Broccoli</p>
        <h4>Broccoli</h4>
        <p class="price"><del>60.00৳</del> 58.00৳/dozon</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Broccoli">
    <input type="hidden" name="price" value="58">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 4 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/misti-kumra.jpg" alt="Misti-kumra">
        <p class="category">Misti-kumra</p>
        <h4>Misti-kumra</h4>
        <p class="price"><del>65.00৳</del> 60.00৳</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Misti Kumra">
    <input type="hidden" name="price" value="60">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 5 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Capsicum.jpg" alt="Capsicume">
        <p class="category">Capsicum</p>
        <h4>Capsicum</h4>
        <p class="price"><del>125.00৳</del> 120.00৳/kg</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Capsicum">
    <input type="hidden" name="price" value="120">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 6 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Mix-vegetable.jpg" alt="Mix-vegetable">
        <p class="category">Mix-vegetable</p>
        <h4>Mix-vegetable</h4>
        <p class="price"><del>85.00৳</del> 80.00৳/kg</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Mix Vegetable">
    <input type="hidden" name="price" value="80">
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
