<?php
function openConn() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "agrolink";
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) { die("Connection Fail: ". $conn->connect_error); }
    return $conn;
}
function addCustomer($conn, $name, $email, $phone, $hashedPassword) {

    $name  = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);

    $sql = "INSERT INTO farmer_information (UserName, Email, PhoneNumber, password)
            VALUES ('$name', '$email', '$phone', '$hashedPassword')";

    return $conn->query($sql);
}
function getFarmerByEmail($conn, $email) {

    $email = $conn->real_escape_string($email);

    $sql = "SELECT * FROM farmer_information WHERE Email='$email'";
    return $conn->query($sql);
}
function addProduct($conn, $name, $category, $price, $quantity, $description, $image) {

    $name        = $conn->real_escape_string($name);
    $category    = $conn->real_escape_string($category);
    $price       = $conn->real_escape_string($price);
    $quantity    = $conn->real_escape_string($quantity);
    $description = $conn->real_escape_string($description);
    $image       = $conn->real_escape_string($image);

    $sql = "INSERT INTO products (ProductName, Category, Price, Quantity, Description, Image)
            VALUES ('$name', '$category', '$price', '$quantity', '$description', '$image')";

    return $conn->query($sql);
}


function applyDiscountToAllProducts($conn, $discount) {
    $discount = (int)$discount;

    $sql = "UPDATE products
            SET Price = Price - (Price * $discount / 100)";

    return $conn->query($sql);
}


function removeProductByName($conn, $productName) {
    $productName = $conn->real_escape_string($productName);

    $sql = "DELETE FROM products WHERE ProductName = '$productName'";
    return $conn->query($sql);
}


function getProducts($conn, $searchTerm = "") {

    if (!empty($searchTerm)) {
        $searchTerm = $conn->real_escape_string($searchTerm);
        $sql = "SELECT * FROM products WHERE ProductName LIKE '%$searchTerm%'";
    } else {
        $sql = "SELECT * FROM products";
    }

    return $conn->query($sql);
}
function addFarmerProblem($conn, $email, $problem) {
    $email   = $conn->real_escape_string($email);
    $problem = $conn->real_escape_string($problem);

    $sql = "INSERT INTO farmers_help (Email, Description)
            VALUES ('$email', '$problem')";

    return $conn->query($sql);
}

function updateFarmerProfile($conn, $email, $name, $phonenumber) {
    $email = $conn->real_escape_string($email);
    $name = $conn->real_escape_string($name);
    $phonenumber = $conn->real_escape_string($phonenumber);

    $sql = "UPDATE farmer_information 
            SET UserName='$name', PhoneNumber='$phonenumber' 
            WHERE Email='$email'";

    return $conn->query($sql);
}








?>
