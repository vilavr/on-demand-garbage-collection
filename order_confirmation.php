<?php require_once('session.php');?>
<?php require_once('book-validation.php'); ?>

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
        <!-- Open button -->
        <?php require_once('open-btn.php'); ?>

        <div id="confirmation" class="confirmation-header">
            <p class="confirmation-headline">Please check all the data and confirm booking</p>
        </div>
        <div class="personal-data-header">
            <div class="pdata-header">
                <p>Personal info</p>
            </div>
            <div class="pdata">
                <p><br><?= $name .', '. $surname; ?><br>
                <br><?= $phone; ?><br>
                <br><?= $email; ?><br>
                <br><?= $street. ', ' . $house . ', ' . $index; ?>, Tallinn, Estonia</p><br>
            </div>
        </div>
        <div class="order-data-header">
            <div class="odata-header">
                <p>Order info</p>
            </div>
            <div class="odata">
                <p><br><?= ucfirst((string)$service); ?><br>
                <br><?= $price . ' EUR'; ?><br><br>
                    The driver will arrive on 
                    <?= date('l, d.m.Y', $timestamp) . ' at ' . $time ; ?></p><br>
            </div>
        </div>
        <div class="buttons">
            <a href="order_accepted.php" class="confirm-btn">Confirm the order</a>
            <a href="booking.php" class="back-btn">Back to booking</a>
        </div>
    </div>

    <script src="js/dashboard-navigation.js"></script>
</body>

</html>