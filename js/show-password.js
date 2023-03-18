const showPasswordBtn = document.getElementById("show-password");
const passwordInput = document.getElementById("password");

showPasswordBtn.addEventListener("click", () => {
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