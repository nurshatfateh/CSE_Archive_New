const adminEmail = "admin@email.com";
const adminPass = "admin";

function loginValidator() {
  const email = document.getElementById("emailInput").value;
  const pass = document.getElementById("passwordInput").value;
  if (email === adminEmail && pass === adminPass) {
    window.location.href = "home.html";
  }
}
document.addEventListener("keypress", function (e) {
  if (e.key == "Enter") {
    loginValidator();
  }
});
