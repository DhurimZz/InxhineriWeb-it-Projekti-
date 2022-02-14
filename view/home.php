<?php 
session_start();
if(!isset($_SESSION['email'])) {
    echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/loginForm.php"); </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shëndeti Im</title>
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="stylesheet" href="./public/css/slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="content-center">
            <div class="header-wrapper">
                <div class="wrapper-icon-pagename">
                    <div class="icon-menu js-toggle-nav">
                        <div class="icon-menu-item"></div>
                        <div class="icon-menu-item"></div>
                        <div class="icon-menu-item"></div>
                    </div>
                    <div class="pagename">ShëndetiIM</div>
                </div>
                <ul type="none" class="navigation">
                    <li class="navigation-item"><a class="foter-item-txt-link" href="home.php">BALLINA</a></li>
                    <li class="navigation-item"><a class="foter-item-txt-link" href="aboutUs.php">RRETH NESH</a></li>
                    <li class="navigation-item"><a class="foter-item-txt-link" href="contactUS.php">NA KONTAKTONI</a>
                    </li>
                    <li class="navigation-item"><a class="foter-item-txt-link" href="news.php">TE REJAT</a></li>
                </ul>
                <ul class="logo-social" type="none">
                    <li><img src="./public/Fotot/facebook.png" class="logo-social-item"></li>
                    <li><img src="./public/Fotot/instagram.png" class="logo-social-item"></li>
                    <li><img src="./public/Fotot/pinterest.png" class="logo-social-item"></li>
                    <li><img src="./public/Fotot/twitter.png" class="logo-social-item"></li>
                </ul>
            </div>
        </div>
    </header>
    <aside class="aside-navigation js-sidenav">
        <div class="aside-navigation-bg js-nav-bg"></div>
        <div class="aside-navigation-main">
            <ul type="none" class="aside-navigation-list">
                <li class="aside-navigation-link"><a class="foter-item-txt-link" href="home.php">BALLINA</a></li>
                <li class="aside-navigation-link"><a class="foter-item-txt-link" href="aboutUs.php">RRETH NESH</a></li>
                <li class="aside-navigation-link"><a class="foter-item-txt-link" href="contactUS.php">NA KONTAKTONI</a>
                </li>
                <li class="aside-navigation-link"><a class="foter-item-txt-link" href="news.php">TE REJAT</a></li>
                <li class="aside-navigation-link"><a class="foter-item-txt-link" href="loginForm.php">KYQU</a></li>
                <li class="aside-navigation-link"><a class="foter-item-txt-link" href="logout.php">ÇKYQU</a></li>
            </ul>
        </div>
    </aside>
    <hr>
    <div class="banner vh-60">
        <div class="content-center">
            <div class="banner-wrapper">
                <div class="banner-items">
                    <p class="banner-item-news">Te Rejat</p>
                    <p class="banner-item-title"><b>Informacion mbi COVID-19</b></p>
                    <p class="banner-item-text">Udhëzimet e mëposhtme ndihmojnë në parandalimin e përhapjes së Covid-19
                        mes
                        njerëzve në shtëpi dhe në bashkësi. Udhëzimi i përkohshëm bazohet në ato që dimë aktualisht në
                        lidhje me
                        infeksionet e tjera virale të frymëmarrjes dhe Covid-19. CDC (Center for Control Disease-Qendra
                        për
                        Kontrollë të Sëmundjeve) do të përditësojë...</p>
                    <button class="banner-item-button"><span class="banner-item-button-txt"> <a
                                href="https://niph-rks.org/njohurite-bazike-dhe-masat-mbrojtese-per-coronavirus-covid-19/"
                                class="link-button">Lexo më Shumë</a>
                        </span></button>
                </div>
                <div class="slider-container ">
                </div>
            </div>
        </div>
    </div>

    <div class="content-center">
        <div class="container pv-40px vh-60">
            <div class="container-left">
                <div class="container-left-photo"></div> <br>
                <p><a href="https://www.tpz.al/2017/09/29/10-menyra-per-te-qendruar-te-shendetshem-dhe-ne-forme/"
                        class="link-title"><b>10
                            Mënyra për të qëndruar të shëndetshëm dhe në formë</b></a></p><br>
                <p>Ndërkohë që bëjmë aq sa kemi mundësi të jemi sa më të shëndetshëm, kjo është gjithmonë një punë në
                    progres. Ka shumë elemente për një mënyrë jetese të shëndetshme. Përdorni këto këshilla si udhëzues
                    për
                    udhëtimin tuaj në rrugën e një shëndeti më të mirë dhe...</p><br>
                <p class="container-items-teks-author">Phd.Sc.Dhurim Zenuni</p>
            </div>
            <div class="container-right">
                <div class="container-right-items">
                    <div class="container-right-photo1"></div> <br>
                    <div class="container-right-items-tekst">
                        <p class="container-items-teks-title"><b> <a
                                    href="https://www.trt.net.tr/shqip/jeta-dhe-shendeti/2014/04/23/sa-i-rendesishem-eshte-aktiviteti-fizik-60978"
                                    class="link-title">
                                    Sa i rëndësishëm është aktiviteti fizik?</a></b></p><br>
                        <p class="container-items-teks-author">Phd.Arbnor Lama</p>
                    </div>
                </div>
                <div class="container-right-items">
                    <div class="container-right-photo2"></div> <br>
                    <div class="container-right-items-tekst">
                        <p class="container-items-teks-title"><b> <a
                                    href="https://top-channel.tv/2019/05/21/ja-menyrat-si-te-ushqehemi-shendetshem-cdo-dite/"
                                    class="link-title">
                                    Ja mënyrat si të ushqehemi shëndetshëm çdo ditë! </a></b></p>
                        <br>
                        <p class="container-items-teks-author">Dr.Bleron Nuredini</p>
                    </div>
                </div>
                <div class="container-right-items">
                    <div class="container-right-photo3"></div> <br>
                    <div class="container-right-items-tekst">
                        <p class="container-items-teks-title"><b><a
                                    href="https://indeksonline.net/gjumi-5-keshilla-qe-na-ndihmojne-te-flejme-mire/"
                                    class="link-title">
                                    Gjumi, 5 këshilla që na ndihmojnë të flejmë mirë</a></b></p>
                        <br>
                        <p class="container-items-teks-author">Dr.Elton Beqa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container2 pv-40px vh-60">
        <div class="content-center ">
            <div class="container2-wrapper">
                <div class="container2-txt">
                    <h2>Si mund ta mbroj familjen time derisa të marrim vaksinë për COVID-19?</h2>
                    <p class="container2-txt-pharagraph">Këtu janë dhënë disa masa paraprake, që ju dhe familja juaj
                        mund ti
                        ndërmerrni për të ndihmuar në
                        shmangien e infeksionit:</p>
                    <ul class="container2-txt-list">
                        <li>Lani duart shpesh duke përdor sapun dhe ujë </li>
                        <li>Mbani të paktën 1 metër distancë midis vetes dhe të tjerëve </li>
                        <li>Kërkoni herët kujdes mjekësor, nëse ju ose fëmija juaj keni ethe, kollë,<br> vështirësi në
                            frymëmarrje
                            ose simptoma të tjera të COVID-19</li>
                        <li>Shmangni vendet e mbushura me njerëz, hapësirat e kufizuara dhe të mbyllura.</li>
                        <li>Mbani maska kur të jeni në vende publike.</li>
                        <li>Ajrosni mirë të gjitha hapësirat e mbyllura.</li>
                    </ul>
                    <p class="container2-txt-pharagraph">Do të duhet kohë që një numër adekuat i njerëzve të vaksinohen.
                        Gjithashtu nuk është ende e sigurt nëse
                        vaksinimi do të parandalojë transmetimin, si dhe mbrojtjen e personit të vaksinuar nga sëmundja
                        e
                        rëndë.
                        Këto janë ndër arsyet pse edhe pasi ta marrim vaksinën, duhet të vazhdojmë ta praktikojmë
                        mbajtjen e
                        maskës, distancimin fizik dhe higjienën personale.</p>
                </div>
                <div class="container2-video">
                    <video controls class="container2-video-item" poster="./public/Fotot/original.jpg">
                        <source src="./public/videos/Coronavirus_Good Hygiene Starts Here.mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="container3  pv-40px ">
        <div class="content-center ">
            <div class="container3-wrapper ">
                <div class="container3-photo"></div>
                <div class="container3-txt-button">
                    <div class="container3-txt">
                        <p class="container3-txt-high"><b>RRI I SHENDETSHEM.</b><br>
                            <b>QËNDRO I INFORMUAR.</b>
                        </p>
                        <p class="container3-txt-low">Merrni Informatat e përditshme të Shëndetit dhe këshilla
                            shëndetësore,
                            përditësime për shëndetin dhe më shumë.</p>
                    </div>
                    <div class="container3-subform">
                        <input type="email" placeholder="Enter Your Email" class="container3-subform-input">
                        <button class="container3-subform-button">SUBSCRIBE NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer pv-40px ">
        <div class="content-center ">
            <div class="footer-wrapper">
                <div class="footer-items">
                    <h3 class="footer-items-title">Kategorit Shendetsore</h3>
                    <ul type="none">
                        <li class="footer-items-txt">Sëmundjet dhe gjendjet</li>
                        <li class="footer-items-txt">Simptomat & Shenjat</li>
                        <li class="footer-items-txt">Procedurat & Testet</li>
                        <li class="footer-items-txt">Medikamente</li>
                        <li class="footer-items-txt">Jetese e shendetshme</li>
                        <li class="footer-items-txt">Vitaminat & Suplementet</li>
                        <li class="footer-items-txt">Koleksioni i Imazheve</li>
                        <li class="footer-items-txt">Slideshow mjekësor</li>
                    </ul>
                </div>
                <div class="footer-items">
                    <h3 class="footer-items-title">Qendrat e njohura shëndetësore</h3>
                    <ul type="none">
                        <li class="footer-items-txt">Alergjitë</li>
                        <li class="footer-items-txt">HIV/AIDS</li>
                        <li class="footer-items-txt">Presioni i gjakut</li>
                        <li class="footer-items-txt">Kanceri</li>
                        <li class="footer-items-txt">Diabeti</li>
                        <li class="footer-items-txt">Semundje infektive</li>
                        <li class="footer-items-txt">Neurologjia</li>
                        <li class="footer-items-txt">më shumë...</li>
                    </ul>
                </div>
                <div class="footer-items">
                    <h3 class="footer-items-title">ShëndetiIM</h3>
                    <ul type="none">
                        <li class="footer-items-txt"><a class="foter-item-txt-link" href="home.php">BALLINA</a></li>
                        <li class="footer-items-txt"><a class="foter-item-txt-link" href="aboutUs.php">RRETH NESH</a>
                        </li>
                        <li class="footer-items-txt"><a class="foter-item-txt-link" href="contactUS.php">NA KONTAKTONI</a></li>
                        <li class="footer-items-txt"><a class="foter-item-txt-link" href="news.php">TE REJAT</a></li>
                        <li class="footer-items-txt"><a class="foter-item-txt-link" href="loginForm.php">KYQU</a></li>
                        <li class="footer-items-txt"><a class="foter-item-txt-link" href="logout.php">ÇKYQU</a></li>
                        <li class="footer-items-txt"><a class="foter-item-txt-link"
                                href="registerForm.php">REGJISTROHU</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/sidenav.js"></script>
</body>

</html>