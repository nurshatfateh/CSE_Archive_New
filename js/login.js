const adminEmail = "admin@email.com";
const adminPass = "adminadmin";

function loginValidator() {
  const email = document.getElementById("email").value;
  const pass = document.getElementById("password").value;
  if (email === adminEmail && pass === adminPass) {
    window.location.href = "home.html";
  }
}
document.addEventListener("keypress", function (e) {
  if (e.key == "Enter") {
    loginValidator();
  }
});
