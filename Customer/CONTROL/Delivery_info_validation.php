<?php

include "../MODEL/database_connection.php";
 
$errors  = [];

$success = "";
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    $first_name = trim($_POST['first_name'] ?? '');

    $last_name  = trim($_POST['last_name'] ?? '');

    $middle     = trim($_POST['middle'] ?? '');

    $contact_no = trim($_POST['contact_no'] ?? '');

    $email      = trim($_POST['email'] ?? '');

    $street     = trim($_POST['street'] ?? '');

    $house_no   = trim($_POST['house_no'] ?? '');

    $city       = trim($_POST['city'] ?? '');

    $zip        = trim($_POST['zip'] ?? '');

    $country    = trim($_POST['country'] ?? '');

    $floor      = trim($_POST['floor'] ?? '');
 
    

    if (empty($first_name)) $errors['first_name'] = "First name is required";

    if (empty($last_name))  $errors['last_name']  = "Last name is required";
 
    if (empty($email)) {

        $errors['email'] = "Email is required";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors['email'] = "Invalid email format";

    }
 
    if (empty($contact_no)) {

        $errors['contact_no'] = "Contact number is required";

    } elseif (!preg_match("/^[0-9]{11}$/", $contact_no)) {

        $errors['contact_no'] = "Contact number must be 11 digits";

    }
 
    if (empty($street))   $errors['street']   = "Street is required";

    if (empty($house_no)) $errors['house_no'] = "House number is required";

    if ($city == "Select City" || empty($city)) {

        $errors['city'] = "City is required";

    }

    if ($country == "Select Country" || empty($country)) {

        $errors['country'] = "Country is required";

    }
 
    

    if (empty($errors)) {
 
        $sql1 = "INSERT INTO requesters_information

                 (LastName, FirstName, ContactNo, EmailAddress)

                 VALUES

                 ('$last_name','$first_name','$contact_no','$email')";
 
        $sql2 = "INSERT INTO delivery_address

                 (StreetAddress, HouseNumber, City, ZipCode, Country, Floor)

                 VALUES

                 ('$street','$house_no','$city','$zip','$country','$floor')";
 
        if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {

            $success = "Information submitted successfully!";
             header("Location: Payment_page.php");
    exit();


        } else {

            $errors['database'] = "Database Error: " . $conn->error;

        }

    }

}

?>

 