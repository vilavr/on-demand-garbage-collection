<?php require_once('session.php'); ?>
<?php require_once('book-validation.php'); ?>
<?php

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
    <link rel="stylesheet" href="styles/order-confirmation.css">
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
        <div class="data-block personal-data-header">
            <div class="pdata-header">
                <p>Personal info</p>
            </div>
            <div class="pdata">
                <p><?= $name . ', ' . $surname; ?></p>
                <p><?= $phone; ?></p>
                <p><?= $email; ?></p>
                <p>
                    <?= $street . ', ' . $house . ', ' . $index; ?>
                    , Tallinn, Estonia
                </p>
            </div>
        </div>
        <div class="data-block order-data-header">
            <div class="odata-header">
                <p>Order info</p>
            </div>
            <div class="odata">
                <p>
                    The service ordered:
                    &nbsp;
                    <?= ucfirst((string)$service); ?>
                </p>
                <p>
                    <?php if ($service === 'Bulk Waste Removal') : ?>
                        Number of items to be removed:
                        &nbsp;
                        <?= count($_POST['selector']) ?><br>
                </p>
                <p>
                    Weights of items to be removed:
                    &nbsp;
                    <?php
                        $option_weights = [
                            'option1' => '10-20 kg',
                            'option2' => '20-50 kg',
                            'option3' => '50-100 kg',
                            'option4' => '100-200 kg',
                            'option5' => '100-500 kg'
                        ];
                        $weights = array();
                        foreach ($_POST['selector'] as $selected) {
                            $weights[] = $option_weights[$selected];
                        }
                        echo implode(', ', $weights);
                    ?><br>
                <?php endif; ?>
                </p>
                <p>
                    Total price:
                    &nbsp;
                    <?= $price; ?> EUR<br>
                </p>
                <p>
                    The driver will arrive on
                    <?= date('l, d.m.Y', $timestamp) . ' at ' . $time; ?>
                </p>
            </div>

        </div>
        <div class="buttons">
            <a href="order-confirmed.php" class="confirm-btn">Confirm the order</a>
            <a href="booking.php" class="back-btn">Back to booking</a>
        </div>
    </div>

    <script src="js/dashboard-navigation.js"></script>
</body>

</html>