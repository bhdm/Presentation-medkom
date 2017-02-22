<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
//  Настройки
$dev = 1;
if (!isset($_SESSION['check1'])){
    $_SESSION['check1'] = 1;
}
if (!isset($_SESSION['check2'])){
    $_SESSION['check2'] = 1;
}

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

    if (isset($_POST['countOfYear'])){
        $_SESSION['slide1']['b2'] = htmlspecialchars($_POST['countOfYear']);
    }
    if (isset($_POST['specialty'])){
        unset($_SESSION['slide1']['spec']);
        foreach ($_POST['specialty'] as $key=> $spec){
            if (isset($spec) && $spec != null && $spec!= ''){
                $_SESSION['slide1']['spec'][] = array(
                    'title' => htmlspecialchars($spec),
                    'value' => htmlspecialchars((isset($_POST['value'][$key]) ? $_POST['value'][$key] : 0)),
                );
            }
        }
    }




// Пересчет параметров
$itog = new ItogClass();

//Роутер
    $url = $_SERVER['REQUEST_URI'];
    if ($url == null || $url == '' || $url == '/'){
        $url = '/slide1';
    }elseif($url == '/clear'){
        unset($_SESSION['slide1']);
        header( 'Location: /slide1', true, 301 );
    }
    $next = substr($url,-1) + 1;
    $preview = substr($url,-1) - 1;
    if ($url === '/table'){
        include_once __DIR__."/View/slides/table.php";
    }elseif($url === '/ajaxSlide5'){
        include_once __DIR__."/View/slides/ajaxSlide5.php";
    }else{
        $_SESSION['b3'] = 1;
        $_SESSION['b4'] = 1;
        $_SESSION['b5'] = 1;
        $_SESSION['b6'] = 1;
        $_SESSION['b7'] = 1;
        $_SESSION['b8'] = 1;
        include_once __DIR__."/View/index.php";
    }
