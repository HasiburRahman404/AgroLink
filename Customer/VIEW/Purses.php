<?php
session_start();
include "../CONTROL/Purses_validation.php";
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart | AgroLink</title>

    <!-- ✅ Correct CSS link -->
    <link rel="stylesheet" href="../CSS/Purses.css">
</head>

<body>
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
        $grandTotal = 0;
        foreach ($cart as $item):
            $total = $item['price'] * $item['qty'];
            $grandTotal += $total;
        ?>
        <tr>
            <td><?= htmlspecialchars($item['product']) ?></td>
            <td class="price"><?= $item['price'] ?></td>

            <td>
                <button class="qty-btn minus">➖</button>
                <span class="qty"><?= $item['qty'] ?></span>
                <button class="qty-btn plus">➕</button>
                <span class="remove-btn">❌</span>
            </td>

            <td class="row-total"><?= $total ?></td>
        </tr>
        <?php endforeach; ?>

        <tr class="grand">
            <td colspan="3">Grand Total</td>
            <td id="grandTotal"><?= $grandTotal ?> ৳</td>
        </tr>
    </table>

    <?php else: ?>
        <p class="empty">🛒 Cart is empty</p>
    <?php endif; ?>

    <br>
    <a class="back-btn" href="../VIEW/Fruits.php">⬅ Continue Shopping</a>

</div>
    </div>

<script>
// PLUS
document.querySelectorAll(".plus").forEach(btn => {
    btn.addEventListener("click", function () {
        let row = this.closest("tr");
        let qtyEl = row.querySelector(".qty");
        let price = parseInt(row.querySelector(".price").innerText);

        let qty = parseInt(qtyEl.innerText);
        qty++;
        qtyEl.innerText = qty;

        row.querySelector(".row-total").innerText = price * qty;
        updateGrandTotal();
    });
});

// MINUS
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
            updateGrandTotal();
        }
    });
});

// REMOVE
document.querySelectorAll(".remove-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        let row = this.closest("tr");
        row.remove();
        updateGrandTotal();
    });
});

function updateGrandTotal() {
    let total = 0;
    document.querySelectorAll(".row-total").forEach(el => {
        total += parseInt(el.innerText);
    });
    document.getElementById("grandTotal").innerText = total + " ৳";
}
</script>

</body>
</html>
