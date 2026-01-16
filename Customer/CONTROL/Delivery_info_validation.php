<?php
$errors = [];

function clean_input($data) {
    return htmlspecialchars(trim($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['first_name'])) {
        $errors['first_name'] = "First name is required";
    }

    if (empty($_POST['last_name'])) {
        $errors['last_name'] = "Last name is required";
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    if (empty($_POST['contact_no'])) {
    $errors['contact_no'] = "Contact number is required";
} elseif (strlen($_POST['contact_no']) < 11) {
    $errors['contact_no'] = "Contact number must be at least 11 digits";
}


    if (empty($_POST['street'])) {
        $errors['street'] = "Street address is required";
    }

    if (empty($_POST['house_no'])) {
        $errors['house_no'] = "House number is required";
    }

    if (empty($_POST['city'] )) {
        $errors['city'] = "City is required";
    }

   if (!isset($_POST['country']) || $_POST['country'] === "Select Country") {
    $errors['country'] = "Country is required";
}

    
    if (empty($errors)) {
        header("Location: payment.php");
        exit();
    }
}
?>
