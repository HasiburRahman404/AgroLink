<?php
// Include database connection
include "Database_conn.php";

// ===== Initialize variables =====
$productName = $category = $price = $quantity = $description = $productImage = "";
$nameErr = $categoryErr = $priceErr = $quantityErr = $descriptionErr = $imageErr = "";
$success = $error = "";

// ===== Process form only if submitted =====
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---------- Product Name ----------
    if (empty($_POST["productName"])) {
        $nameErr = "Product Name is required";
    } else {
        $productName = htmlspecialchars(trim($_POST["productName"]));
        
        }
    }

    // ---------- Category ----------
    if (empty($_POST["category"]) || $_POST["category"] == "Select Category") {
        $categoryErr = "Please select a category";
    } else {
        $category = htmlspecialchars(trim($_POST["category"]));
    }

    // ---------- Price ----------
    if (empty($_POST["price"])) {
        $priceErr = "Price is required";
    } else {
        $price = htmlspecialchars(trim($_POST["price"]));
        
        
    }

    // ---------- Quantity ----------
    if (empty($_POST["quantity"])) {
        $quantityErr = "Quantity is required";
    } else {
        $quantity = htmlspecialchars(trim($_POST["quantity"]));
        
        
    }

    // ---------- Description ----------
    if (empty($_POST["description"])) {
        $descriptionErr = "Description is required";
    } else {
        $description = htmlspecialchars(trim($_POST["description"]));
    }

    // ---------- Product Image ----------
    if (isset($_FILES["productImage"]) && $_FILES["productImage"]["error"] == 0) {
        $allowed = ["jpg", "jpeg", "png", "gif"];
        $filename = $_FILES["productImage"]["name"];
        $fileTmp = $_FILES["productImage"]["tmp_name"];
        $fileExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!in_array($fileExt, $allowed)) {
            $imageErr = "Only JPG, JPEG, PNG, GIF files allowed";
        } elseif ($_FILES["productImage"]["size"] > 2 * 1024 * 1024) { // 2MB limit
            $imageErr = "File size must be less than 2MB";
        } else {
            // Move file to uploads folder
            if (!is_dir("uploads")) {
                mkdir("uploads", 0777, true);
            }
            $newFileName = uniqid() . "." . $fileExt;
            move_uploaded_file($fileTmp, "uploads/" . $newFileName);
            $productImage = $newFileName;
        }
    } else {
        $imageErr = "Please upload a product image";
    }

    // ---------- Insert into Database ----------
    if (
        empty($nameErr) &&
        empty($categoryErr) &&
        empty($priceErr) &&
        empty($quantityErr) &&
        empty($descriptionErr) &&
        empty($imageErr)
    ) {
        $sql = "INSERT INTO products (ProductName, Category, Price, Quantity, Description, Image)
                VALUES ('$productName', '$category', '$price', '$quantity', '$description', '$productImage')";

        if ($conn->query($sql) === TRUE) {
            $success = "Product added successfully!";
            // Clear form fields
            $productName = $category = $price = $quantity = $description = $productImage = "";
        } else {
            $error = "Error: " . $conn->error;
        }
    }

?>
