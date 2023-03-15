<?php
session_start();
if (isset($_POST['submit-form'])) {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // Store form data in session variable
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['surname'] = $surname;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Confirm your order</title>
    <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
    <meta name="keywords" content="web_project, Throw It, book a collection">
    <meta name="author" content="Dark Side">
    <meta name="viewport" content="initial-scale=1">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/orderConfirmation.css">
</head>

<body>

    <!-- Navigation -->
    <?php require('sidenav.php'); ?>
    <div id="booking-main" class="confirmation">
        <!-- Open and Close button -->
        <div id="openbutton">
            <button class="openbtn" type="button" onclick="openNav();">&#9783;</button>
            <script>
                function openNav() {
                    document.getElementById("side-panel").style.width = "180px";
                    document.getElementById("booking-main").style.marginLeft = "250px";
                }

                function closeNav() {
                    document.getElementById("side-panel").style.width = "0";
                    document.getElementById("booking-main").style.marginLeft = "30px";
                }
            </script>
        </div>
        <div class="confirmation-header">
            <p class="confirmation-headline">Please, check all the data and confirm the booking</p>
        </div>
        <div class="personal-data-header">
            <div class="pdata-header">
                <p>Personal info</p>
            </div>
            <div class="pdata">
                <!-- Display form data on page -->
                <p><?php echo $name; ?>, <?php echo $surname; ?></p>
                <p><?php echo $phone; ?></p>
                <p><?php echo $email; ?></p>
                <p><?php echo $address; ?></p>
            </div>
        </div>
        <div class="order-data-header">
            <div class="odata-header">
                <p>Order info</p>
            </div>
            <div class="odata">
                <p>Name of service</p>
                <p>Number of items</p>
                <p>Weights of items</p>
                <p>The driver will arrive on Wednesday, 01.03.2023 at 14:58</p>
            </div>
        </div>
        <div class="buttons">
            <a href="order_accepted.html" class="confirm-btn">Confirm the order</a>
            <a href="booking.html" class="back-btn">Back to booking</a>
        </div>
    </div>
</body>

</html>