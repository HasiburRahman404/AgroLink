
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_POST['payment'])) {
        header("Location: ../VIEW/Payment_page.php?error=Please select a payment option!");
        exit();
    }

    $payment = $_POST['payment'];

    if ($payment === "bkash") {
        header("Location: ../VIEW/Bkash.php");
        exit();
    } elseif ($payment === "cash") {
        header("Location: ../VIEW/thanks.php");
        exit();

        }
}

