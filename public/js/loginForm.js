var loginForm = document.getElementById('login-form');

var emriIPerdoruesittError = document.getElementById('usernameError');
var emriError = document.getElementById('emriError');


function validateField(value, error) {
    if(value === "" || value === null) {
        error.textContent = 'Ploteso fushen!';
        return false;
    }
    error.textContent = "";
    return true;
}


loginForm.addEventListener("submit", function(e) 
{
    var emriIPerdoruesit = document.getElementById("input-username").value;
    var emri = document.getElementById("input-emri").value;

    var emriIPerdoruesitHasError = !validateField(emriIPerdoruesit, emriIPerdoruesittError);
    var emriHasError = !validateField(emri,emriError);

    if(!emriIPerdoruesitHasError && !emriHasError) {
        alert('Sukses');
    }
    if(emriIPerdoruesitHasError ||emriHasError ) {
        e.preventDefault();
    }
})