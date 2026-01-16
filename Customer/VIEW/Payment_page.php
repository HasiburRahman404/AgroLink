<?php include "../CONTROL/Payment_select_validation.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Select Payment Option</title>
    <link rel="stylesheet" href="../CSS/Payment_select.css">
</head>

<body>
<div class="page">

    <form method="POST" action="../CONTROL/Payment_select_validation.php">

        <div class="card">
            <div class="icon">
                <img src="../images/payment_pic.jpg" alt="Payment Icon">
            </div>

            <p class="title">Select Payment Option</p>

            <?php if (isset($_GET['error'])) { ?>
                <p style="color:red; text-align:center;">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>

            <label class="option">
                <input type="radio" name="payment" value="bkash">
                <span>Bkash</span>
            </label>

            <label class="option">
                <input type="radio" name="payment" value="cash">
                <span>Cash</span>
            </label>
        </div>

        <div class="buttons">
            <button type="button" class="btn cancel"
                    onclick="window.location.href='home_page.php'">
                CANCEL
            </button>

            <!-- IMPORTANT: submit button -->
            <button type="submit" class="btn next">
                NEXT
            </button>
        </div>

    </form>
</div>
</body>
</html>
