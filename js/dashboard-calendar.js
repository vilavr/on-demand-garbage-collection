// Calendar
var datepicker = document.getElementById('datepicker');
var calendarContainer = document.querySelector('.calendar-container');
var calendarMonthYear = document.querySelector('.calendar-month-year');
var calendarDays = document.querySelector('.calendar-days');
var calendarPrevMonth = document.querySelector('.calendar-prev-month');
var calendarNextMonth = document.querySelector('.calendar-next-month');
var timeSlots = document.querySelectorAll('.time-selector input[type="radio"]');

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

    // Disable past time slots
    timeSlots.forEach(function (slot) {
        var slotTime = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), slot.value.split(':')[0], slot.value.split(':')[1]).getTime();
        if (slotTime < currentDate.getTime()) {
            slot.disabled = true;
            slot.nextElementSibling.setAttribute('disabled', true);
        } else {
            slot.disabled = false;
            slot.nextElementSibling.removeAttribute('disabled');
        }
    });
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