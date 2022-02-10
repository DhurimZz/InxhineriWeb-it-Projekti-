var loginForm = document.getElementById('login-form');

var emriIPerdoruesittError = document.getElementById('emailError');
var passwordError = document.getElementById('passwordError');


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
    var emriIPerdoruesit = document.getElementById("input-email").value;
    var password = document.getElementById("input-password").value;

    var emriIPerdoruesitHasError = !validateField(emriIPerdoruesit, emriIPerdoruesittError);
    var passwordHasError = !validateField(password,passwordError);

    if(!emriIPerdoruesitHasError && !passwordHasError) {
        alert('SUCCESS');
    }
    if(emriIPerdoruesitHasError ||passwordHasError ) {
        e.preventDefault();
    }
})