<?php

if (session_status() === PHP_SESSION_NONE) {

    session_start();

}
 
include "../MODEL/database_connection.php";
 


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_name'])) {
 
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
 


$reviewSuccess = "";

$reviewError   = "";
 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_review'])) {
 
    $review = trim($_POST['review']);
 
    if (empty($review)) {

        $reviewError = "Review cannot be empty";

    } else {
 
        $review = mysqli_real_escape_string($conn, $review);
 
        $sql = "INSERT INTO userreview (review)

                VALUES ('$review')";
 
        if ($conn->query($sql) === TRUE) {

            $reviewSuccess = "Review added successfully!";

        } else {

            $reviewError = "Database Error: " . $conn->error;

        }

    }

}
 
$deliveryCharge = 60;

?>

 