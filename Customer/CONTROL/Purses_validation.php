<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $total = $_POST['final_amount'];

    // 10% discount if amount is more than 1000 Tk
    if ($total > 1000) {
        $total = $total - ($total * 0.10);
    }

    echo "<h1>Order Successful</h1>";
    echo "<p>Your payable amount is <strong>$total Tk</strong></p>";

    // এখানে future এ database insert / payment gateway add করতে পারবেন
} else {
    echo "Invalid Access";
}
?>
