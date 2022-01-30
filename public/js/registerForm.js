var registerForm = document.getElementById('register-form');

var emriMbiemriRegex = /^[a-zA-Z ]{2,30}$/;
var emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var numberRegex = /^\d+$/;;

var emriMbiemriErrorMsg = "Gabim emri" ;
var ditlindjaErrorMsg = "Gabim ditlindja" ;
var gjiniaErrorMsg = "" ;
var emailErrorMsg = "Gabim email" ;
var nrTelefonitErrorMsg= "Gabim nrTelefoinit" ;
var shtetesiaErrorMsg = "Gabim shtetesia" ;



var emriError = document.getElementById('error-emri');
var mbiemriError = document.getElementById('error-mbiemri');
var ditelindjaError = document.getElementById('error-ditelindja');
var gjiniaError = document.getElementById('error-gjinia');
var emailError = document.getElementById('error-email');
var nrTelefonitError = document.getElementById('error-nrTelefonit');
var shtetesiaError = document.getElementById('error-shtetesia');
var errorGeneral = document.getElementById('error-general');

function validateFields(value, regex, errorDisplay, errorMsg) {
    if(value === "" || value === null  ) {
        errorDisplay.textContent = "Plotëso fushën!";
        return false;
    }

    // false ose null ose undefined ose 0
    if( regex && !regex.test(value) ){
        errorDisplay.textContent = errorMsg;
        return false;      
    }
    errorDisplay.textContent = '';
    
    return true;
}


registerForm.addEventListener("submit", function(e){ 
    var emri = document.getElementById('input-emri').value.trim();
    var mbiemri = document.getElementById('input-mbiemri').value.trim();
    var ditelindja = document.getElementById('input-ditelindja').value.trim();
    var gjinia = "";
    var gjiniaOptions= document.getElementsByName('gjinia');
    var email = document.getElementById('input-email').value.trim();
    var nrTelefonit = document.getElementById('input-nrTelefonit').value.trim();
    var shtetesia = document.getElementById('input-shtetesia').value.trim();  

    for(var i = 0, length = gjiniaOptions.length; i < length; i++) {
        if(gjiniaOptions[i].checked) 
        {
            gjinia = gjiniaOptions[i].value;
            break;
        }
    }

    var emriHasError = !validateFields(emri, emriMbiemriRegex, emriError, emriMbiemriErrorMsg);
    var mbiemriHasError = !validateFields(mbiemri, emriMbiemriRegex, mbiemriError, emriMbiemriErrorMsg);
    var ditelindjaHasError = !validateFields(ditelindja, null, ditelindjaError, ditlindjaErrorMsg);
    var gjiniaHasError = !validateFields(gjinia, null, gjiniaError, emriMbiemriErrorMsg);
    var emailHasError = !validateFields(email, emailRegex, emailError, emailErrorMsg);
    var nrTelefonitHasError = !validateFields(nrTelefonit, null, nrTelefonitError, nrTelefonitErrorMsg);
    var shtetesiaHasError = !validateFields(shtetesia, null, shtetesiaError, shtetesiaErrorMsg);

    console.log(`${emriHasError} || ${mbiemriHasError} || ${ditelindjaHasError} || ${gjiniaHasError} || ${emailHasError} || ${nrTelefonitHasError} || ${shtetesiaHasError} `)
    if(emriHasError || mbiemriHasError || ditelindjaHasError || gjiniaHasError || emailHasError || nrTelefonitHasError || shtetesiaHasError ) {
        e.preventDefault()
    }
    
})