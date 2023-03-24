const passwordInp = document.querySelector('#password');
  const showPasswordButton = document.querySelector('#show-password');

  showPasswordButton.addEventListener('click', () => {
    const type = passwordInp.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInp.setAttribute('type', type);
    showPasswordButton.textContent = type === 'password' ? 'Show' : 'Hide';
  });