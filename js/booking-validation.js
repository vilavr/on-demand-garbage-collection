const dateInput = document.getElementById("datepicker");
const submitBtn = document.getElementById("submit-btn");

submitBtn.addEventListener("click", function(event) {
  if (dateInput.value === "") {
    event.preventDefault(); // prevent form submission
    alert("Please choose a date.");
  }
});