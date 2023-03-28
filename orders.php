<?php require_once('session.php');?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
    <meta name="keywords" content="web_project, Throw It, book a collection">
    <meta name="author" content="Dark Side">
    <meta name="viewport" content="initial-scale=1">
    <title>History of orders</title>
    <meta name="description" content="Booking form">
    <meta name="author" content="Dark side">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/booking.css">
    <link rel="stylesheet" href="styles/orders.css">
</head>

<body>
    <!-- Content section of the document -->
    <?php require_once('sidenav.php'); ?>
    <div id="booking-main" class="booking">
        <!-- Open button -->
        <?php require_once('open-btn.php'); ?>
        <!-- Content of the page -->
        <div id="main" class="orders">
            <h1>See all the orders</h1>
            <!-- Slider container -->
            <div class="slider-container">

                <!-- caption text -->
                <div class="slider fade">
                    <div class="row">
                        <div class="slider-text">
                            <h2>
                                #3 Regular pickup
                            </h2>
                            <!-- Cancel button is available only for some time -->
                            <p>Ongoing order <button type="submit" onclick="alert('Order #3 cancelled!')" name="submitCancelling" class="cancel-btn">Cancel</button></p>
                            <p>Driver: Sarah Johnson</p>
                        </div>
                        <div class="price">
                            10 EUR
                        </div>
                    </div>
                </div>

                <div class="slider fade">
                    <div class="row">
                        <div class="slider-text">
                            <h2>
                                #2 Bulk waste removal
                            </h2>
                            <p>Completed on 14 February 2023</p>
                            <p>Driver: Sarah Johnson</p>
                        </div>
                        <div class="price">
                            15 EUR
                        </div>
                    </div>
                </div>

                <div class="slider fade">
                    <div class="row">
                        <div class="slider-text">
                            <h2>
                                #1 Recycling
                            </h2>
                            <p>Completed on 1 February 2023</p>
                            <p>Driver: Sarah Johnson</p>
                        </div>
                        <div class="price">
                            10 EUR
                        </div>
                    </div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="dots">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <br>

            <!-- Animation -->
            <script src="js/orders-slider.js"></script>
        </div>

    </div>
</body>

</html>