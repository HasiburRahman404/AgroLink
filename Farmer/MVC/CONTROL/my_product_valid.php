<?php
session_start();

// Include database connection
include "../MODEL/Database_conn.php";

/* ===============================
   APPLY DISCOUNT TO ALL PRODUCTS
================================ */
if (isset($_POST['apply_discount'])) {

    $discount = (int) $_POST['discount'];

    if ($discount > 0 && $discount < 100) {
        $updateSql = "UPDATE products
                      SET Price = Price - (Price * $discount / 100)";
        $conn->query($updateSql);

        header("Location: ../VIEW/my_products.php");
        exit();
    }
}

/* ===============================
   REMOVE PRODUCT
================================ */
if (isset($_POST['remove_product'])) {

    $productName = $_POST['product_name'];

    $deleteSql = "DELETE FROM products WHERE ProductName = '$productName'";
    $conn->query($deleteSql);

    header("Location: ../VIEW/my_products.php");
    exit();
}

/* ===============================
   FETCH ALL PRODUCTS
================================ */
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>