var loginForm = document.getElementById('login-form');

var emriIPerdoruesittError = document.getElementById('usernameError');
var emailError = document.getElementById('emailError');


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
    var email = document.getElementById("input-email").value;

    var emriIPerdoruesitHasError = !validateField(emriIPerdoruesit, emriIPerdoruesittError);
    var emailHasError = !validateField(email, emailError);

    if(!emriIPerdoruesitHasError && !emailHasError) {
        alert('Sukses');
    }
    if(emriIPerdoruesitHasError || emailHasError ) {
        e.preventDefault();
    }
})