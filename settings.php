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

</head>

<body>

    <!-- Navigation -->
    <?php require_once('sidenav.php'); ?>
    <div id="booking-main" class="booking">
        <!-- Open and Close button -->
        <div id="openbutton">
            <button class="openbtn" type="button" onclick="openNav();">
                <img src="img/menu-dash.png" alt="toggle menu">
            </button>
        </div>
        <!-- Content of the page -->
        <div class="main-content">
            <!-- Settings header and current time -->
            <div class="booking-header">
                <p class="booking-header-headline">Settings</p>
                <span id="date-time" class="booking-header-timestamp"></span>
            </div>
            <!-- Booking form -->
            <form action="settings.php" name="booking" method="post" class="form-rows">
                <div class="order-form line time">
                    <!-- First row of settings form -->
                    <div class="user-info-disclaimer">
                        <!-- User info fields -->
                        <p class="booking-form-title">Personal information</p>
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
                    </div>
                    <!-- Second row of settings form -->
                    <div class="order-details">
                        <div class="input-lines">
                            <!-- Username -->
                            <p class="booking-form-title">Account information</p>
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="field" required pattern="^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,200}$">

                            <!-- Change password -->
                            <p class="booking-form-title">Change password</p>
                            <label for="old-password">Old password</label>
                            <input type="password" id="old-password" class="field" name="password" required pattern="[A-Za-z0-9!@#%^&*()_+-=]{8,15}">
                            <label for="new-password">New password</label>
                            <input type="password" id="new-password" class="field" name="password" required pattern="[A-Za-z0-9!@#%^&*()_+-=]{8,15}">
                            <label for="repeat-password">Repeat password</label>
                            <input type="password" id="repeat-password" class="field" name="password" required pattern="[A-Za-z0-9!@#%^&*()_+-=]{8,15}">

                            <!-- Checkbox for saving user data -->
                            <div class="save-settings-checkbox">
                                <input type="checkbox" id="saveData" name="saveData" value="saveData" disabled>
                                <label for="saveData" disabled>&nbsp;&nbsp;I confirm saving this info</label>
                            </div>
                            <!-- Submit form button -->
                            <button type="submit" name="submit-form" class="settings-save-btn">Submit and save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="js/dashboard-navigation.js"></script>
    <script src="js/current-date.js"></script>
</body>

</html>