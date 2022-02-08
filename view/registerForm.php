<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./public/css/registerForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>


<?php
    $name_error = '';
    $surename_error = '';
    $birthyear_error = '';
    $gender_error = '';
    $password_error = '';
    $country_error = '';
    $email_error = '';

    
    if( isset($_POST['registerForm'])){

        if( empty( $_POST['email']  ) ){
            $email_error = 'Ploteso Email!';
        }
  
        if( empty( $_POST['name']  ) ){
            $name_error = 'Ploteso Emrin!';
        }
 
        if( empty( $_POST['birthyear']  ) ){
            $birthyear_error = 'Ploteso Ditëlindjen!';
        }
   
        if( empty( $_POST['gjinia']  ) ){
            $gender_error = 'Ploteso Gjinin!';
        }
  
        if( empty( $_POST['password']  ) ){
            $password_error = 'Ploteso Fjalkalimin!';
        }
   
        if( empty( $_POST['country']  ) ){
            $country_error = 'Ploteso Shtetesin!';
        }
   
        if( empty( $_POST['surename']  ) ){
            $surename_error = 'Ploteso Mbiemrin!';
        }
    }
    

?>
<body>

    <div class="container">
        <div class="container-registerform">
            <form id="register-form"  class="container-registerform-items" method="post" name="registerForm">
                <span class="registerform-title">Regjistrimi </span>
                <div class="container-items-space">
                    <div class="row-space">
                        <label for="input-emri" class="registerform-data">Emri</label><br><br>
                        <input id="input-emri" value="<?php  echo  $name_error == '' &&  $_POST ? $_POST['name'] : '';?>" type="text" class="registerform-input" name="name">
                        <span id="error-emri" class="error"><?php echo $name_error;?></span>
                    </div>
                    <div class="row-space">
                        <label for="input-mbiemri" class="registerform-data">Mbiemri</label><br><br>
                        <input id="input-mbiemri" type="text" value="<?php  echo  $surename_error == '' &&  $_POST ? $_POST['surename'] : '';?>" class="registerform-input" name="surename">
                        <span id="error-mbiemri" class="error"><?php echo $surename_error;?></span>
                    </div>
                </div>
                <div class="container-items-space">
                    <div class="row-space">
                        <label class="registerform-data">Ditëlindja</label><br><br>
                        <input id="input-ditelindja" type="date" class="registerform-input" name="birthyear" value = <?php  echo  $birthyear_error == '' &&  $_POST ? $_POST['birthyear'] : '';?>>
                        <span id="error-ditelindja" class="error"><?php echo $birthyear_error;?></span>
                    </div>
                    <div class="row-space">
                        <div class="mb-30px">
                            <span class="registerform-data">Gjinia</span><br><br>
                            <label class="registerform-input-gander">
                                <input id="input-gjinia" type="radio"
                                    class="registerform-input-gandermale" <?php echo  $_POST && $gender_error === '' && $_POST["gjinia"] === "m" ? "checked" :"";?> name="gjinia" value="m" >
                                     Mashkullore
                            </label>
                            <label>
                                <input id="input-gjinia" type="radio" class="registerform-input-ganderfemale"  <?php echo  $_POST && $gender_error === '' && $_POST["gjinia"] === "f" ? "checked" :"";?> name="gjinia" value="f">
                                Femërore
                            </label>
                        </div>
                        <span id="error-gjinia" class="error"><?php echo $gender_error;?></span>
                    </div>
                </div>
                <div class="container-items-space">
                    <div class="row-space">
                        <label for= "input-email" class="registerform-data">Email</label><br><br>
                        <input id="input-email" type="email" class="registerform-input" name="email" value="<?php  echo  $email_error == '' &&  $_POST ? $_POST['email'] : '';?>">
                        <span id="error-email" class="error"><?php echo $email_error; ?></span>
                    </div>
                    <div class="row-space">
                        <label for= "input-fjalkalimi" class="registerform-data">Fjalkalimi</label><br><br>
                        <input id="input-fjalkalimi" type="password" class="registerform-input" name="password">
                        <span id="error-fjalkalimi" class="error"><?php echo $password_error;?></span>
                    </div>
                </div>
                <div class="container-registerform-citizenship">
                    <span>Shtestesia</span><br>
                    <select id="input-shtetesia" class="registerform-citizenship" name="country">
                        <option value="Shqipëria">Shqipëria</option>
                        <option value="Kosova">Kosova</option>
                    </select>
                    <span id="error-shtetesia" class="error"><?php echo $country_error;?></span>
                </div>
                <div class="container-registerform-button">
                    <button class="registerform-button">Regjistrohu</button>
                </div>
                <span id="error-general" class="error"></span>
            </form>
        </div>
    </div>
    <script src="./public/js/registerForm.js"></script>
</body>

</html>