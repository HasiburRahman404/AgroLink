
<?php include "../CONTROL/Purses_validation.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Purses.css">
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
<body>

<div class="cart-container">

    <!-- LEFT SIDE -->
    <div class="cart-items">
        <h2>Your Cart</h2>

       
        <div class="product" data-price="240">
            <img src="https://via.placeholder.com/80" alt="">
            <div class="details">
                <h3>Laikou Milk Brightening Sunscreen</h3>
                <p>Unit Price: 240 Tk</p>
            </div>

            <div class="quantity">
                <button class="minus">-</button>
                <input type="text" value="1" readonly>
                <button class="plus">+</button>
            </div>

            <div class="item-total">240 Tk</div>
        </div>

        
        <div class="product" data-price="75">
            <img src="https://via.placeholder.com/80" alt="">
            <div class="details">
                <h3>Portable Mini Paper Soap</h3>
                <p>Unit Price: 75 Tk</p>
            </div>

            <div class="quantity">
                <button class="minus">-</button>
                <input type="text" value="3" readonly>
                <button class="plus">+</button>
            </div>

            <div class="item-total">225 Tk</div>
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="checkout">
        <h3>Checkout Summary</h3>

        <div class="row">
            <span>Subtotal</span>
            <span id="subtotal">465</span> Tk
        </div>

        <div class="row">
            <span>Delivery</span>
            <span>69</span> Tk
        </div>

        <hr>

        <div class="row total">
            <span>Total</span>
            <span id="grandTotal">534</span> Tk
        </div>

        <form action="process.php" method="POST">
            <input type="hidden" name="final_amount" id="final_amount" value="534">
            <button type="submit">Proceed to Checkout</button>
        </form>
    </div>

</div>

<script>
const products = document.querySelectorAll('.product');
const subtotalEl = document.getElementById('subtotal');
const grandTotalEl = document.getElementById('grandTotal');
const finalAmount = document.getElementById('final_amount');
const deliveryCharge = 69;

products.forEach(product => {
    const price = parseInt(product.dataset.price);
    const plus = product.querySelector('.plus');
    const minus = product.querySelector('.minus');
    const qtyInput = product.querySelector('input');
    const itemTotal = product.querySelector('.item-total');

    plus.onclick = () => {
        qtyInput.value++;
        updateItem();
    };

    minus.onclick = () => {
        if (qtyInput.value > 1) {
            qtyInput.value--;
            updateItem();
        }
    };

    function updateItem() {
        itemTotal.innerText = (qtyInput.value * price) + " Tk";
        calculateTotal();
    }
});

function calculateTotal() {
    let subtotal = 0;
    document.querySelectorAll('.item-total').forEach(item => {
        subtotal += parseInt(item.innerText);
    });

    subtotalEl.innerText = subtotal;
    const grandTotal = subtotal + deliveryCharge;
    grandTotalEl.innerText = grandTotal;
    finalAmount.value = grandTotal;
}
</script>

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
