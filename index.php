<?php
//  Настройки

//Роутер
    $url = $_SERVER['REQUEST_URI'];
    if ($url == null){
        $url = '/slide1';
    }
    $next = substr($url,-1) + 1;
    $preview = substr($url,-1) - 1;

    include_once __DIR__."/View/index.php";
