<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Form</title>
    <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
    <meta name="keywords" content="web_project, Throw It, book a collection">
    <meta name="author" content="Dark Side">
    <meta name="viewport" content="initial-scale=1">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/booking.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectService = document.getElementById('service');
            var price = document.getElementById('price');

            selectService.addEventListener('change', function() {
                var service = selectService.value;
                if (service === 'regular-pickup') {
                    price.textContent = '10 EUR';
                } else if (service === 'recycling') {
                    price.textContent = '15 EUR';
                } else if (service === 'bulk-waste-removal') {
                    var items = document.querySelectorAll('.field');
                    var weight = 0;
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].value) {
                            weight += parseInt(items[i].value);
                        }
                    }
                    price.textContent = weight * 3 + ' EUR';
                }
            });
        });
    </script>
</head>
<body>
    <!-- Content section of the document -->
    <?php require_once('sidenav.php'); ?>
    <div id="booking-main" class="booking">
        <!-- Open button -->
        <?php require_once('open-btn.php'); ?>
        <!-- Content of the page -->
        <div class="main-content">
            <!-- Booking header and current time -->
            <div class="booking-header">
                <p class="booking-header-headline">Book a collection</p>
                <span id="date-time" class="booking-header-timestamp"></span>
            </div>
            <!-- Booking form -->
            <form action="order_confirmation.php" name="booking" method="post" class="form-rows">
                <div class="order-form line time">
                    <!-- First row of booking form -->
                    <div class="user-info-disclaimer">
                        <!-- User info fields -->
                        <p class="booking-form-title">Enter your information</p>
                        <div class="input-lines">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="field" placeholder=" Name" required pattern="^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,200}$">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" name="surname" class="field" placeholder=" Surname" required pattern="^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,200}$">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="field" placeholder=" +372 58678900" pattern="^[0-9\-\+ ]{7,15}$">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="field" placeholder=" name@example.com" pattern="^[\w\-\.]{1,50}@([\w-]{1,50}\.){1,50}[\w-]{2,4}$">

                            <span class="Tallinn">Address: &nbsp;Tallinn, Estonia</span>
                            <div class="line">
                                <div class="address-group street">
                                    <label for="street">Street name</label>
                                    <input type="text" id="street" name="street" class="field" placeholder=" Akadeemia tee" pattern="[A-Za-z0-9\s-]+">
                                </div>
                                <div class="address-group house">
                                    <label for="house">House</label>
                                    <input type="text" id="house" name="house" class="field" placeholder=" 8" pattern="\d{1,5}">
                                </div>
                                <div class="address-group index">
                                    <label for="index">Postcode</label>
                                    <input type="text" id="index" name="index" class="field" placeholder=" 21800" pattern="\d{5}">
                                </div>
                            </div>
                        </div>
                        <!-- Date picker -->
                        <div class="line time">
                            <!-- Calendar -->
                            <div class="date-row">
                                <label for="datepicker" class="calendar-label">Select a date:</label>
                                <div class="calendar-container">
                                    <div class="calendar-header">
                                        <div class="calendar-prev-month">&lt;</div>
                                        <div class="calendar-month-year"></div>
                                        <div class="calendar-next-month">&gt;</div>
                                    </div>
                                    <div class="calendar-days"></div>
                                </div>
                            </div>
                            <!-- Available time slots -->
                            <div class="date-row">
                                <label for="datepicker" class="calendar-label time-slots">Free slots:</label>
                                <div class="calendar-container time-slots time-selector">
                                    <input type="radio" id="time1" name="time" value="time1" checked>
                                    <label for="time1">10:00</label><br>
                                    <input type="radio" id="time2" name="time" value="time2" disabled>
                                    <label for="time2" disabled>11:00</label><br>
                                    <input type="radio" id="time3" name="time" value="time3">
                                    <label for="time3">12:00</label><br>
                                    <input type="radio" id="time4" name="time" value="time4" disabled>
                                    <label for="time4" disabled>13:00</label><br>
                                    <input type="radio" id="time5" name="time" value="time5">
                                    <label for="time5">14:00</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="datepicker" name="datepicker">
                    </div>
                    <!-- Second row of booking form -->
                    <div class="order-details">
                        <!-- Selecting service to order -->
                        <p class="booking-form-title">Select the service you want</p>
                        <div class="service-selector">
                            <input type="radio" id="regular" name="time" value="regular" checked>
                            <label for="regular">Regular pickup</label><br>
                            <input type="radio" id="recycling" name="time" value="recycling">
                            <label for="recycling">Recycling</label><br>
                            <input type="radio" id="bulk" name="time" value="bulk">
                            <label for="bulk">Bulk waste removal</label>
                        </div>
                        <!-- Bulk waste removal items item-weight form -->
                        <div class="form-container">
                            <p>Enter the weight of blocks of items</p>
                            <div class="form-line">
                                <input type="text" name="field[]" placeholder="Field">
                                <select name="selector[]">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                                <button type="button" class="remove-btn">&minus;</button>
                            </div>
                            <!-- Button for adding new lines -->
                            <div class="form-line add-elem">
                                <button type="button" class="add-btn">&plus;</button>
                            </div>
                        </div>
                        <!-- Calculated total price -->
                        <div class="total-price">
                            <p>Total:</p>
                            <p>10.00 EUR</p>
                        </div>
                        <!-- Comments field -->
                        <p>Anything else you want to add?</p>
                        <input maxlength="200" class="comment" type="text" name="comment" id="comment" pattern="^[\w\s\.,'\-\#\@\;\:\$\%\^\=\(\)\~\&\€\>\+=\*\/\<\?!{}\[\]]{1,200}$" placeholder="Leave a comment"><br>
                        <!-- Checkbox for saving user data -->
                        <div class="save-data-checkbox">
                            <input type="checkbox" id="saveData" name="saveData" value="saveData" disabled>
                            <label for="saveData" disabled>Save my information for futher orders</label><br>
                        </div>
                        <!-- Submit form button -->
                        <button type="submit" name="submit-form" class="book-btn">Book!</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="js/dashboard-navigation.js"></script>
    <script src="js/bulk-waste-item.js"></script>
    <script src="js/dashboard-calendar.js"></script>
    <script src="js/current-date.js"></script>
    <script src="js/booking-totalprice.js"></script>

</body>

</html>