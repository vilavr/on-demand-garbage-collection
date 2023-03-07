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

    <!-- Content section of the document -->
    <aside>
        <nav id="side-panel" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="booking.php">Booking</a>
            <a href="orders.html">Orders</a>
            <a href="settings.html">Settings</a>
            <a href="index.html" class="log-out">Log out</a>
        </nav>
    </aside>
    <div id="booking-main" class="booking">
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
        <div class="booking-header">
            <p class="booking-header-headline">Book a collection</p>
            <span id="date-time" class="booking-header-timestamp"></span>
            <script>
                let dt = new Date();
                let dayOfMonth = dt.getDate();
                let month = dt.toLocaleString('default', { month: 'long' });
                let year = dt.getFullYear();
                let time = dt.toLocaleTimeString('en-US', { hour12: false });
                let timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

                dt = `${dayOfMonth} ${month} ${year} - ${time} (${timeZone})`;
                document.getElementById('date-time').innerHTML = dt;
            </script>
        </div>
        <div class="order-form">
            <div class="user-info-disclaimer">
                <p>Enter your info (or confirm that it is correct)</p>
                

                <form action="order_confirmation.php" method="post" class="form-rows">
                    <div class="input-lines">
                        <div class="line">
                            <input type="text" id="name" name="name" placeholder="Name"
                                required pattern="[A-Za-zÀ-ÖØ-öø-ÿ]+([ '-][A-Za-zÀ-ÖØ-öø-ÿ]+)*">
                        </div>
                        <div class="line">
                            <input type="text" id="surname" name="surname" placeholder="Surname"
                                required pattern="[A-Za-zÀ-ÖØ-öø-ÿ]+([ '-][A-Za-zÀ-ÖØ-öø-ÿ]+)*">
                        </div>
                        <div class="line">
                            <input type="text" id="phone" name="phone" placeholder="+372 58678900"
                                required pattern="\+372 [0-9]{7,}">
                        </div>
                        <div class="line">
                            <input type="email" id="email" name="email" placeholder="name@example.com"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="line">
                            <input type="text" id="address" name="address" placeholder="Street 5, 221B, 20105, Tallinn, Estonia" pattern="[A-Za-z\s]+ \d{1,3},\s*\d{1,3},\s*\d{5},\s*Tallinn,\s*Estonia">
                        </div>
                    </div>
                    <button type="submit" name="submit-form">Book!</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
