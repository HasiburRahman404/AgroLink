<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Payment Option</title>
    <link rel="stylesheet" href="../CSS/Payment_select.css">
</head>
<body>
    <div class="page">
        <div class="card">
            <div class="icon">
                <img src="../images/payment_pic.jpg" alt="Payment Icon">
            </div>
            <p class="title">Select Payment Option</p>

            <label class="option">
                <input type="radio" name="payment" value="bkash" checked>
                <span>Bkash</span>
            </label>

            <label class="option">
                <input type="radio" name="payment" value="cash">
                <span>Cash</span>
            </label>
        </div>

        <div class="buttons">
             <button class="btn cancel" onclick="window.location.href='home_page.php'">CANCEL</button>
            <button class="btn next">NEXT</button>
        </div>
    </div>
</body>
</html>

