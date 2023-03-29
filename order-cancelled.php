<?php require_once('session.php'); ?>
<?php require_once('book-validation.php'); ?>
<?php

// set variables
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$surname = isset($_SESSION['surname']) ? $_SESSION['surname'] : '';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$street = isset($_SESSION['street']) ? $_SESSION['street'] : '';
$house = isset($_SESSION['house']) ? $_SESSION['house'] : '';
$index = isset($_SESSION['index']) ? $_SESSION['index'] : '';
$datepicker = isset($_SESSION['datepicker']) ? $_SESSION['datepicker'] : '';
$time = isset($_SESSION['time']) ? $_SESSION['time'] : '';
$service = isset($_SESSION['service']) ? $_SESSION['service'] : '';
$comment = isset($_SESSION['comment']) ? $_SESSION['comment'] : '';
$price = isset($_SESSION['price']) ? $_SESSION['price'] : '';

// destroy the variables
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['street']);
unset($_SESSION['house']);
unset($_SESSION['index']);
unset($_SESSION['datepicker']);
unset($_SESSION['time']);
unset($_SESSION['service']);
unset($_SESSION['comment']);
unset($_SESSION['price']);

// end the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Order cancelled</title>
    <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
    <meta name="keywords" content="web_project, Throw It, book a collection">
    <meta name="author" content="Dark Side">
    <meta name="viewport" content="initial-scale=1">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/order-confirmation.css">
</head>

<body>

    <!-- Navigation -->
    <?php require('sidenav.php'); ?>

    <div class="confirmation heart-container">
        <!-- Open button -->
        <?php require_once('open-btn.php'); ?>
        <div class="centered-content">

            <img src="img/broken-heart.png" class="heart">
            <div class="confirmation-message">
                <p> Your order has been cancelled. </p>
                <p> We are always glad to see you again at Throw It!</p>
            </div>

            <div class="buttons">
                <a href="booking.php" class="confirm-btn single-btn">Back to booking</a>
            </div>
        </div>

    </div>

    <script src="js/dashboard-navigation.js"></script>
</body>

</html>