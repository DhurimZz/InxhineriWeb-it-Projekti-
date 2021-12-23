var registerForm = document.getElementById('register-form');

var emriMbiemriRegex = /^[a-zA-Z ]{2,30}$/;

var emriMbiemriError = "" ;
var ditlindjaError = "" ;
var gjiniaError = "" ;
var emailError = "" ;
var nrTelefonitError = "" ;
var shtetesiaError = "" ;
var generalError = "" ;



var emriError = document.getElementById('error-emri');
var mbiemriError = document.getElementById('error-mbiemri');
var ditelindjaError = document.getElementById('error-ditelindja');
var gjiniaError = document.getElementById('error-gjinia');
var emailError = document.getElementById('error-email');
var nrTelefonitError = document.getElementById('error-nrTelefonit');
var shtetesiaError = document.getElementById('error-shtetesia');
var errorGeneral = document.getElementById('error-general');

function validateFields(value, regex, errorDisplay) {
    if(value === "" && value === null && !regex.test(value) ) {
        return false;
    }
    return true;
    errorDisplay.innerHTML="Fusha e zbrazet";
}


registerForm.addEventListener("submit", function(e){ 
    e.preventDefault()

    var emri = document.getElementById('input-emri').value;
    var mbiemri = document.getElementById('input-mbiemri').value;
    var ditelindja = document.getElementById('input-ditelindja').value;
    var gjinia = document.getElementById('input-gjinia').value;
    var email = document.getElementById('input-email').value;
    var nrTelefonit = document.getElementById('input-nrTelefonit').value;
    var shtetesia = document.getElementById('input-shtetesia').value;
    
  if( validateFields(emri, emriMbiemriRegex, emriError) === true){
      alert("Form Submited")
  }
});