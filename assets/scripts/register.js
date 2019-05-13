var modal = document.getElementById('registrationForm');

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}