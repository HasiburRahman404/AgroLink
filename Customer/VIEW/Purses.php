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
<button class="submit" onclick="window.location.href='../VIEW/home_page.php'">

        Home
</button>
</header>
 
<div class="page-wrapper">
 
    <!-- ================= CART SECTION ================= -->
<div class="cart-wrapper">
<div class="cart-container">
 
            <h2>🛒 Your Cart</h2>
 
            <?php if (count($cart) > 0): ?>
<table>
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
<td><?= $item['price'] ?></td>
<td><?= $item['qty'] ?></td>
<td><?= $total ?></td>
</tr>
<?php endforeach; ?>
 
                <tr>
<td colspan="3">Sub Total</td>
<td><?= $subTotal ?> ৳</td>
</tr>
 
                <tr>
<td colspan="3">Delivery Charge</td>
<td>60 ৳</td>
</tr>
 
                <tr class="grand">
<td colspan="3"><strong>Grand Total</strong></td>
<td><strong><?= $subTotal + 60 ?> ৳</strong></td>
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
 
    <!-- ================= REVIEW SECTION ================= -->
<div class="review-wrapper">
<div class="review-box">
 
            <?php if (!empty($reviewSuccess)): ?>
<p style="color:green"><?= $reviewSuccess ?></p>
<?php endif; ?>
 
            <?php if (!empty($reviewError)): ?>
<p style="color:red"><?= $reviewError ?></p>
<?php endif; ?>
 
            <form method="POST">
<textarea

                    name="review"

                    class="review-textarea"

                    placeholder="Give review here..."

                    required></textarea>
 
                <div class="review-divider"></div>
 
                <button type="submit" name="add_review" class="review-btn">

                    Add review
</button>
</form>
 
        </div>
</div>
 
</div>
 
<section class="contact">
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

 