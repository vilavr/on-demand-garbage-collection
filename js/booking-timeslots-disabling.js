// Get the current date and time
var now = new Date();

// Get the date picker input element
var datePicker = document.getElementById('datepicker');

// Get all the time slot elements
var timeSlots = document.querySelectorAll('.time-slots input[type="radio"]');

// Disable time slots that are in the past
disablePastTimeSlots();

// Add an event listener to the date picker that triggers the time slot disabling script when the date changes
datePicker.addEventListener('change', function() {
  // Disable time slots that are in the past
  disablePastTimeSlots();
});

function disablePastTimeSlots() {
  // Get the selected date from the date picker input
  var selectedDate = new Date(datePicker.value);

  // Loop through each time slot element
  timeSlots.forEach(function(slot) {
    // Get the value of the slot (which is the time in HH:MM format)
    var slotTime = slot.value.split(':');

    // Create a new date object for the slot time on the selected date
    var slotDate = new Date();
    slotDate.setFullYear(selectedDate.getFullYear());
    slotDate.setMonth(selectedDate.getMonth());
    slotDate.setDate(selectedDate.getDate());
    slotDate.setHours(slotTime[0]);
    slotDate.setMinutes(slotTime[1]);

    // Compare the slot time with the current time and date
    if (slotDate < now) {
      // Disable the slot if it's in the past
      slot.disabled = true;
      slot.nextElementSibling.setAttribute('disabled', true);
    } else {
      // Enable the slot if it's in the future
      slot.disabled = false;
      slot.nextElementSibling.removeAttribute('disabled');
    }
  });
}