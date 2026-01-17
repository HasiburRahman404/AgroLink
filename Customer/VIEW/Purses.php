<?php
session_start();
include "../CONTROL/Purses_validation.php";
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Purses.css">
</head>

<body>


<header class="top-header">
    <div class="logo">
        <img src="../images/logo.jpg" alt="AgroLink Logo">
        AgroLink
    </div>
    <button class="submit" onclick="window.location.href='../VIEW/home_page.php'">Home</button>
</header>


<div class="page-wrapper">

    
    <div class="cart-wrapper">
        <div class="cart-container">

            <h2>🛒 Your Cart</h2>

            <?php if (count($cart) > 0): ?>
            <table id="cartTable">
                <tr>
                    <th>Product</th>
                    <th>Price (৳)</th>
                    <th>Quantity</th>
                    <th>Total (৳)</th>
                </tr>

                <?php
                $subTotal = 0;
                foreach ($cart as $item):
                    $total = $item['price'] * $item['qty'];
                    $subTotal += $total;
                ?>
                <tr>
                    <td><?= htmlspecialchars($item['product']) ?></td>
                    <td class="price"><?= $item['price'] ?></td>
                    <td>
                        <button class="qty-btn minus">➖</button>
                        <span class="qty"><?= $item['qty'] ?></span>
                        <button class="qty-btn plus">➕</button>
                    </td>
                    <td class="row-total"><?= $total ?></td>
                </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="3">Sub Total</td>
                    <td id="subTotal"><?= $subTotal ?> ৳</td>
                </tr>

                <tr>
                    <td colspan="3">Delivery Charge</td>
                    <td>60 ৳</td>
                </tr>

                <tr class="grand">
                    <td colspan="3"><strong>Grand Total</strong></td>
                    <td id="grandTotal"><?= $subTotal + 60 ?> ৳</td>
                </tr>
            </table>

            <?php else: ?>
                <p class="empty">🛒 Cart is empty</p>
            <?php endif; ?>

            <div class="action-buttons">
                <a href="../VIEW/Fruits.php" class="action-btn">⬅ Continue Shopping</a>
                <a href="../VIEW/Delivery_info.php" class="action-btn pay-btn">Payment</a>
            </div>

        </div>
    </div>

   
<div class="review-wrapper">
    <div class="review-box">

        <textarea 
            class="review-textarea"
            placeholder="Give review here..."></textarea>

        <div class="review-divider"></div>

        <button class="review-btn">Add review</button>
    </div>
</div>


</div>


<section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>Dhaka, Bangladesh</p>
    <p>+880 1978621422</p>
    <p>agrolink@gmail.com</p>
</section>

<footer>
    <p>© 2025 AgroLink. All rights reserved.</p>
</footer>


<script>
    
document.querySelectorAll(".plus").forEach(btn => {
    btn.addEventListener("click", function () {
        let row = this.closest("tr");
        let qtyEl = row.querySelector(".qty");
        let price = parseInt(row.querySelector(".price").innerText);
        let qty = parseInt(qtyEl.innerText);
        qty++;
        qtyEl.innerText = qty;
        row.querySelector(".row-total").innerText = price * qty;
        updateTotals();
    });
});

document.querySelectorAll(".minus").forEach(btn => {
    btn.addEventListener("click", function () {
        let row = this.closest("tr");
        let qtyEl = row.querySelector(".qty");
        let price = parseInt(row.querySelector(".price").innerText);
        let qty = parseInt(qtyEl.innerText);
        if (qty > 1) {
            qty--;
            qtyEl.innerText = qty;
            row.querySelector(".row-total").innerText = price * qty;
            updateTotals();
        }
    });
});

function updateTotals() {
    let subTotal = 0;
    document.querySelectorAll(".row-total").forEach(el => {
        subTotal += parseInt(el.innerText);
    });
    document.getElementById("subTotal").innerText = subTotal + " ৳";
    document.getElementById("grandTotal").innerText = (subTotal + 60) + " ৳";
}
</script>

</body>
</html>
