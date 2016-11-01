<?php
session_start();

//  Настройки
$dev = 1;

if ($dev == 1){
    ini_set('error_reporting', E_ALL^E_NOTICE);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}


spl_autoload_register(function ($class_name) {
    if (file_exists('Classes/'.$class_name . '.php')) {
        require_once 'Classes/'.$class_name . '.php';
        return true;
    }
    return false;

});
// Пересчет параметров
$itog = new ItogClass();

//Роутер
    $url = $_SERVER['REQUEST_URI'];
    if ($url == null){
        $url = '/slide1';
    }elseif($url == '/clear'){
        unset($_SESSION['slide1']);
        header( 'Location: /slide1', true, 301 );
    }
    $next = substr($url,-1) + 1;
    $preview = substr($url,-1) - 1;
    if ($url == '/table'){
        include_once __DIR__."/View/slides/table.php";
    }else{
        include_once __DIR__."/View/index.php";
    }
