// Get references to the input elements and error message elements
const usernameInput = document.getElementById('username');
const usernameError = document.getElementById('username-error');
const passwordInp = document.getElementById('password');
const passwordError = document.getElementById('password-error');

// Add event listener to the form submission
document.querySelector('form').addEventListener('submit', function(e) {
  // Check the validity of the username input
  if (!usernameInput.validity.valid) {
    e.preventDefault(); // Prevent the form from submitting
    if (usernameInput.validity.valueMissing) {
      usernameError.textContent = 'Username is required';
    } else if (usernameInput.validity.patternMismatch) {
      usernameError.textContent = 'Username must start with a letter and can only contain letters, numbers, underscores, and dots';
    } else if (usernameInput.validity.tooShort) {
      usernameError.textContent = 'Username must be at least 5 characters long';
    } else if (usernameInput.validity.tooLong) {
      usernameError.textContent = 'Username cannot be more than 15 characters long';
    }
  } else {
    usernameError.textContent = ''; // Clear the error message
  }
  
  // Check the validity of the password input
  if (!passwordInp.validity.valid) {
    e.preventDefault(); // Prevent the form from submitting
    if (passwordInp.validity.valueMissing) {
      passwordError.textContent = 'Password is required';
    } else if (passwordInp.validity.patternMismatch) {
      passwordError.textContent = 'Password must contain at least 1 lowercase letter, 1 uppercase letter, 1 number, and 1 special symbol (@$!%*?&)';
    } else if (passwordInp.validity.tooShort) {
        passwordError.textContent = 'Password must be at least 8 characters long';
    } else if (passwordInp.validity.tooLong) {
        passwordError.textContent = 'Password cannot be more than 15 characters long';
    }
    } else {
      passwordError.textContent = ''; // Clear the error message
    }
});
