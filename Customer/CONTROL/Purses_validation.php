<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $product = $_POST['product_name'];
    $price   = (int) $_POST['price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$product])) {
        $_SESSION['cart'][$product]['qty'] += 1;
    } else {
        $_SESSION['cart'][$product] = [
            'product' => $product,
            'price'   => $price,
            'qty'     => 1
        ];
    }
}


$deliveryCharge = 60;
?>
