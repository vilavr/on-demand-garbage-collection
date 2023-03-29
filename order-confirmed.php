<?php require_once('session.php'); ?>
<?php require_once('book-validation.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Order confirmed</title>
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

    <div class="confirmation heart-container">
        <!-- Open button -->
        <?php require_once('open-btn.php'); ?>
        <div class="centered-content">

            <img src="img/heart.png" class="heart">
            <div class="confirmation-message">
                <p> Your order has been accepted. </p>
                <p> Thanks for choosing Throw It! </p>
            </div>

            <div class="buttons">
                <a href="order-cancelled.php" class="confirm-btn">Cancel the order</a>
                <a href="booking.php" class="back-btn">Back to booking</a>
            </div>
        </div>

    </div>

    <script src="js/dashboard-navigation.js"></script>
</body>

</html>