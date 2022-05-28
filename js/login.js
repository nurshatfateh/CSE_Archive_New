/*eslint-env es6*/
const adminID = "admin";
const adminPass = "admin";

function loginValidator() {
const ID = document.getElementById("idInput").value;
const pass = document.getElementById("passwordInput").value;
  if (ID === adminID && pass === adminPass ) {
    window.location.href = "Admin_page/home_admin.html";
  }
}
document.addEventListener("keypress", function (e) {
  if (e.key == "Enter") {
    loginValidator();
  }
});
