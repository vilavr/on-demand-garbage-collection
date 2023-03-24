const usernameInput = document.querySelector('#username');
	const passwordInput = document.querySelector('#password');

	usernameInput.addEventListener('input', () => {
	const username = usernameInput.value.trim();
	const pattern = /^[A-Za-z][A-Za-z0-9_.]{4,14}$/;
	const alphabetPattern = /^[A-Za-z]*$/;

	if (!alphabetPattern.test(username)) {
		usernameInput.setCustomValidity('Username can only contain letters from English alphabet');
	} else if (username.length === 0) {
		usernameInput.setCustomValidity('Username is required');
	} else if (username.length < 5) {
		usernameInput.setCustomValidity('Username must be at least 5 characters');
	} else if (username.length > 15) {
		usernameInput.setCustomValidity('Username cannot be more than 15 characters');
	} else if (!pattern.test(username)) {
		usernameInput.setCustomValidity('Username can only contain letters, numbers, dots, and underscores, and must start with a letter');
	} else {
		usernameInput.setCustomValidity('');
	}
	});

	passwordInput.addEventListener('input', () => {
	const password = passwordInput.value.trim();
	const pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[_@$!%*?&])[A-Za-z\d_@$!%*?&]{8,15}$/;
	const alphabetPattern = /^[A-Za-z]*$/;

	if (!alphabetPattern.test(password)) {
		passwordInput.setCustomValidity('Password can only contain letters from English alphabet');
	} else if (password.length === 0) {
		passwordInput.setCustomValidity('Password is required');
	} else if (password.length < 8) {
		passwordInput.setCustomValidity('Password must be at least 8 characters');
	} else if (!/[a-z]/.test(password)) {
		passwordInput.setCustomValidity('Password must contain at least one lowercase letter');
	} else if (!/[A-Z]/.test(password)) {
		passwordInput.setCustomValidity('Password must contain at least one uppercase letter');
	} else if (!/\d/.test(password)) {
		passwordInput.setCustomValidity('Password must contain at least one number');
	} else if (!/[@$!%*?&_]/.test(password)) {
		passwordInput.setCustomValidity('Password must contain at least one special character');
	} else if (password.length > 15) {
		passwordInput.setCustomValidity('Password cannot be more than 15 characters');
	} else {
		passwordInput.setCustomValidity('');
	}
	});

	// add event listener for invalid event on username input
	usernameInput.addEventListener('invalid', () => {
	if (usernameInput.validity.valueMissing) {
		usernameInput.setCustomValidity('Username is required');
	} else {
		usernameInput.setCustomValidity('');
	}
	});

	// add event listener for invalid event on password input
	passwordInput.addEventListener('invalid', () => {
	if (passwordInput.validity.valueMissing) {
		passwordInput.setCustomValidity('Password is required');
	} else {
		passwordInput.setCustomValidity('');
	}
	});