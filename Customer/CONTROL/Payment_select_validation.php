
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['payment'])) {

        $payment = $_POST['payment'];

        if ($payment == "bkash") {
            header("Location: ../home_page.php");
            exit();
        }

        if ($payment == "cash") {
            header("Location: ../delivery_page.php");
            exit();
        }

    } else {
        // Redirect back with error message
        header("Location: ../VIEW/payment_page.html?error=Please select a payment option!");
        exit();
    }
}
?>
