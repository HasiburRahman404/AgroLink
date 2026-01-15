<?php include "../CONTROL/Delivery_info_validation.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Delivery_info.css">
</head>
<body>

<div class="container">
    <h2>Contact and Delivery Information</h2>

    <form method="POST" action="">

<!-- Requester Info -->
<fieldset>
<legend>Requester's Information</legend>

<div class="row">
    <div class="field">
        <label>Last Name <span>*</span></label>
        <input type="text" name="last_name" value="<?= $_POST['last_name'] ?? '' ?>">
        <div class="error"><?= $errors['last_name'] ?? '' ?></div>
    </div>

    <div class="field">
        <label>First Name <span>*</span></label>
        <input type="text" name="first_name" value="<?= $_POST['first_name'] ?? '' ?>">
        <div class="error"><?= $errors['first_name'] ?? '' ?></div>
    </div>

    <div class="field small">
        <label>Middle Initial</label>
        <input type="text" name="middle">
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Contact No <span>*</span></label>
        <input type="text" name="contact_no" value="<?= $_POST['contact_no'] ?? '' ?>">
        <div class="error"><?= $errors['contact_no'] ?? '' ?></div>
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Email Address <span>*</span></label>
        <input type="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
        <div class="error"><?= $errors['email'] ?? '' ?></div>
    </div>
</div>
</fieldset>

<!-- Delivery Address -->
<fieldset>
<legend>Delivery Address</legend>

<div class="row">
    <div class="field">
        <label>Street Address <span>*</span></label>
        <input type="text" name="street" value="<?= $_POST['street'] ?? '' ?>">
        <div class="error"><?= $errors['street'] ?? '' ?></div>
    </div>
</div>

<div class="row">
    <div class="field">
        <label>House Number <span>*</span></label>
        <input type="text" name="house_no" value="<?= $_POST['house_no'] ?? '' ?>">
        <div class="error"><?= $errors['house_no'] ?? '' ?></div>
    </div>
</div>

<div class="row">
    <div class="field">
        <label>City <span>*</span></label>
        <select name="city">
            <option>Select City</option>
            <option <?= ($_POST['city'] ?? '')=='Khulna'?'selected':'' ?>>Khulna</option>
            <option <?= ($_POST['city'] ?? '')=='Dhaka'?'selected':'' ?>>Dhaka</option>
            <option <?= ($_POST['city'] ?? '')=='Rajshahi'?'selected':'' ?>>Rajshahi</option>
            <option <?= ($_POST['city'] ?? '')=='Chittagong'?'selected':'' ?>>Chittagong</option>
        </select>
        <div class="error"><?= $errors['city'] ?? '' ?></div>
    </div>
</div>

<div class="row">
    <div class="field small">
        <label>Zip Code</label>
        <input type="text" name="zip">
    </div>
</div>

<div class="row">
    <div class="field">
        <label>Country <span>*</span></label>
        <select name="country">
            <option>Select Country</option>
            <option <?= ($_POST['country'] ?? '')=='Bangladesh'?'selected':'' ?>>Bangladesh</option>
            <option <?= ($_POST['country'] ?? '')=='India'?'selected':'' ?>>India</option>
            <option <?= ($_POST['country'] ?? '')=='Australia'?'selected':'' ?>>Australia</option>
        </select>
        <div class="error"><?= $errors['country'] ?? '' ?></div>
    </div>

    <div class="field">
        <label>Floor (Optional)</label>
        <select name="floor">
            <option>None</option>
            <?php for($i=1;$i<=10;$i++) echo "<option>$i</option>"; ?>
        </select>
    </div>
</div>
</fieldset>

<div class="buttons">
    <button type="button" onclick="window.location.href='home_page.php'">
    Cancel
</button>

    <button type="submit">Next</button>
</div>

</form>
</div>

</body>
</html>
