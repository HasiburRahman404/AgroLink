<?php
// Include database connection
include "../MODEL/Database_conn.php";

/* ===============================
   REMOVE PRODUCT LOGIC
================================ */
if (isset($_POST['remove_product'])) {

    $productName = $_POST['product_name'];

    // Delete product (previous format)
    $deleteSql = "DELETE FROM products WHERE ProductName = '$productName'";
    $conn->query($deleteSql);

    // Reload page
    header("Location: my_products.php");
    exit();
}

/* ===============================
   FETCH ALL PRODUCTS
================================ */
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
