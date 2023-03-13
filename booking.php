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
            <a href="booking.html">Booking</a>
            <a href="orders.html">Orders</a>
            <a href="settings.html">Settings</a>
            <a href="index.html">Home</a>
            <a href="index.html" class="log-out">Log out</a>
        </nav>
    </aside>
    <div id="booking-main" class="booking">
        <!-- Open and Close button -->
        <div id="openbutton">
            <button class="openbtn" type="button" onclick="openNav();">
                <img src="img/menu-dash.png" alt="toggle menu">
            </button>
            <script>
                function openNav() {
                    document.getElementById("side-panel").style.width = "180px";
                    document.getElementById("booking-main").style.marginLeft = "200px";
                }

                function closeNav() {
                    document.getElementById("side-panel").style.width = "0";
                    if (window.innerWidth < 420) {
                        document.getElementById("booking-main").style.marginLeft = "10px";
                    } else {
                        document.getElementById("booking-main").style.marginLeft = "50px";
                    }
                }
            </script>
        </div>
        <div class="main-content">
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
                    <p>Enter your information</p>
                    <form action="order_confirmation.php" method="post" class="form-rows">
                        <div class="input-lines">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="field" placeholder=" Name" required
                                pattern="^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,200}$">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" name="surname" class="field" placeholder=" Surname" required
                                pattern="^[A-Za-z '\-šžõäöüŠŽÕÄÖÜ]{2,200}$">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="field" placeholder=" +372 58678900"
                                pattern="^[0-9\-\+ ]{7,15}$">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="field" placeholder=" name@example.com"
                                pattern="^[\w\-\.]{1,50}@([\w-]{1,50}\.){1,50}[\w-]{2,4}$">

                            <span class="Tallinn">&nbsp;Tallinn, Estonia</span>
                            <div class="line">
                                <div class="address-group street">
                                    <label for="street">Street name</label>
                                    <input type="text" id="street" name="street" class="field" placeholder=" Kopli"
                                        pattern="[A-Za-z0-9\s-]+">
                                </div>
                                <div class="address-group">
                                    <label for="house">House</label>
                                    <input type="text" id="house" name="house" class="field house" placeholder=" 8"
                                        pattern="\d{1,3}">
                                </div>
                                <div class="address-group">
                                    <label for="index">Postcode</label>
                                    <input type="text" id="index" name="index" class="field index" placeholder=" 21800"
                                        pattern="\d{5}">
                                </div>
                            </div>

                        </div>
                        <div class="time">
                            <label for="datepicker" class="calendar-label">Select a date:</label>
                            <div class="calendar-container">
                                <div class="calendar-header">
                                    <div class="calendar-prev-month">&lt;</div>
                                    <div class="calendar-month-year"></div>
                                    <div class="calendar-next-month">&gt;</div>
                                </div>
                                <div class="calendar-days"></div>
                            </div>
                            <div class="calendar-time">
                                <p>Free slots</p>
                            </div>
                        </div>

                        <input type="hidden" id="datepicker" name="datepicker">
                        <script>
                            var datepicker = document.getElementById('datepicker');
                            var calendarContainer = document.querySelector('.calendar-container');
                            var calendarMonthYear = document.querySelector('.calendar-month-year');
                            var calendarDays = document.querySelector('.calendar-days');
                            var calendarPrevMonth = document.querySelector('.calendar-prev-month');
                            var calendarNextMonth = document.querySelector('.calendar-next-month');

                            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                            var daysOfWeek = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];

                            var currentDate = new Date();
                            var selectedDate = currentDate;
                            var currentMonth = currentDate.getMonth();
                            var currentYear = currentDate.getFullYear();

                            function updateCalendar() {
                                calendarMonthYear.innerHTML = months[currentMonth] + ' ' + currentYear;

                                var firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay() || 7;
                                var daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

                                var daysHtml = '';

                                for (var i = 1; i <= 7; i++) {
                                    daysHtml += '<div class="calendar-day">' + daysOfWeek[i % 7] + '</div>';
                                }

                                for (var i = 1; i < firstDayOfMonth; i++) {
                                    daysHtml += '<div class="calendar-day"></div>';
                                }

                                var currentDate = new Date();
                                var today = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate()).getTime();

                                for (var i = 1; i <= daysInMonth; i++) {
                                    var date = new Date(currentYear, currentMonth, i);
                                    var classes = 'calendar-day';

                                    if (date.getTime() < today) {
                                        classes += ' past-date';
                                    } else if (date.getTime() === selectedDate.getTime()) {
                                        classes += ' selected';
                                    }

                                    if (date.toDateString() === currentDate.toDateString()) {
                                        classes += ' today';
                                    }

                                    daysHtml += '<div class="' + classes + '">' + i + '</div>';
                                }

                                calendarDays.innerHTML = daysHtml;
                            }

                            updateCalendar();

                            calendarPrevMonth.addEventListener('click', function () {
                                var prevMonth = currentMonth - 1;
                                var prevYear = currentYear;

                                // Check if previous month is in the past
                                if (prevMonth < currentDate.getMonth() && prevYear <= currentDate.getFullYear()) {
                                    return;
                                }

                                currentMonth--;
                                if (currentMonth < 0) {
                                    currentMonth = 11;
                                    currentYear--;
                                }
                                updateCalendar();
                            });

                            calendarNextMonth.addEventListener('click', function () {
                                currentMonth++;
                                if (currentMonth > 11) {
                                    currentYear++;
                                    currentMonth = 0;
                                }
                                updateCalendar();
                            });

                            datepicker.addEventListener('click', function () {
                                calendarContainer.classList.toggle('show');
                            });

                            calendarDays.addEventListener('click', function (event) {
                                var dayElement = event.target;
                                if (!dayElement.classList.contains('calendar-day')) {
                                    return;
                                }
                                var day = parseInt(dayElement.innerHTML);
                                selectedDate = new Date(currentYear, currentMonth, day);
                                updateCalendar();
                                datepicker.value = selectedDate.toLocaleDateString();
                                calendarContainer.classList.remove('show');
                            });

                        </script>
                        <br>


                        <button type="submit" name="submit-form">Book!</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</body>

</html>