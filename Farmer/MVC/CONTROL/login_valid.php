<?php
session_start();
include '../MODEL/Database_conn.php';
if(isset($_SESSION["email"])){
    header("Location:admin_dashboard.php");
    exit();
}

$emailErr = $passwordErr = "";
$email = "";
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        $emailErr = "Email is required";
    }

    if (empty($password)) {
        $passwordErr = "Password is required";
    }

    if (empty($emailErr) && empty($passwordErr)) {
        $sql = "SELECT password FROM farmer_information WHERE Email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                
              // $_SESSION['email'] = $email;
                foreach($result as $R){
            $_SESSION["username"]=$R["name"];
            $_SESSION["email"]=$R["email"];
            $_SESSION["number"]=$R["phonenumber"];
            
            }
            if(isset($_POST['remember'])){
                $rem =$_POST['remember'];
                setcookie("cookie_email",$email,time() + 60*60*24*30,'/');
                setcookie("cookie_rem",$rem, time() + 60*60*24*30,'/');
            }
               

                header("location:../VIEW/admin_dashboard.php"); 
                exit();
            } else {
                $loginError = "Incorrect password!";
            }
        } else {
            $loginError = "Email not found!";
        }
    }
}
?>
