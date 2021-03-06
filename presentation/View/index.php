<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-s1cale=1.0"/>
    <link type="text/css" rel="stylesheet" href="<?=$domain?>/Resources/assets/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=$domain?>/Resources/assets/chosen/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="<?=$domain?>/Resources/assets/iCheck/skins/flat/flat.css"/>
    <link type="text/css" rel="stylesheet" href="<?=$domain?>/Resources/assets/iCheck/skins/flat/blue.css"/>
    <link type="text/css" rel="stylesheet" href="<?=$domain?>/Resources/assets/wow/css/libs/animate.css"/>
    <link type="text/css" rel="stylesheet" href="<?=$domain?>/Resources/css/common.css"/>

    <script type="application/javascript" src="<?=$domain?>/Resources/assets/jquery/dist/jquery.min.js"></script>
    <script type="application/javascript" src="<?=$domain?>/Resources/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="application/javascript" src="<?=$domain?>/Resources/assets/chosen/chosen.jquery.js"></script>
    <script type="application/javascript" src="<?=$domain?>/Resources/assets/iCheck/icheck.min.js"></script>
    <script type="application/javascript" src="<?=$domain?>/Resources/assets/canvasjs/canvasjs.min.js"></script>
    <script type="application/javascript" src="<?=$domain?>/Resources/assets/wow/dist/wow.min.js"></script>
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
<div class="container" style="<?=($url != '/slide6' ? 'width: 960px' : '0')?>">
    <?php
        include "slides".$url.".php";
    ?>
</div>

<footer>
    <div class="container row">
        <div class="col-xs-6 text-left">
            <?php
            if ($url !== '/slide1' && $url !== '/slide2' ){
                ?>
                <a href="<?=$domain?>/slide<?=$preview?>"><button class="btn btn-primary btn-back"><span class="glyphicon glyphicon-arrow-left"></span> Назад</button></a>
                <?php
            }elseif($url == '/slide2'){
                ?>
                <a href="<?=$domain?>/clear"><button class="btn btn-danger btn-back"><span class="glyphicon glyphicon-refresh"></span> Очистить</button></a>
                <?php
            }
            ?>
        </div>

        <div class="col-xs-6 text-right">
            <?php
            if ($url !== '/slide6' && $url !== '/slide1'){
                ?>
                <a href="<?=$domain?>/slide<?=$next?>"><button class="btn btn-primary btn-next">Далее <span class="glyphicon glyphicon-arrow-right"></span></button></a>
                <?php
            }
            ?>
        </div>
    </div>
</footer>
</body>
</html>