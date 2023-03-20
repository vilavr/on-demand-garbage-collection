document.getElementById("show-password").addEventListener("click", () => {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordBtn.textContent = "Hide";
        showPasswordBtn.classList.add("password-visible");
    } else {
        passwordInput.type = "password";
        showPasswordBtn.textContent = "Show";
        showPasswordBtn.classList.remove("password-visible");
    }
});