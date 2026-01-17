
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bKash Payment</title>
    <link rel="stylesheet" href="../CSS/Bkash.css">
</head>
<body>

<div class="payment-wrapper">
    <div class="header">
        <span class="bkash">bKash</span>
        <span class="payment">Payment</span>
    </div>

    <div class="content">
        <p class="label">Your bKash Account number</p>
        <input type="text" placeholder="e.g 01XXXXXXXXX">

        <p class="terms">
            By clicking on Confirm, you are agreeing to the
            <a href="#">terms & conditions</a>
        </p>
    </div>

    <div class="buttons">
        <button class="close" onclick="window.location.href='home_page.php'">CLOSE</button>
        <button class="confirm"  onclick="window.location.href='thanks.php'">CONFIRM</button>
    </div>

    <div class="footer">
        📞 16247
    </div>
</div>

</body>
</html>
