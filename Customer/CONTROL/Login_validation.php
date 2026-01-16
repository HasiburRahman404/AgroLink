
 <?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include '../MODEL/database_connection.php'; // database connection

    $fullname = trim($_POST['name']);
    $password = trim($_POST['password']);

    // Empty validation
    if (empty($fullname) || empty($password)) {
        header("Location: ../VIEW/Login.php?error=Name and Password are required");
        exit();
    } 
    else {

        // Database theke check
        $sql = "SELECT * FROM customer WHERE Name = '$fullname' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            
            header("Location: ../VIEW/Fruits.php");
            exit();
        } else {
            
            header("Location: ../VIEW/Login.php?error=Invalid Name or Password");
            exit();
        }
    }
 }
?>
