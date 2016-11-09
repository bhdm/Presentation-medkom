<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-s1cale=1.0"/>
    <link type="text/css" rel="stylesheet" href="/Resources/assets/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="/Resources/assets/chosen/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="/Resources/assets/iCheck/skins/flat/flat.css"/>
    <link type="text/css" rel="stylesheet" href="/Resources/assets/iCheck/skins/flat/blue.css"/>
    <link type="text/css" rel="stylesheet" href="/Resources/assets/wow/css/libs/animate.css"/>
    <link type="text/css" rel="stylesheet" href="/Resources/css/common.css"/>

    <script type="application/javascript" src="/Resources/assets/jquery/dist/jquery.min.js"></script>
    <script type="application/javascript" src="/Resources/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="application/javascript" src="/Resources/assets/chosen/chosen.jquery.js"></script>
    <script type="application/javascript" src="/Resources/assets/iCheck/icheck.min.js"></script>
    <script type="application/javascript" src="/Resources/assets/canvasjs/canvasjs.min.js"></script>
    <script type="application/javascript" src="/Resources/assets/wow/dist/wow.min.js"></script>
    <script>
        $(document).ready(function () {
            new WOW().init();
            $('.chosen').chosen({width: '100%'});
            $('.check').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue',
                labelHover: false,
                cursor: true
            });
        })
    </script>
</head>
<body>
<div class="container">
    <?php
        include "slides".$url.".php";
    ?>
</div>

<footer>
    <div class="container row">
        <div class="col-xs-6 text-left">
            <?php
            if ($url !== '/slide1'){
                ?>
                <a href="/slide<?=$preview?>"><button class="btn btn-primary btn-back"><span class="glyphicon glyphicon-arrow-left"></span> Назад</button></a>
                <?php
            }
            ?>
        </div>

        <div class="col-xs-6 text-right">
            <?php
            if ($url !== '/slide6'){
                ?>
                <a href="/slide<?=$next?>"><button class="btn btn-primary btn-next">Далее <span class="glyphicon glyphicon-arrow-right"></span></button></a>
                <?php
            }
            ?>
        </div>
    </div>
</footer>
</body>
</html>