var signInmodal = document.getElementById("id01");
var signUpmodal = document.getElementById("id02");
window.onclick = function (event) {
  if (event.target == this.signInmodal || event.target == this.signUpmodal) {
    modal.style.display = "none";
  }
};
