
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Grains.css">
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
    <button onclick="location.href='Vegetable.php'" class="verify-btn">
        Vegetable
    </button>
</li>

            <li><button onclick="location.href='Fruits.php'" class="verify-btn">fruits</li>
</button>
            <li><button onclick="location.href='Dairy.php'" class="verify-btn">Dairy</li>
</button>
        </ul>
    </aside>

    <!-- Products Section -->
    <main class="products-section">
        <h1>Shop</h1>
        <h2 class="tagline">Authentic grains, traditional flavor, true nutrition</h2>

        <div class="products-grid">

    <!-- Product 1 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Pusti-atta.jpg" alt="Pusti atta">
        <p class="category">Pusti atta</p>
        <h4>Pusti atta</h4>
        <p class="price"><del>60.00৳</del> 55.00৳</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Pusti Atta">
    <input type="hidden" name="price" value="55">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Yellow Mustard.jpg" alt="Yellow Mustard">
        <p class="category">Yellow Mustard</p>
        <h4>Yellow Mustard</h4>
        <p class="price"><del>180.00৳</del> 165.00৳/kg</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Yellow Mustard">
    <input type="hidden" name="price" value="165">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    

    <!-- Product 4 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Pran-Moshur-Dal.jpg" alt="Pran Moshur Dal">
        <p class="category">Pran Moshur Dal</p>
        <h4>Pran Moshur Dal</h4>
        <p class="price"><del>155.00৳</del> 145.00৳</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Pran Moshur Dal">
    <input type="hidden" name="price" value="145">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    <!-- Product 5 -->
    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Basic Spices.jpg" alt="Basic Spices">
        <p class="category">Basic Spices</p>
        <h4>Basic Spices</h4>
        <p class="price"><del>370.00৳</del> 360.0/kg</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Basic Spices">
    <input type="hidden" name="price" value="360">
    <button type="submit">Add to Cart</button>
</form>
    </div>

    

    <div class="product-card">
        <span class="sale">Sale</span>
        <img src="../images/Katari-Atop-Rice.jpg" alt="Katari Atop Rice">
        <p class="category">Katari Atop Rice</p>
        <h4>Katari Atop Rice</h4>
        <p class="price"><del>105.00৳</del> 95.00৳/kg</p>

        <form action="Purses.php" method="POST">
    <input type="hidden" name="product_name" value="Katari Atop Rice">
    <input type="hidden" name="price" value="95">
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
