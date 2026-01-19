<?php
session_start();
include "../MODEL/Database_conn.php";


if (isset($_POST['apply_discount'])) {

    $discount = (int) $_POST['discount'];

    if ($discount > 0 && $discount < 100) {
        $conn = openConn();
        applyDiscountToAllProducts($conn, $discount);
        $conn->close();

        header("Location: ../VIEW/my_products.php");
        exit();
    }
}


if (isset($_POST['remove_product'])) {

    $productName = $_POST['product_name'];

    $conn = openConn();
    removeProductByName($conn, $productName);
    $conn->close();

    header("Location: ../VIEW/my_products.php");
    exit();
}


$searchTerm = '';

$conn = openConn();

if (isset($_POST['search_product'])) {
    $searchTerm = trim($_POST['search']);
}

$result = getProducts($conn, $searchTerm);

$conn->close();
?>
