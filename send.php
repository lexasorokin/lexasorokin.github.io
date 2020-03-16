
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description"
        content="Zeen - онлайн платформа для организации мероприятий
    Мероприятия это то, что отличается от обычной жизни. Так же Zeen отличается от обычной трансляции мероприятия. Мы представляем комплекс услуг для создания особого он-лайн опыта для организаторов мероприятий.">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700|Roboto:300,400,500&display=swap&subset=cyrillic"
        rel="stylesheet">

    <link href="css/jquery.fancybox.min.css" media="all" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="css/ezmark.css" />
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/animate.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery.selectBox.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery.selectbox-mobile.css" />
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <link type="text/css" rel="stylesheet" href="css/style.css" />


    <script src="js/jquery-3.4.1.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.js"></script>-->
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.ezmark.min.js"></script>

    <script src="js/jquery.selectBox.js"></script>

    <script src="js/jquery.validate.js"></script>
    <script src="js/scriptjava_sender.js"></script>

    <script type="text/javascript" src="js/maskedinput.js"></script>
    <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>

    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript" src="js/jquery.animateNumber.js"></script>
    <script src="js/jquery.selectbox-mobile.js"></script>

    <script src="/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>

    <script src="js/main.js"></script> 


    <title>Zeen. Онлайн платформа для организации мероприятий</title>
</head>

<div id="main-wrapper">

    <!-- first screen -->
    <div id="firts-screen">
        <div class="first-screen-wrapper">

            <div class="overlay-first-screen">

                <div class="logo-bg">
                    <img src="img/logo-bg.svg" alt="logo background">
                </div>

                <div class="logo-vertical">
                    <div class="logo-vertical-shape-first"><img src="img/vertical-logo-shape-new.svg"
                            alt="vertical logo">
                    </div>
                    <div class="logo-vertical-white"><img src="img/vertical-logo.svg" alt="vertical logo background">
                    </div>
                    <div class="logo-vertical-shape"><img src="img/vertical-logo-shape-new.svg" alt="vertical logo">
                    </div>
                    <div class="logo-vertical-shape"><img src="img/vertical-logo-shape-new.svg" alt="vertical logo">
                    </div>
                    <div class="logo-vertical-shape"><img src="img/vertical-logo-shape-new.svg" alt="vertical logo">
                    </div>
                </div>

                <div class="logo">
                    <a href="/"><img src="img/logo.svg" alt="logo"
                            title="Zeen. Онлайн платформа для организации мероприятий"></a>
                </div>

                <div class="main-title">
                    <h1>Представляем Zeen. Онлайн платформа для организации мероприятий</h1>

                    <div class="sub-main-title">Мероприятия это то, что отличается от обычной жизни.  Так же Zeen
                        отличается
                        от обычной трансляции мероприятия. Мы представляем комплекс услуг для создания особого он-лайн
                        опыта
                        для организаторов мероприятий.</div>

                    <div class="action-buttons">
                        <a href="#six-screen"><button class="demo bts">Demo</button></a>
                        <a href="#contact-title"><button class="callback bts">Заявка</button></a>
                    </div>

                </div>

                <div class="header-bottom-logo">
                    <a href="https://eventum-premo.ru/" target="_blank"><img src="img/logo-ep.png" class="ep-logo"
                            alt="Eventum Premo"></a>
                    <img src="img/toola_logo.png" class="toola-logo" alt="Toola">
                </div>

            </div>

            <video loop="" muted="" autoplay="" poster="img/image-bg.png" class="fullscreen-bg__video">
                <source src="img/zeen.mp4" type="video/mp4">
                <source src="img/zeen.webm" type="video/webm">
            </video>

        </div>
    </div>
    <!-- end first screen -->



<?php
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$question = $_POST['question'];

$name = htmlspecialchars($name);
$company = htmlspecialchars($company);
$email = htmlspecialchars($email);
$question = htmlspecialchars($question);

$name = urldecode($name);
$company = urldecode($company);
$email = urldecode($email);
$question = urldecode($question);

$name = trim($name);
$company = trim($company);
$email = trim($email);
$question = trim($question);
//echo $name;
//echo "<br>";
//echo $company;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $question;


if (mail("zeen@eventum-premo.ru", "Заявка с сайта Zeen", "ФИО:".$name."  Компания:".$company.".  E-mail: ".$email." Описание задачи:".$question ,"From: info@eventum-premo.ru \r\n"))
 {     echo "<script>message()</script>";;
} else {
    echo "при отправке сообщения возникли ошибки";
}

//name, company, email, question
?>



</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>


</body>

</html>





