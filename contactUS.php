<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShëndetiIM ContactUS</title>
    <link rel="stylesheet" href="./public/css/contactUS.css">
</head>

<body>
    <div class="content-center">
        <header class="header">
            <div class="wrapper-icon-pagename">
                <div class="icon-menu">
                    <div class="icon-menu-item"></div>
                    <div class="icon-menu-item"></div>
                    <div class="icon-menu-item"></div>
                </div>
                <div class="pagename">ShëndetiIM</div>
            </div>
            <ul class="logo-social" type="none">
                <li><img src="./Fotot/facebook.png" class="logo-social-item"></li>
                <li><img src="./Fotot/instagram.png" class="logo-social-item"></li>
                <li><img src="./Fotot/pinterest.png" class="logo-social-item"></li>
                <li><img src="./Fotot/twitter.png" class="logo-social-item"></li>
            </ul>
        </header>
    </div>
    <hr>
    <div class="body">
        <div class="conteiner">
            <div class="content">
                <div class="content-left-side">
                    <div class="title"><b>ContactUS</b></div>
                    <div class="content-adress">
                        <img src="./Fotot/icons8-address-50.png" class="icon-adress">
                        <div class="title">Adresa</div>
                        <div class="text1">UBT</div>
                        <div class="text2">Dega Ferizaj</div>
                    </div>
                    <div class="content-phone">
                        <img src="./Fotot/icons8-phone-30.png" class="icon-phone">
                        <div class="title">Nr.Telefonit</div>
                        <div class="text1">+38345472620</div>
                        <div class="text2">+38349924052</div>
                    </div>
                    <div class="content-email">
                        <img src="./Fotot/icons8-mail-50.png" class="icon-email">
                        <div class="title">Email</div>
                        <div class="text1">al55544@ubt-uni.net</div>
                        <div class="text2">dz52352@ubt-uni.net</div>
                    </div>
                </div>
                <div class="content-right-side">
                    <div class="content-right-side-title">Na dërgoni një mesazh</div>
                    <p class="content-right-side-text">Nëse keni një sygjerim, verejtje apo kritik për ne, apo ndonjë
                        lloj pyetjeje në lidhje me
                        Shëndetin, mund të dërgoni mesazhe nga këtu. Është kënaqësi t'ju ndihmojmë.</p>
                    <form name="form" onsubmit="return validForm()">
                        <div>
                            <input type="text" placeholder="Enter your name" class="input-box" name="name" id="name">
                            <div class="error-hint">Ju lutem shenoni emrin</div>
                        </div>
                        <div>
                            <input type="text" placeholder="Enter your email" class="input-box" name="email" id="email">
                            <div class="error-hint">Email-i juaj është i pavlefshëm!</div>
                        </div>
                        <div>
                            <textarea placeholder="Enter your message" class="input-box-message-box"></textarea>
                            <div class="error-hint">Ju lutemi plotësoni kutinë e tekstit!</div>
                        </div>
                        <div>
                            <input type="submit" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/contactUS.js"></script>
</body>

</html>