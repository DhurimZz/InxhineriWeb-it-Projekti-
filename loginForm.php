<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./public/css/loginForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="container-loginform" id="login-form">
                <form class="container-loginform-items">
                <span class="loginform-title">ACCOUNT LOGIN</span>
                <span class="loginform-usernamepassword">USERNAME</span>
                <input type="text" class="loginform-input" id="input-username">
                <span id="usernameError" class="error"></span>
                <span class="loginform-usernamepassword">PASSWORD</span>
                <input type="password" class="loginform-input" id="input-password">
                <span id="passwordError" class="error"></span>
                <div class="loginform-checkbox">
                    <label> <input type="checkbox" > Remember me</label>
                    <span>Forgot Password?</span>
                </div>
                <div class="container-loginform-button">
                    <button class="loginform-button">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./public/js/loginForm.js" ></script>
</body>

</html>