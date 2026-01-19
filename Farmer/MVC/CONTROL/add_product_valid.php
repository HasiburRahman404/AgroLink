<?php
include "../MODEL/Database_conn.php";

$productName = $category = $price = $quantity = $description = $productImage = "";
$nameErr = $categoryErr = $priceErr = $quantityErr = $descriptionErr = $imageErr = "";
$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

   
    if (empty($_POST["productName"])) {
        $nameErr = "Product Name is required";
    } else {
        $productName = trim($_POST["productName"]);
    }

    
    if (empty($_POST["category"]) || $_POST["category"] === "Select Category") {
        $categoryErr = "Please select a category";
    } else {
        $category = trim($_POST["category"]);
    }

    
    if (empty($_POST["price"])) {
        $priceErr = "Price is required";
    } else {
        $price = trim($_POST["price"]);
    }

    
    if (empty($_POST["quantity"])) {
        $quantityErr = "Quantity is required";
    } else {
        $quantity = trim($_POST["quantity"]);
    }

    
    if (empty($_POST["description"])) {
        $descriptionErr = "Description is required";
    } else {
        $description = trim($_POST["description"]);
    }

    
    if (isset($_FILES["productImage"]) && $_FILES["productImage"]["error"] === 0) {
        $allowed = ["jpg", "jpeg", "png"];
        $ext = strtolower(pathinfo($_FILES["productImage"]["name"], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            $imageErr = "Only JPG, JPEG, PNG allowed";
        } else {
            if (!is_dir("../uploads")) {
                mkdir("../uploads", 0777, true);
            }
            $productImage = uniqid() . "." . $ext;
            move_uploaded_file($_FILES["productImage"]["tmp_name"], "../uploads/" . $productImage);
        }
    } else {
        $imageErr = "Product image required";
    }

    
    if (
        empty($nameErr) && empty($categoryErr) && empty($priceErr) &&
        empty($quantityErr) && empty($descriptionErr) && empty($imageErr)
    ) {
        $conn = openConn();
        if (addProduct($conn, $productName, $category, $price, $quantity, $description, $productImage)) {
            $success = "Product added successfully!";
            $productName = $category = $price = $quantity = $description = "";
        } else {
            $error = "Database error!";
        }
        $conn->close();
    }
}
